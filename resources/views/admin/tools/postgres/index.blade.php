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
        @if($sqltype=='schema')
          <div class="schemas">
            <h2 class="text-xl font-semibold mb-4">Available Schemas</h2>

            <ul class="space-y-2 pl-4 list-disc">
              @forelse ($schemas as $schema)
                <li class="text-gray-800">
                  <a href="#"
                  data-action="handle"
                  data-value=""
                  data-renderfrom=""
                  data-renderto=""
                  data-renderas="">
                    <span class="font-mono text-sm">
                      {{ $schema->schema_name }}
                    </span>
                  </a>
                </li>
              @empty
                <li class="text-red-500">No schemas found.</li>
              @endforelse
            </ul>
          </div>
        @elseif($sqltype=='table')
          TABLE HERE
        @elseif($sqltype=='column')
          COLUMN HERE
        @else
          PAGE ERROR
        @endif
      </div>
    </div>
  </main>
  @include('globals.footer.admin')
</body>
