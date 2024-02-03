<?php

class MyClass
{
    use SomeTrait;
    use AnotherTrair;

    /**
     * @var array
     */
    public array $myArray = [];


    public function __construct()
    {
        $this->myArray = [];
    }

    /**
     * @param int|float $a
     * @return int|float
     */
    public function someMethod(int|float $a): int|float
    {
        $result = 0;
        $result = $result + $a * $result - $a;
        return $result;
    }

    /**
     * @param int|float $b
     * @return int|float
     */
    public function anotherMethod(int|float $b): int|float
    {
        $result = 0;
        $result = $result + $b * $result - $b;
        return $result;
    }
}
