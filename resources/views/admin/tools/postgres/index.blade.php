@include('globals.doctype.admin')
@include('globals.nav.admin')
<!-- sidebar -->
@include('globals.sidebar.admin')

<body class="linkcheck relative bg-white min-h-screen font-sans text-gray-800">
  
  <!-- Header / Topnav-->
  @include('globals.nav.admin')

  <div class="space-y-1 text-sm">
    @foreach($schemas as $schema)
      <a href="#"
         data-action="handle"
         data-task="tables.list"
         data-value="schema:{{ $schema->schema_name }}"
         data-renderfrom="admin.postgres.tables"
         data-renderas="html"
         data-renderto="pageswap"
         class="block px-3 py-2 rounded hover:bg-black/10 transition">
         {{ $schema->schema_name }}
      </a>
    @endforeach
  </div>

  @include('globals.footer.admin')
</body>
</html>
