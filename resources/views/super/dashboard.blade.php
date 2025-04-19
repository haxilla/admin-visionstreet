@include('super.header.doctype')
<body class="bg-white h-full font-sans text-gray-800">

<div x-data="{ collapsed: false }" class="flex h-screen overflow-hidden relative">

  <!-- Sidebar -->
  <aside 
    :class="collapsed ? 'w-20' : 'w-64'" 
    class="transition-all duration-300 bg-sidebar text-white flex flex-col fixed h-full z-40"
  >
    <!-- Logo -->
    <div class="px-4 py-5 border-b border-white/10 text-center">
      <template x-if="!collapsed">
        <img src="/images/vision-street-square-logo-pixels.png" alt="Vision Street Logo" class="h-12 mx-auto">
      </template>
      <template x-if="collapsed">
        <img src="/images/vision-V-icon.png" alt="V Logo" class="h-8 mx-auto">
      </template>
    </div>

    <!-- Nav Items -->
    <nav class="flex-1 mt-6 space-y-1 text-sm">
      <a href="#" class="flex items-center px-4 py-2 gap-3 hover:bg-white/10" :class="collapsed ? 'justify-center' : ''">
        <svg class="w-5 h-5" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24">
          <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" /><circle cx="12" cy="7" r="4" />
        </svg>
        <span x-show="!collapsed">Users</span>
      </a>
      <!-- Add additional items here... -->
    </nav>
  </aside>

  <!-- Persistent Toggle Button -->
  <div class="absolute top-4 left-4 z-50">
    <button @click="collapsed = !collapsed" class="text-gray-600 bg-white border rounded-full p-1 shadow hover:text-black transition">
      <svg class="w-6 h-6" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24">
        <path d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Main Content -->
  <div :class="collapsed ? 'ml-20' : 'ml-64'" class="transition-all duration-300 flex-1 flex flex-col">

    <!-- Top Navigation -->
    <header class="w-full h-16 flex items-center justify-end px-6 bg-white border-b border-gray-200">
      <div class="flex items-center gap-4">
        <input type="text" placeholder="Search..." class="px-3 py-1.5 text-sm border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200">
        <button>
          <svg class="w-6 h-6 text-gray-600 hover:text-gray-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 4v1M12 19v1M4 12h1M19 12h1M5.64 5.64l.7.7M17.66 17.66l.7.7M5.64 18.36l.7-.7M17.66 6.34l.7-.7M12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8z" />
          </svg>
        </button>
      </div>
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
