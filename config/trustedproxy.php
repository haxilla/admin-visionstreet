<?php

use Symfony\Component\HttpFoundation\Request;

return [
    'proxies' => '*',
    'headers' => Request::HEADER_X_FORWARDED_ALL,
];