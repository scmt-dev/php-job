<?php

class A
{
    public $a = 1;
    protected $b = 2;
    private $c = 3;
    
    public function getA()
    {
        return $this->a;
    }
}

class B extends A
{
    public static $d = 4;
    public function getB()
    {
        return $this->b;
    }

    public static function getD()
    {
        return self::$d;
    }
}

echo B::$d;
echo B::getD();

$a = new A();
echo $a->a;

