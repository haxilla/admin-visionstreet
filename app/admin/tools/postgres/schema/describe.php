<?php

if(empty($schema)){
	dd("error-line4-postgres/tables/show");}

$tables = \DB::select("
  SELECT
    relname AS table_name,
    relnatts AS column_count
  FROM pg_class
  WHERE relkind = 'r'
    AND relnamespace = (
      SELECT oid FROM pg_namespace WHERE nspname = ?
    )
", [$schema]);

$data=[
    'sqltype'   => 'table',
    'schema'    => $schema,
    'tables'    => $tables, 
];

$renderFrom='admin.tools.postgres.output';