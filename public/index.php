<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();

echo $request->getPathInfo();