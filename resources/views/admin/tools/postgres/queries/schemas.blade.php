<div>
  <h2 class="text-2xl font-bold">
    SCHEMAS
  </h1>
</div>
<div>
  @foreach($schemas as $schema)
    <a href="#"
    data-action="handle"
    data-task="tables.show"
    data-value="schema:{{ $schema->schema_name }}"
    data-renderfrom="admin.tools.postgres"
    data-renderas="html"
    data-renderto="pageswap"
    class="block px-3 py-2 rounded hover:bg-black/10 transition">
      {{ $schema->schema_name }}
    </a>
  @endforeach
</div>