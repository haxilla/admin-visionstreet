<?php

$schemas = \DB::select("
    SELECT schema_name
    FROM information_schema.schemata
    WHERE schema_name NOT IN ('pg_catalog', 'information_schema')
    ORDER BY schema_name");

if(empty($schemas)){
    dd("error-line10-postgres/schemas/show");}

$data=[
    'sqltype'   =>'schema',
    'schemas'   => $schemas,
];

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