@include('super.header.doctype')
<body class="bg-white h-full font-sans text-gray-800" x-data="{
collapsed: false,
dropdownOpen: false,
activeDropdown: null,
closing: false,
isOpen(route) {return this.activeDropdown === route;}}">
<!-- Sidebar Toggle Button -->
<!-- Sidebar Toggle Button -->
<!-- Add this inside your <aside> tag -->
<button 
  @click="collapsed = !collapsed"
  class="absolute top-6 -right-4 w-8 h-8 bg-white text-gray-700 border border-gray-300 shadow-sm 
         hover:bg-gray-100 transition-all rounded-full flex items-center justify-center z-50"
>
  <svg xmlns="http://www.w3.org/2000/svg"
       class="w-4 h-4 transition-transform duration-300"
       fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
       :class="collapsed ? '' : 'rotate-180'">
    <path d="M15 19l-7-7 7-7" />
  </svg>
</button>

  <svg xmlns="http://www.w3.org/2000/svg"
       class="w-4 h-4 transition-transform duration-300"
       fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
       :class="collapsed ? '' : 'rotate-180'">
    <path d="M15 19l-7-7 7-7" />
  </svg>
</button>

  <svg xmlns="http://www.w3.org/2000/svg" 
       class="w-4 h-4 transition-transform duration-300"
       fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
       :class="collapsed ? 'rotate-180' : ''">
    <path d="M15 19l-7-7 7-7" />
  </svg>
</button>

    <div>
       <aside 
  :class="relative collapsed ? (dropdownOpen ? 'w-[180px]' : 'w-20') : 'w-64'" 
  class="fixed top-0 left-0 h-screen z-40 bg-sidebar text-white flex flex-col transition-[width] duration-300 ease-in-out overflow-y-auto"
  @click.away="dropdownOpen = false; activeDropdown = null"
>

  <!-- Sidebar Logo Block -->
  <div 
    :class="collapsed ? 'h-20 p-2' : 'h-[160px] py-6 px-6'" 
    class="border-b border-white/10 flex items-center justify-center overflow-hidden transition-all duration-300">
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

  <!-- Navigation with Dropdowns -->
  <nav class="flex-1 mt-4 space-y-1 text-sm">
    <template x-for="section in [
      {
        title: 'Users',
        route: 'users',
        icon: `<path d='M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2' /><circle cx='12' cy='7' r='4' />`
      },
      {
        title: 'Clients',
        route: 'clients',
        icon: `<path d='M5 13l4 4L19 7' />`
      },
      {
        title: 'Projects',
        route: 'projects',
        icon: `<path d='M9 17v-6h13M9 12H4M4 12v2a2 2 0 0 0 2 2h3' />`
      },
      {
        title: 'Leads',
        route: 'leads',
        icon: `<path d='M12 8c-1.657 0-3 1.343-3 3v3h6v-3c0-1.657-1.343-3-3-3z' /><path d='M4 12v4h16v-4' />`
      }
    ]" :key="section.route">
      <div>
        <!-- Dropdown Parent -->
        <button 
          @click="
            dropdownOpen = true;
            activeDropdown = (activeDropdown === section.route) ? null : section.route;
          "
          class="flex items-center w-full px-4 py-2 hover:bg-white/10 rounded-md transition-all"
          :class="collapsed ? 'justify-center' : 'gap-3'">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
               x-html="section.icon"></svg>
          <span class="text-white" x-show="!collapsed" x-text="section.title" x-cloak></span>
          <svg x-show="!collapsed"
               :class="isOpen(section.route) ? 'rotate-90' : ''"
               class="w-4 h-4 ml-auto transition-transform"
               fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 5l7 7-7 7" />
          </svg>
        </button>

        <!-- Dropdown Content -->
        <div
          x-show="isOpen(section.route) && (!collapsed || dropdownOpen)"
          x-cloak
          :class="[
            collapsed ? 'text-center space-y-1 mt-0 px-2' : 'space-y-1 mt-0',
            'bg-[#2e4a7f] py-2 text-white',
            'transition-all duration-300 ease-in-out transform origin-top',
            isOpen(section.route) ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-1 scale-95'
          ]"
        >
          <a :href="'/' + section.route"
             class="block w-full px-4 py-2 text-sm hover:bg-white/10">
            All <span x-text="section.title"></span>
          </a>
          <a :href="'/' + section.route + '/create'"
             class="block w-full px-4 py-2 text-sm hover:bg-white/10">
            New <span x-text="section.title"></span>
          </a>
        </div>
      </div>
    </template>
  </nav>
</aside>
 
    </div>

<!-- Topbar -->
<header :class="collapsed ? 'ml-20' : 'ml-64'" 
      class="fixed top-0 right-0 h-16 z-30 bg-white border-b border-gray-200 flex items-center justify-between px-6 transition-all duration-300 w-[calc(100%-5rem)]"
      :style="collapsed ? 'width: calc(100% - 5rem)' : 'width: calc(100% - 16rem)'">

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
</body>
