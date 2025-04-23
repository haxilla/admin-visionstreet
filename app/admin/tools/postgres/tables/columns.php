<?php

$columns = \DB::select("
    SELECT column_name, data_type
    FROM information_schema.columns
    WHERE table_schema = ?
      AND table_name = ?
    ORDER BY ordinal_position
", [$schema, $table]);

echo view($renderFrom, [
    'columns' => $columns,
    'table'   => $table,
    'schema'  => $schema
])->render();