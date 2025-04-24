@include('globals.doctype.admin')

<body data-section="postgres" 
class="linkcheck relative bg-white min-h-screen font-sans text-gray-800 postgres" x-data="{
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
        @if($data['sqltype']=='schema')
          <div class="schemas">
            <h2 class="text-xl font-semibold mb-4">Available Schemas</h2>

            <ul class="space-y-2 pl-4 list-disc">
              @forelse ($data['schemas'] as $schema)
                <li class="text-gray-800">
                  <a href="#"
                  data-isapp=1
                  data-action="handle"
                  data-value="schema:{{$schema->schema_name}}"
                  data-task="schema.describe"
                  data-renderfrom="admin.tools.postgres"
                  data-renderto="pageswap"
                  data-renderas="html">
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
        @elseif($data['sqltype']=='table')
          <div class="tables">
            <h2 class="text-xl font-semibold mb-4">Tables in {{$schema}}</h2>

            <ul class="list-disc pl-6">
              @forelse ($tables as $table)
                <li class="text-gray-800 font-mono text-sm">{{ $table->table_name }}</li>
              @empty
                <li class="text-red-500">No tables found in this schema.</li>
              @endforelse
            </ul>
          </div>
        @elseif($data['sqltype']=='column')
          COLUMN HERE
        @else
          PAGE ERROR
        @endif
      </div>
    </div>
  </main>
  @include('globals.footer.admin')
</body>
