<?php

require_once __DIR__ . '/../vendor/autoload.php';

$hello = new App\Hello();

echo $hello->talk();
