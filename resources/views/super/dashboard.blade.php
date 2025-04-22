@include('super.header.doctype')
<body data-section="super"
class="linkcheck relative bg-white min-h-screen font-sans text-gray-800" x-data="{
collapsed: false,
dropdownOpen: false,
activeDropdown: null,
closing: false,
isOpen(route) { return this.activeDropdown === route; }}">

  @include('globals.sidebar.admin')

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
