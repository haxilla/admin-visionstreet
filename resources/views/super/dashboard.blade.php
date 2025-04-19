<!DOCTYPE html>
<html lang="en">
@include('super.header.doctype')
<body class="h-full font-sans text-gray-800">

<div x-data="{ collapsed: false }" class="flex h-screen overflow-hidden">

  <!-- SIDEBAR -->
  <aside :class="collapsed ? 'w-20' : 'w-64'" class="transition-all duration-300 bg-[#0A1B32] text-white flex flex-col fixed h-full z-40">
    
    <!-- Logo -->
    <div :class="collapsed ? 'h-[64px] p-2' : 'h-[140px] p-6'"
         class="transition-all duration-300 border-b border-white/10 flex justify-center items-center overflow-hidden">
      <template x-if="!collapsed">
        <img src="/images/vision-street-square-logo-pixels.png"
             alt="Logo"
             class="w-full h-full object-contain" />
      </template>
      <template x-if="collapsed">
        <img src="/images/vision-V-icon.png"
             alt="V Icon"
             class="w-[40px] h-[40px] object-contain" />
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
    <header class="h-20 flex items-center justify-between px-6 border-b border-gray-200 bg-white relative">

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

      <!-- Gear Icon -->
      <svg class="w-7 h-7 text-gray-600 absolute right-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.591 1.062c1.527-.88 3.276.869 2.397 2.397a1.724 1.724 0 0 0 1.061 2.59c1.757.427 1.757 2.924 0 3.351a1.724 1.724 0 0 0-1.061 2.59c.879 1.528-.87 3.277-2.397 2.397a1.724 1.724 0 0 0-2.591 1.061c-.426 1.757-2.924 1.757-3.35 0a1.724 1.724 0 0 0-2.59-1.061c-1.528.88-3.277-.869-2.398-2.397a1.724 1.724 0 0 0-1.06-2.59c-1.757-.427-1.757-2.924 0-3.351a1.724 1.724 0 0 0 1.06-2.59c-.879-1.528.87-3.277 2.398-2.397a1.724 1.724 0 0 0 2.59-1.061z"/>
        <circle cx="12" cy="12" r="3" />
      </svg>
    </header>

    <!-- MAIN CONTENT -->
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
@include('super.footer.main')

</body>
</html>
