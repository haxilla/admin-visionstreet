@include('super.header.doctype')
<body class="bg-white h-full font-sans text-gray-800" x-data="{ collapsed: false, dropdownOpen: false }">
    <div>
        <!-- Sidebar -->
        <aside :class="(collapsed && dropdownOpen) ? 'w-64' : (collapsed ? 'w-20' : 'w-64')" class="fixed top-0 left-0 h-screen z-40 bg-sidebar text-white flex flex-col transition-all duration-300">
            <!-- Sidebar Logo Block -->
            <div :class="collapsed ? 'h-20 p-2' : 'h-[160px] py-6 px-6'" class="border-b border-white/10 flex items-center justify-center overflow-hidden transition-all duration-300">
                <a href="/">
                    <template x-if="!collapsed">
                      <img src="/images/vision-street-square-logo-pixels.png"
                           alt="Full Logo"
                           class="max-h-[120px] w-auto object-contain" />
                    </template>
                    <template x-if="collapsed">
                      <img src="/favicon-96x96.png"
                           alt="Collapsed Logo"
                           class="w-8 h-8 mx-auto block" />
                    </template>
                </a>
            </div>

            <nav class="flex-1 mt-4 space-y-1 text-sm">
                <div x-data="{ open: false }" class="relative">
  <!-- Main nav item -->
  <a @click="open = !open"
     class="flex items-center px-4 py-2 hover:bg-white/10 rounded-md transition-all"
     :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
    
    <svg class="w-5 h-5 shrink-0 text-white">...</svg>

    <span x-show="!collapsed" class="text-white" x-cloak>Users</span>

    <svg class="w-4 h-4 text-white ml-auto" x-show="!collapsed" x-cloak>
      <path d="M9 5l7 7-7 7" />
    </svg>
  </a>

  <!-- Submenu when expanded -->
  <div x-show="open && !collapsed" x-cloak class="pl-12 mt-1 space-y-1 text-sm text-white">
    <a href="/users/all" class="block hover:text-blue-300">All Users</a>
    <a href="/users/new" class="block hover:text-blue-300">Add User</a>
  </div>

  <!-- Flyout submenu when collapsed -->
  <div x-show="open && collapsed"
       x-cloak
       class="absolute left-full top-0 mt-2 bg-[#0A1B32] p-3 rounded-md shadow-md z-50 space-y-1 text-sm w-40 text-white">
    <a href="/users/all" class="block hover:text-blue-300">All Users</a>
    <a href="/users/new" class="block hover:text-blue-300">Add User</a>
  </div>
</div>


            </nav>

        </aside>
    </div>

    <!-- Topbar -->
    <header :class="collapsed ? 'ml-20' : 'ml-64'" 
          class="fixed top-0 right-0 h-16 z-30 bg-white border-b border-gray-200 flex items-center justify-between px-6 transition-all duration-300 w-[calc(100%-5rem)]"
          :style="collapsed ? 'width: calc(100% - 5rem)' : 'width: calc(100% - 16rem)'">
    <!-- Sidebar toggle -->
    <button @click="collapsed = !collapsed" class="text-gray-600 hover:text-black focus:outline-none cursor-pointer">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Search bar -->
    <div class="flex-1 max-w-md mx-4">
      <input type="text" placeholder="Search..." 
             class="w-full px-4 py-2 text-sm border rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-accentTeal">
    </div>

    <!-- Gear dropdown -->
    <div x-data="{ open: false }" class="relative">
    <button @click="open = !open" @click.away="open = false"
            class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-100 transition cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" 
           class="w-6 h-6 text-gray-600 hover:text-black transition" 
           fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
        <circle cx="12" cy="12" r="3" />
        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 
                 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09a1.65 1.65 0 0 0-1-1.51 
                 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 
                 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09a1.65 
                 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 
                 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33h.09a1.65 1.65 0 
                 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51h.09a1.65 
                 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 
                 1.65 0 0 0-.33 1.82v.09a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 
                 1.65 0 0 0-1.51 1z"/>
      </svg>
    </button>
      <div x-show="open" x-transition 
           class="absolute right-0 mt-2 w-36 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
        <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
        <form method="POST" action="/logout">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 hover:text-red-700 cursor-pointer">
            Log out
          </button>
        </form>
      </div>
    </div>
    </header>

    <!-- Main Content -->
    <div :class="collapsed ? 'ml-20' : 'ml-64'" class="pt-16 transition-all duration-300">
    <main class="p-10 overflow-auto">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-black tracking-tight mb-2">Dashboard Overview</h1>
        <p class="text-gray-500 mb-10">This main content area adjusts when sidebar collapses.</p>
        <div class="flex items-center gap-6 flex-wrap">
          <div class="w-32 h-32 bg-accentTeal rounded-full"></div>
          <div class="w-16 h-16 bg-accentPink rounded"></div>
          <div class="w-20 h-20 bg-accentYellow rounded-full"></div>
        </div>
      </div>
    </main>
    </div>
    @include('super.footer.main')
</body>
</html>
