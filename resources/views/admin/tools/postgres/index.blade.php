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

  <<main class="transition-all duration-300 min-h-screen pt-24 relative"
  :class="collapsed ? 'ml-20' : 'ml-64'">
    <div class="ml-8 mr-8 lg:ml-10 lg:mr-10">
      <div>
        <h1 class="text-2xl font-bold">
          POSTGRES
        </h1>
      </div>
      <div class="pageswap p-6 w-full">
        dd($data);
      </div>
    </div>
  </main>
  @include('globals.footer.admin')
</body>
