<?php

if(empty($schema)){
	dd("error-line4-postgres/tables/show");}

$tables = \DB::select("
    SELECT table_name
    FROM information_schema.tables
    WHERE table_schema = ?
      AND table_type = 'BASE TABLE'
", [$schema]);

$data=[
    'sqltype'   => 'schema',
    'schema'    => $schema,
    'tables'    => $tables, 
];

$renderFrom='admin.tools.postgres.index';

dd($tables);