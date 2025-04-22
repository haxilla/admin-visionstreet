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
          <a href="/admin/postgres"
          class="flex items-center w-full pl-10 pr-4 py-2 text-sm hover:bg-black/10 transition-colors">
<svg xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 25.6 25.6" width="64"><style><![CDATA[.B{stroke-linecap:round}.C{stroke-linejoin:round}.D{stroke-linejoin:miter}.E{stroke-width:.716}]]></style><g fill="none" stroke="#fff"><path d="M18.983 18.636c.163-1.357.114-1.555 1.124-1.336l.257.023c.777.035 1.793-.125 2.4-.402 1.285-.596 2.047-1.592.78-1.33-2.89.596-3.1-.383-3.1-.383 3.053-4.53 4.33-10.28 3.227-11.687-3.004-3.84-8.205-2.024-8.292-1.976l-.028.005c-.57-.12-1.2-.19-1.93-.2-1.308-.02-2.3.343-3.054.914 0 0-9.277-3.822-8.846 4.807.092 1.836 2.63 13.9 5.66 10.25C8.29 15.987 9.36 14.86 9.36 14.86c.53.353 1.167.533 1.834.468l.052-.044a2.01 2.01 0 0 0 .021.518c-.78.872-.55 1.025-2.11 1.346-1.578.325-.65.904-.046 1.056.734.184 2.432.444 3.58-1.162l-.046.183c.306.245.285 1.76.33 2.842s.116 2.093.337 2.688.48 2.13 2.53 1.7c1.713-.367 3.023-.896 3.143-5.81" fill="#000" stroke="#000" stroke-linecap="butt" stroke-width="2.149" class="D"/><path d="M23.535 15.6c-2.89.596-3.1-.383-3.1-.383 3.053-4.53 4.33-10.28 3.228-11.687-3.004-3.84-8.205-2.023-8.292-1.976l-.028.005a10.31 10.31 0 0 0-1.929-.201c-1.308-.02-2.3.343-3.054.914 0 0-9.278-3.822-8.846 4.807.092 1.836 2.63 13.9 5.66 10.25C8.29 15.987 9.36 14.86 9.36 14.86c.53.353 1.167.533 1.834.468l.052-.044a2.02 2.02 0 0 0 .021.518c-.78.872-.55 1.025-2.11 1.346-1.578.325-.65.904-.046 1.056.734.184 2.432.444 3.58-1.162l-.046.183c.306.245.52 1.593.484 2.815s-.06 2.06.18 2.716.48 2.13 2.53 1.7c1.713-.367 2.6-1.32 2.725-2.906.088-1.128.286-.962.3-1.97l.16-.478c.183-1.53.03-2.023 1.085-1.793l.257.023c.777.035 1.794-.125 2.39-.402 1.285-.596 2.047-1.592.78-1.33z" fill="#336791" stroke="none"/><g class="E"><g class="B"><path d="M12.814 16.467c-.08 2.846.02 5.712.298 6.4s.875 2.05 2.926 1.612c1.713-.367 2.337-1.078 2.607-2.647l.633-5.017M10.356 2.2S1.072-1.596 1.504 7.033c.092 1.836 2.63 13.9 5.66 10.25C8.27 15.95 9.27 14.907 9.27 14.907m6.1-13.4c-.32.1 5.164-2.005 8.282 1.978 1.1 1.407-.175 7.157-3.228 11.687" class="C"/><path d="M20.425 15.17s.2.98 3.1.382c1.267-.262.504.734-.78 1.33-1.054.49-3.418.615-3.457-.06-.1-1.745 1.244-1.215 1.147-1.652-.088-.394-.69-.78-1.086-1.744-.347-.84-4.76-7.29 1.224-6.333.22-.045-1.56-5.7-7.16-5.782S7.99 8.196 7.99 8.196" stroke-linejoin="bevel"/></g><g class="C"><path d="M11.247 15.768c-.78.872-.55 1.025-2.11 1.346-1.578.325-.65.904-.046 1.056.734.184 2.432.444 3.58-1.163.35-.49-.002-1.27-.482-1.468-.232-.096-.542-.216-.94.23z"/><path d="M11.196 15.753c-.08-.513.168-1.122.433-1.836.398-1.07 1.316-2.14.582-5.537-.547-2.53-4.22-.527-4.22-.184s.166 1.74-.06 3.365c-.297 2.122 1.35 3.916 3.246 3.733" class="B"/></g></g><g fill="#fff" class="D"><path d="M10.322 8.145c-.017.117.215.43.516.472s.558-.202.575-.32-.215-.246-.516-.288-.56.02-.575.136z" stroke-width=".239"/><path d="M19.486 7.906c.016.117-.215.43-.516.472s-.56-.202-.575-.32.215-.246.516-.288.56.02.575.136z" stroke-width=".119"/></g><path d="M20.562 7.095c.05.92-.198 1.545-.23 2.524-.046 1.422.678 3.05-.413 4.68" class="B C E"/></g></svg>
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
