@include('globals.doctype.admin')

<body data-section="postgres" 
class="linkcheck relative bg-white min-h-screen font-sans text-gray-800" x-data="{
collapsed: false,
dropdownOpen: false,
activeDropdown: null,
closing: false,
isOpen(route) { return this.activeDropdown === route; }}">

  @include('globals.sidebar.admin')

  @include('globals.nav.admin-header')

  <main class="transition-all duration-300 min-h-screen pt-16"
  :class="collapsed ? 'left-20' : 'left-64'">
    <div class="pageswap p-6 w-full max-w-xl mx-auto">
        @include('admin.tools.postgres.queries.schemas')
    </div>
  </main>
  @include('globals.footer.admin')
</body>
