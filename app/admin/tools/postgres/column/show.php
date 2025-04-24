<?php

$columns = \DB::select("
    SELECT column_name, data_type
    FROM information_schema.columns
    WHERE table_schema = ?
      AND table_name = ?
    ORDER BY ordinal_position
", [$schema, $table]);

$data=[
    'sqltype'   =>'table',
    'schemas'   => $schemas,
];

$renderFrom="admin.tools.postgres.index";
