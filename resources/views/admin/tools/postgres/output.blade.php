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

  <div class="mb-4">
      <nav class="text-sm text-gray-600">
          <a href="#" class="text-blue-600 hover:underline">{{ $data['schema'] }}</a>
          <span class="mx-2">&raquo;</span>
          <a href="#" class="text-blue-600 hover:underline">{{ $data['table'] }}</a>
      </nav>
  </div>

  <h4 class="text-lg"><b>Schema:</b> {{$data['schema']}} | <b>Table:</b> {{$data['table']}}</h4>

  <table class="w-full border border-collapse text-sm">
      <thead class="bg-gray-100">
          <tr>
              <th class="border px-3 py-2 text-left">Column Name</th>
              <th class="border px-3 py-2 text-left">Data Type</th>
          </tr>
      </thead>
      <tbody>
          @forelse ($data['columns'] as $col)
              <tr>
                  <td class="border px-3 py-2">{{ $col->column_name }}</td>
                  <td class="border px-3 py-2">{{ $col->data_type }}</td>
              </tr>
          @empty
              <tr>
                  <td colspan="2" class="border px-3 py-2 text-center text-gray-500">
                      No columns found.
                  </td>
              </tr>
          @endforelse
      </tbody>
  </table>

@else
  PAGE ERROR
@endif