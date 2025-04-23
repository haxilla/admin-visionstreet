<?php

$schemas = \DB::select("
    SELECT schema_name
    FROM information_schema.schemata
    WHERE schema_name NOT IN ('pg_catalog', 'information_schema')
    ORDER BY schema_name");

if(empty($schemas)){
    dd("error-line10-postgres/schemas/show");}

$renderfrom="admin.tools.postgres";
$task="schemas.show";

$result=view('admin.tools.postgres.index', 
  compact('schemas','renderfrom','task'))->render();

// Step 3: Render the layout and inject $result
$html = view('admin.tools.postgres.index', [
    'schemas'       => $schemas,
    'renderfrom'    => $renderfrom,
    'result'        => $result,
])->render();

echo $html;