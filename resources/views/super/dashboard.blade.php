@include('super.header.doctype')
<body data-section="super"
class="linkcheck relative bg-white min-h-screen font-sans text-gray-800" x-data="{
collapsed: false,
dropdownOpen: false,
activeDropdown: null,
closing: false,
isOpen(route) { return this.activeDropdown === route; }}">

  <!-- Sidebar -->
  <aside :class="collapsed ? (dropdownOpen ? 'w-[180px]' : 'w-20') : 'w-64'" 
  class="fixed top-0 left-0 h-screen z-40 bg-sidebar text-white flex flex-col transition-[width] duration-300 ease-in-out overflow-y-auto"
  @click.away="dropdownOpen = false; activeDropdown = null">
    <!-- Sidebar Logo -->
    <div :class="collapsed ? 'h-20 p-2' : 'h-[160px] py-6 px-6'" 
    class="border-b border-white/10 flex items-center justify-center overflow-hidden transition-all duration-300">
      <a href="/">
        <template x-if="!collapsed">
          <img src="/images/vision-street-square-logo-pixels.png" alt="Full Logo"
               class="max-h-[120px] w-auto object-contain" />
        </template>
        <template x-if="collapsed">
          <img src="/favicon-96x96.png" alt="Collapsed Logo"
               class="w-8 h-8 mx-auto block" />
        </template>
      </a>
    </div>
    <nav class="flex-1 mt-4 space-y-1 text-sm">

      <div>

        <button
        @click="
        if (collapsed) {
          // willOpen is true when opening, false when closing
          dropdownOpen = activeDropdown !== 'client';
        }
        activeDropdown = activeDropdown === 'client' ? null : 'client';"
        class="flex items-center w-full px-4 py-2 hover:bg-white/10 rounded-md transition-all"
        :class="collapsed ? 'justify-center' : 'gap-3'">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M5 13l4 4L19 7" />
          </svg>
          <span class="text-white" x-show="!collapsed || dropdownOpen">Contacts</span>
          <svg x-show="!collapsed || dropdownOpen" class="ml-auto transform" :class="activeDropdown === 'client' ? 'rotate-90' : ''" width="16" height="16" fill="none">
            <path stroke="currentColor" stroke-width="2" d="M6 4l6 6-6 6" />
          </svg>
        </button>

        <div x-show="activeDropdown === 'client'"
        x-transition
        x-cloak
        class="space-y-1 bg-[#0f7dbf] text-white">
          <a href="/admin/contacts"
          class="flex items-center w-full pl-10 pr-4 py-2 text-sm hover:bg-black/10 transition-colors">
            <!-- Eye icon for “View” -->
            <svg xmlns="http://www.w3.org/2000/svg"
            class="w-4 h-4 mr-2 flex-shrink-0"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"            
            d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7
            c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
            </svg>
              View
          </a>
          <a href="#"
            class="flex items-center w-full pl-10 pr-4 py-2 text-sm hover:bg-black/10 transition-colors"
            data-action="handle"
            data-renderto="pageswap"
            data-renderfrom="client.create"
            data-renderas="html">
            <!-- Plus icon for “Add” -->
            <svg xmlns="http://www.w3.org/2000/svg"
            class="w-4 h-4 mr-2 flex-shrink-0"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
              Add
          </a>
        </div>

      </div>

      <div>

        <button
        @click="
        if (collapsed) {
          // willOpen is true when opening, false when closing
          dropdownOpen = activeDropdown !== 'data';
        }
        activeDropdown = activeDropdown === 'data' ? null : 'data';"
        class="flex items-center w-full px-4 py-2 hover:bg-white/10 rounded-md transition-all"
        :class="collapsed ? 'justify-center' : 'gap-3'">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M5 13l4 4L19 7" />
          </svg>
          <span class="text-white" x-show="!collapsed || dropdownOpen">Data</span>
          <svg x-show="!collapsed || dropdownOpen" class="ml-auto transform" :class="activeDropdown === 'data' ? 'rotate-90' : ''" width="16" height="16" fill="none">
            <path stroke="currentColor" stroke-width="2" d="M6 4l6 6-6 6" />
          </svg>
        </button>

        <div x-show="activeDropdown === 'data'"
        x-transition
        x-cloak
        class="space-y-1 bg-[#0f7dbf] text-white">
          <a href="/admin/postgres"
          class="flex items-center w-full pl-10 pr-4 py-2 text-sm hover:bg-black/10 transition-colors">
            <!-- Eye icon for “View” -->
            <svg xmlns="http://www.w3.org/2000/svg"
            class="w-4 h-4 mr-2 flex-shrink-0"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"            
            d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7
            c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
            </svg>
              Postgres
          </a>
          <a href="/admin/mysql"
          class="flex items-center w-full pl-10 pr-4 py-2 text-sm hover:bg-black/10 transition-colors">
            <!-- Plus icon for “Add” -->
            <svg xmlns="http://www.w3.org/2000/svg"
            class="w-4 h-4 mr-2 flex-shrink-0"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
              MySQL
          </a>
        </div>

      </div>

    </nav>

  </aside>

  <!-- Seamless Sidebar Toggle Tab -->
  <div 
  class="fixed z-50 top-4 transition-all duration-300" 
  :style="collapsed ? (dropdownOpen ? 'left: 180px' : 'left: 72px') : 'left: 256px'">
    <button 
    @click="collapsed = !collapsed"
    activeDropdown = null;
    dropdownOpen = false;
    class="h-10 w-6 bg-sidebar text-white rounded-r-md flex items-center justify-center cursor-pointer"
    aria-label="Toggle Sidebar">
      <svg xmlns="http://www.w3.org/2000/svg"
           class="w-4 h-4 transition-transform duration-300"
           :class="collapsed ? '' : 'rotate-180'"
           fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
      </svg>
    </button>
  </div>

  <!-- Header -->
  <header 
  :class="collapsed ? 'ml-20' : 'ml-64'" 
  class="fixed top-0 right-0 h-16 z-30 bg-white border-b border-gray-100 flex items-center px-6 transition-all duration-300" :style="collapsed ? 'width: calc(100% - 5rem)' : 'width: calc(100% - 16rem)'">

    <!-- Centered Search Bar -->
    <div class="flex-1 flex justify-center">
      <div class="w-full max-w-xl">
        <input type="text" placeholder="Search..." 
        class="w-full px-4 py-2 text-sm border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-accentTeal">
      </div>
    </div>

    <!-- Gear dropdown -->
    <div x-data="{ open: false }" class="relative ml-auto">
      <button @click="open = !open" @click.away="open = false"
      class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-100 transition cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 hover:text-black transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
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
      <div x-show="open" x-cloak x-transition
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
  <main
  class="transition-all duration-300 min-h-screen pt-16"
  :class="collapsed ? 'left-20' : 'left-64'">
    <div class="pageswap p-6">
      <!-- dynamic content goes here -->
    </div>
  </main>

@include('super.footer.main')
</body>
