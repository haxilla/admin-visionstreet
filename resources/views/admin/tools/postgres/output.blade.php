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
    <h2 class="text-xl font-semibold mb-4">
        Tables in schema: {{$data['schema']}} 
    </h2>

    <ul class="list-disc pl-6">
      @forelse ($data['tables'] as $table)
        <li class="text-gray-800 font-mono text-sm">
            <a href="#"
            data-isapp=1
            data-action="handle"
            data-value="schema:{{$data['schema']}};table:{{$table->table_name}}"
            data-task="column.show"
            data-renderfrom="admin.tools.postgres"
            data-renderto="pageswap"
            data-renderas="html">
              {{ $table->table_name }}
            </a>
        </li>
      @empty
        <li class="text-red-500">No tables found in this schema.</li>
      @endforelse
    </ul>
  </div>

@elseif($data['sqltype']=='column')

  <div class="flex items-center justify-between mb-2">
    <nav class="text-sm text-gray-600">
      <a href="#" class="text-blue-600 hover:underline">{{ $data['schema'] }}</a>
      <span class="mx-1">&raquo;</span>
      <a href="#" class="text-blue-600 hover:underline">{{ $data['table'] }}</a>
    </nav>

    <a href="#"
    class="inline-flex items-center px-2.5 py-1.5 text-xs 
    text-gray-500 hover:text-red-600 border border-transparent 
    hover:border-red-300 rounded transition"
    data-action="handle"
    data-renderfrom="admin.tools.postgres.tables.deletetable"
    data-renderas="html"
    data-renderto="pageswap"
    data-schema="{{ $data['schema'] }}"
    data-table="{{ $data['table'] }}">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" 
      fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" 
        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
      Delete Table
    </a>
  </div>

  <h4 class="text-lg font-semibold mb-2">
    Columns in <code>{{ $data['table'] }}</code>
  </h4>

  <table class="w-full border-collapse text-sm">
    <thead class="bg-gray-100">
      <tr>
        <th class="border px-3 py-2 text-left">Column Name</th>
        <th class="border px-3 py-2 text-left">Data Type</th>
      </tr>
    </thead>
    <tbody id="column-sortable"
    x-data
    x-init="initSortableColumns($el)">
      @forelse ($data['columns'] as $col)
        <tr data-column="{{ $col->column_name }}">
          <td class="border border-gray-300 px-3 py-2">
            <div class="flex items-center gap-2">
              <a href="#"
                 title="Rename"
                 class="text-gray-500 hover:text-blue-600"
                 data-action="handle"
                 data-renderfrom="admin.tools.postgres.columns.rename"
                 data-renderas="html"
                 data-renderto="pageswap"
                 data-schema="{{ $data['schema'] }}"
                 data-table="{{ $data['table'] }}"
                 data-column="{{ $col->column_name }}">
                ✏️
              </a>
              <span class="truncate">{{ $col->column_name }}</span>
            </div>
          </td>
          <td class="border border-gray-300 px-3 py-2">
            <div class="flex items-center justify-between">
              <span>{{ $col->data_type }}</span>
              <a href="#"
                 title="Delete"
                 class="text-xs text-gray-400 hover:text-red-500 ml-2"
                 data-action="handle"
                 data-renderfrom="admin.tools.postgres.columns.delete"
                 data-renderas="html"
                 data-renderto="pageswap"
                 data-schema="{{ $data['schema'] }}"
                 data-table="{{ $data['table'] }}"
                 data-column="{{ $col->column_name }}">
                &#x2715;
              </a>
            </div>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="2" class="border px-3 py-2 
          text-center text-gray-500">
            No columns found.
          </td>
        </tr>
      @endforelse

      <form method="POST"
      data-action="handle"
      data-renderfrom="admin.tools.postgres.tables.createcolumn"
      data-renderas="html"
      data-renderto="pageswap"
      data-schema="{{ $data['schema'] }}"
      data-table="{{ $data['table'] }}">
        @csrf
        <tr>
          <td class="border border-gray-300 px-2 py-1">
            <input type="text" name="column_name"
            placeholder="New column name"
            class="w-full text-sm px-2 py-1 border 
            border-gray-300 rounded focus:outline-none 
            focus:ring focus:ring-blue-200" />
          </td>
          <td class="border border-gray-300 px-2 py-1">
            <div class="flex items-center gap-2">
              <select name="data_type"
              class="text-sm px-2 py-1 w-40 border 
              border-gray-300 rounded focus:outline-none 
              focus:ring focus:ring-blue-200">
                <option value="">Type</option>
                <option value="text">text</option>
                <option value="varchar(255)">varchar(255)</option>
                <option value="integer">integer</option>
                <option value="bigint">bigint</option>
                <option value="boolean">boolean</option>
                <option value="timestamp">timestamp</option>
                <option value="timestamptz">timestamptz</option>
                <option value="date">date</option>
                <option value="time">time</option>
                <option value="numeric(10,2)">numeric(10,2)</option>
                <option value="uuid">uuid</option>
                <option value="json">json</option>
                <option value="jsonb">jsonb</option>
              </select>
              <button type="submit"
                      class="text-xs px-4 py-1.5 text-white cursor-pointer bg-gray-400 hover:bg-gray-500 rounded transition"
                      title="Add Column">
                Add Column
              </button>
            </div>
          </td>
        </tr>
      </form>
    </tbody>
  </table>

@else
  PAGE ERROR
@endif