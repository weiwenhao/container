<?php

namespace Container\Foo;

use Container\Bar\BarA;
use Container\Bar\BarB;
use Container\Bar\BarC;
use Container\Bar\BarD;

class Foo
{
    private $barA;
    private $barB;
    private $barC;
    private $barD;

    public function __construct(BarA $barA, BarB $barB, BarC $barC, BarD $barD)
    {

        $this->barA = $barA;
        $this->barB = $barB;
        $this->barC = $barC;
        $this->barD = $barD;
    }

    public function allBarName()
    {
        return $this->barA->name().'/'.$this->barB->name().'/'.$this->barC->name().'/'.$this->barD->name();
    }
}