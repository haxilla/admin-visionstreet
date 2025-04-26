<?php

// 1. Keys you allow
$allowedKeys = ['renderFrom', 'renderTo', 'renderAs', 
'table_name', 'primary_key', 'dataTask'];

// 2. (Optional) Values you validate for specific keys
$allowedValues = [
    'renderFrom' => ['admin.tools.postgres', 'admin.tools.users'],
    'renderTo' => ['pageswap'],
    'renderAs' => ['html', 'json'],
    'dataTask' => ['table.create', 'table.update']
];

// 3. Call it
$safeData = safeExtract($data, $allowedKeys, $allowedValues);