<?php

require 'vendor/autoload.php';

$foo = new \Container\Foo\Foo(
    new \Container\Bar\BarA(),
    new \Container\Bar\BarB(),
    new \Container\Bar\BarC(),
    new \Container\Bar\BarD()
);

echo $foo->allBarName();

echo "\n";


$foo = \Container\Container::make(\Container\Foo\Foo::class);
echo $foo->allBarName();