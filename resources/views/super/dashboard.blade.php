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
      <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-white/10 rounded-md"
         :class="{ 'justify-center': collapsed }">
        <!-- ICON ALWAYS VISIBLE -->
        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" /><circle cx="12" cy="7" r="4" />
        </svg>
        <!-- TEXT ONLY HIDDEN -->
        <span x-show="!collapsed" class="whitespace-nowrap">Users</span>
      </a>

      <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-white/10 rounded-md"
         :class="{ 'justify-center': collapsed }">
        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M5 13l4 4L19 7" />
        </svg>
        <span x-show="!collapsed" class="whitespace-nowrap">Clients</span>
      </a>

      <!-- Repeat others the same way -->
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
        <!-- Hamburger / X -->
        <svg x-show="!collapsed" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="collapsed" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Centered Search -->
      <div class="w-full flex justify-center">
        <input 
          type="text" 
          placeholder="Search..." 
          class="w-[60%] max-w-[700px] pl-5 py-2 text-base border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400"
        >
      </div>

      <!-- Settings Gear -->
      <button class="absolute right-6 text-gray-600 hover:text-gray-900">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5
