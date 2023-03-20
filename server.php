<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

if (file_exists(__DIR__ . '/public/index.php')) {
    require_once __DIR__ . '/public/index.php';
} else {
    $url = Request::fullUrl();
    $url = str_replace('/server.php', '', $url);
    header('Location: ' . URL::to($url));
}
