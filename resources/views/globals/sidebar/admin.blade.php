  <!-- Sidebar -->
  <aside :class="collapsed ? (dropdownOpen ? 'w-[180px]' : 'w-20') : 'w-64'" 
  class="fixed top-0 left-0 h-screen z-40 bg-sidebar text-white flex flex-col transition-[width] duration-300 ease-in-out overflow-y-auto"
  @click.away="dropdownOpen = false; activeDropdown = null" data-aside="">
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
          <svg xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24"
          stroke="currentColor" stroke-width="1.5"
          class="w-4 h-4 mr-2 flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M16 14c2.21 0 4 1.79 4 4v1H4v-1c0-2.21 1.79-4 4-4h8zM12 12a4 4 0 100-8 4 4 0 000 8z" />
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
            data-route="/client/create"
            data-renderTo="pageswap"
            data-renderFrom="client.create"
            data-renderAs="html">
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
          <svg xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 24 24"
               fill="none"
               stroke="currentColor"
               stroke-width="1.5"
               stroke-linecap="round"
               stroke-linejoin="round"
               class="w-4 h-4 mr-2 flex-shrink-0">
            <polygon points="12 2 20 6 12 10 4 6 12 2" />
            <polyline points="20 6 20 14 12 18 4 14 4 6" />
            <polyline points="4 14 12 18 20 14" />
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
          <a href="/postgres"
          class="flex items-center w-full pl-10 pr-4 py-2 text-sm hover:bg-black/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.5"
                 stroke-linecap="round"
                 stroke-linejoin="round"
                 class="w-4 h-4 mr-2 flex-shrink-0">
              <ellipse cx="12" cy="5" rx="9" ry="3" />
              <path d="M3 5v6c0 1.7 4 3 9 3s9-1.3 9-3V5" />
              <path d="M3 11v6c0 1.7 4 3 9 3s9-1.3 9-3v-6" />
            </svg>

            Postgres

          </a>
          <a href="/mysql"
          class="flex items-center w-full pl-10 pr-4 py-2 text-sm hover:bg-black/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.5"
                 stroke-linecap="round"
                 stroke-linejoin="round"
                 class="w-4 h-4 mr-2 flex-shrink-0">
              <ellipse cx="12" cy="5" rx="9" ry="3" />
              <path d="M3 5v6c0 1.7 4 3 9 3s9-1.3 9-3V5" />
              <path d="M3 11v6c0 1.7 4 3 9 3s9-1.3 9-3v-6" />
            </svg>

            MySQL

          </a>
        </div>

      </div>

      <div>

        <button
        @click="
        if (collapsed) {
          // willOpen is true when opening, false when closing
          dropdownOpen = activeDropdown !== 'admin';
        }
        activeDropdown = activeDropdown === 'admin' ? null : 'admin';"
        class="flex items-center w-full px-4 py-2 hover:bg-white/10 rounded-md transition-all"
        :class="collapsed ? 'justify-center' : 'gap-3'">
          <svg xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 24 24"
               fill="none"
               stroke="currentColor"
               stroke-width="1.5"
               stroke-linecap="round"
               stroke-linejoin="round"
               class="w-4 h-4 mr-2 flex-shrink-0">
            <polygon points="12 2 20 6 12 10 4 6 12 2" />
            <polyline points="20 6 20 14 12 18 4 14 4 6" />
            <polyline points="4 14 12 18 20 14" />
          </svg>
          <span class="text-white" x-show="!collapsed || dropdownOpen">Admin</span>
          <svg x-show="!collapsed || dropdownOpen" class="ml-auto transform" :class="activeDropdown === 'admin' ? 'rotate-90' : ''" width="16" height="16" fill="none">
            <path stroke="currentColor" stroke-width="2" d="M6 4l6 6-6 6" />
          </svg>
        </button>

        <div x-show="activeDropdown === 'admin'"
        x-transition
        x-cloak
        class="space-y-1 bg-[#0f7dbf] text-white">
          <a href="/admin/safekeys"
          class="flex items-center w-full pl-10 pr-4 py-2 
          text-sm hover:bg-black/10 transition-colors space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" 
            class="h-5 w-5 mr-2 flex-shrink-0" 
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" 
              stroke-width="2" d="M12 2l8 4v5c0 5.5-3.8 10.7-8 12-4.2-1.3-8-6.5-8-12V6l8-4z" />
              <path stroke-linecap="round" 
              stroke-linejoin="round" stroke-width="2" 
              d="M9 12l2 2l4-4" />
            </svg>

            Safekeys

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