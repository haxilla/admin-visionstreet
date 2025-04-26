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
			<div class="flex items-center justify-between mb-6">
			    <h1 class="text-3xl font-bold text-white tracking-wide">SAFEKEYS</h1>

			    <a href="{{ route('safekeys.create') }}"
			        class="inline-flex items-center bg-gradient-to-r from-blue-600 to-cyan-400 hover:from-cyan-400 hover:to-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md transition transform hover:scale-105">
			        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
			                d="M15 7a2 2 0 11-4 0 2 2 0 014 0zM17 9l4 4m0 0l-4 4m4-4H7" />
			        </svg>
			        New Key
			    </a>
			</div>
      <div class="pageswap p-6 w-full">
        @include('admin.secure.safekeys.output')
      </div>
    </div>
  </main>
  @include('globals.footer.admin')
</body>
