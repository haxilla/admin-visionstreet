<?php

$schemas = DB::select("
  SELECT 
    n.nspname AS schema_name,
    pg_get_userbyid(n.nspowner) AS owner
  FROM 
    pg_namespace n
  WHERE 
    n.nspname NOT IN ('information_schema', 'pg_catalog', 'pg_toast', 'pg_temp_1', 'pg_toast_temp_1')
    AND n.nspname NOT LIKE 'pg_%temp%'
  ORDER BY 
    n.nspname
");

if(empty($schemas)){
    dd("error-line17-postgres/schemas/show");}

$data=[
    'sqltype'   =>'schema',
    'schemas'   => $schemas,
];

$renderFrom="admin.tools.postgres.index";

/*
$data=array([
    'schemas'=>$schemas,
]);

$result=view('admin.tools.postgres.index', 
  compact('schemas','renderfrom','task'))->render();

$html = view('admin.tools.postgres.index', [
    'schemas'       => $schemas,
    'renderfrom'    => $renderfrom,
    'result'        => $result,
])->render();
*/