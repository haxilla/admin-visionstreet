<?php

$schemas = \DB::select("
    SELECT schema_name
    FROM information_schema.schemata
    WHERE schema_name NOT IN ('pg_catalog', 'information_schema')
    ORDER BY schema_name");

if(empty($schemas)){
    dd("error-line10-postgres/schemas/show");}

echo view($renderfrom.'.index', 
  compact('schemas'))->render();