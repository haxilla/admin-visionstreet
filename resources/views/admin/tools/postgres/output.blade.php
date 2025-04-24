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
    <h2 class="text-xl font-semibold mb-4">Tables in schema: {{strtoupper($data['schema'])}} </h2>

    <ul class="list-disc pl-6">
      @forelse ($data['tables'] as $table)
        <li class="text-gray-800 font-mono text-sm">
            <a data-isapp=1
            data-action="handle"
            data-value="schema:{{$data['schema'}};table:{{$table}}"
            data-task="table.show"
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
  COLUMN HERE
@else
  PAGE ERROR
@endif