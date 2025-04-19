@include('super.header.doctype')
<body class="h-full font-sans text-gray-800">

<div x-data="{ collapsed: false }" class="flex h-screen overflow-hidden">

  <!-- Sidebar -->
  <aside 
    :class="collapsed ? 'w-20' : 'w-64'" 
    class="transition-all duration-300 bg-[#0A1B32] text-white flex flex-col fixed h-full z-40"
  >
    <!-- Logo -->
    <div class="px-4 py-4 border-b border-white/10 flex justify-center">
      <template x-if="!collapsed">
        <img src="/images/vision-street-square-logo-pixels.png" alt="Vision Street Logo" class="h-10">
      </template>
      <template x-if="collapsed">
        <img src="/images/vision-V-icon.png" alt="V Icon" class="h-8">
      </template>
    </div>

    <!-- Nav Items -->
    <nav class="flex-1 mt-4 space-y-1 text-sm">
      <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-white/10 rounded-md" :class="{ 'justify-center': collapsed }">
        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" /><circle cx="12" cy="7" r="4" />
        </svg>
        <span x-show="!collapsed">Users</span>
      </a>
      <!-- Repeat for other nav items -->
    </nav>
  </aside>

  <!-- Main Content -->
  <div :class="collapsed ? 'ml-20' : 'ml-64'" class="transition-all duration-300 flex-1 flex flex-col bg-white">

    <!-- Topnav -->
    <header class="h-20 flex items-center justify-between px-6 border-b border-gray-200 bg-white relative">

      <!-- Collapse Toggle -->
      <button 
        @click="collapsed = !collapsed" 
        class="absolute left-6 text-gray-600 hover:text-gray-900 focus:outline-none"
      >
        <svg x-show="!collapsed" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="collapsed" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Centered Search Bar -->
      <div class="w-full flex justify-center">
        <input 
          type="text" 
          placeholder="Search..." 
          class="w-[50%] max-w-[600px] px-6 py-3 text-base border border-gray-300 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400 transition-all"
        >
      </div>

      <!-- Settings Icon (Right) -->
      <button class="absolute right-6 text-gray-600 hover:text-gray-900">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.591 1.062c1.527-.88 3.276.869 2.397 2.397a1.724 1.724 0 0 0 1.061 2.59c1.757.427 1.757 2.924 0 3.351a1.724 1.724 0 0 0-1.061 2.59c.879 1.528-.87 3.277-2.397 2.397a1.724 1.724 0 0 0-2.591 1.061c-.426 1.757-2.924 1.757-3.35 0a1.724 1.724 0 0 0-2.59-1.061c-1.528.88-3.277-.869-2.398-2.397a1.724 1.724 0 0 0-1.06-2.59c-1.757-.427-1.757-2.924 0-3.351a1.724 1.724 0 0 0 1.06-2.59c-.879-1.528.87-3.277 2.398-2.397a1.724 1.724 0 0 0 2.59-1.061z"/>
          <circle cx="12" cy="12" r="3" />
        </svg>
      </button>
    </header>

    <!-- Page Content -->
    <main class="flex-1 p-10 overflow-auto">
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

<!-- Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
