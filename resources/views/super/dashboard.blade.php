<!DOCTYPE html>
<html lang="en">
@include('super.header.doctype')
<body class="h-full font-sans text-gray-800">

<div x-data="{ collapsed: false }" class="flex h-screen overflow-hidden">

  <!-- SIDEBAR -->
  <aside :class="collapsed ? 'w-20' : 'w-64'" class="transition-all duration-300 bg-[#0A1B32] text-white flex flex-col fixed h-full z-40">
    
    <!-- Logo -->
    <div :class="collapsed ? 'h-[64px] p-2' : 'h-[180px] p-4'"
         class="transition-all duration-300 border-b border-white/10 flex justify-center items-center overflow-hidden">
      <template x-if="!collapsed">
        <img src="/images/vision-street-square-logo-pixels.png"
             alt="Logo"
             class="w-full h-full object-contain" />
      </template>
      <template x-if="collapsed">
        <a href="/">
          <img src="/favicon-96x96.png"
               alt="V Icon"
               class="w-[30px] h-[30px] object-contain" />
        </a>
      </template>
    </div>


    <!-- Nav Items -->
    <nav class="flex-1 mt-4 space-y-1 text-sm">
      <a href="#" class="flex items-center px-4 py-2 hover:bg-white/10 rounded-md transition-all"
         :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
        <svg class="w-5 h-5 shrink-0 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" /><circle cx="12" cy="7" r="4" />
        </svg>
        <span class="text-white" x-show="!collapsed" x-cloak>Users</span>
      </a>

      <a href="#" class="flex items-center px-4 py-2 hover:bg-white/10 rounded-md transition-all"
         :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
        <svg class="w-5 h-5 shrink-0 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M5 13l4 4L19 7" />
        </svg>
        <span class="text-white" x-show="!collapsed" x-cloak>Clients</span>
      </a>

      <a href="#" class="flex items-center px-4 py-2 hover:bg-white/10 rounded-md transition-all"
         :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
        <svg class="w-5 h-5 shrink-0 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 8c-1.657 0-3 1.343-3 3v3h6v-3c0-1.657-1.343-3-3-3z"/><path d="M4 12v4h16v-4" />
        </svg>
        <span class="text-white" x-show="!collapsed" x-cloak>Leads</span>
      </a>

      <a href="#" class="flex items-center px-4 py-2 hover:bg-white/10 rounded-md transition-all"
         :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
        <svg class="w-5 h-5 shrink-0 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M9 17v-6h13M9 12H4M4 12v2a2 2 0 0 0 2 2h3" />
        </svg>
        <span class="text-white" x-show="!collapsed" x-cloak>Projects</span>
      </a>

      <a href="#" class="flex items-center px-4 py-2 hover:bg-white/10 rounded-md transition-all"
         :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
        <svg class="w-5 h-5 shrink-0 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M3 3v18h18" />
        </svg>
        <span class="text-white" x-show="!collapsed" x-cloak>SEO</span>
      </a>

      <a href="#" class="flex items-center px-4 py-2 hover:bg-white/10 rounded-md transition-all"
         :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
        <svg class="w-5 h-5 shrink-0 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <span class="text-white" x-show="!collapsed" x-cloak>Pipeline</span>
      </a>

      <a href="#" class="flex items-center px-4 py-2 hover:bg-white/10 rounded-md transition-all"
         :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
        <svg class="w-5 h-5 shrink-0 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2" />
        </svg>
        <span class="text-white" x-show="!collapsed" x-cloak>Tasks</span>
      </a>
    </nav>
  </aside>

  <!-- MAIN PANEL -->
  <div :class="collapsed ? 'ml-20' : 'ml-64'" class="transition-all duration-300 flex-1 flex flex-col bg-white">

    <!-- TOP NAV -->
    <header class="fixed top-0 left-0 right-0 z-40 h-16 flex items-center justify-between px-6 bg-white border-b border-gray-200">

      <!-- Collapse Button -->
      <button @click="collapsed = !collapsed" class="text-gray-600 hover:text-black cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Search Box -->
      <div class="w-full flex justify-center">
        <input type="text" placeholder="Search..."
               class="w-[60%] max-w-[700px] pl-5 py-2 text-base border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400">
      </div>

      <!-- Settings Dropdown -->
      <div x-data="{ open: false }" class="relative">
        <!-- Gear Icon -->
        <button @click="open = !open" @click.away="open = false" aria-label="Settings"
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
                     1.65 0 0 0-1.51 1z" />
          </svg>
        </button>

        <!-- Dropdown Menu -->
        <div x-show="open" x-transition 
             class="absolute right-0 mt-2 w-36 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
          <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
          <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="cursor-pointer w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
              Log out
            </button>
          </form>
        </div>
      </div>

    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-10 pt-24 overflow-auto">
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
</div>
@include('super.footer.main')

</body>
</html>
