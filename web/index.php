<?php declare(strict_types=1);

use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

/**
 * @var \Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__ . '/../vendor/autoload.php';
$kernel = new Kernel('prod', false);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
