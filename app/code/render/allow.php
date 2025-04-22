<?php

if(!isset($renderFrom)){
	dd("error-line4-code/render/allow.php");}

$renderAllow=[''];

if(!in_array($renderFrom,$renderAllow)){
	\Log::warning('Unauthorized include attempt', [
        'renderFrom' => $renderFrom,
        'ip' => request()->ip(),
        'user_agent' => request()->header('User-Agent'),
        'url' => request()->fullUrl(),
    ]);
	abort(403, 'Unauthorized Include');}