<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$publicFile = __DIR__ . '/public' . $uri;

if ($uri !== '/' && is_file($publicFile)) {
    return false;
}

require __DIR__ . '/api/index.php';