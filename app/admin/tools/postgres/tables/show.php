<?php

if(!isset($schema)){
	dd("error-line4-postgres/tables/show");}

$tables = DB::select("
    SELECT table_name
    FROM information_schema.tables
    WHERE table_schema = ?
      AND table_type = 'BASE TABLE'
", [$schema]);

dd($tables,$schema);