<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Middleware\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    protected $proxies = '*'; // You can also use ['127.0.0.1'] if you want to be strict

    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
