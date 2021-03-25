<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();

// Je rajoute un commentaire de test
echo $request->getPathInfo();