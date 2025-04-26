@include('globals.doctype.admin')

<body data-section="super" 
class="linkcheck relative bg-white min-h-screen font-sans text-gray-800 postgres" x-data="{
collapsed: false,
dropdownOpen: false,
activeDropdown: null,
closing: false,
isOpen(route) { return this.activeDropdown === route; }}">

  @include('globals.sidebar.admin')

  @include('globals.nav.admin-header')

  <main class="transition-all duration-300 min-h-screen pt-24 relative"
  :class="collapsed ? 'ml-20' : 'ml-64'">
    <div class="ml-8 mr-8 lg:ml-10 lg:mr-10">
<div class="flex items-center justify-between mb-8">
    <h1 class="text-3xl font-bold text-white tracking-wide">SAFEKEYS</h1>

    <a href="#"
        class="inline-flex items-center bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-md shadow hover:shadow-lg transition-transform transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 2l8 4v6c0 5-3.8 9.4-8 10-4.2-.6-8-5-8-10V6l8-4z" />
        </svg>
        Add SafeKey
    </a>
</div>


      <div class="pageswap p-6 w-full">
        @include('admin.secure.safekeys.output')
      </div>
    </div>
  </main>
  @include('globals.footer.admin')
</body>
