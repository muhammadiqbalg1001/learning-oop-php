<?php

class Student
{
    public static $instanceCount = 0;

    public $total;
    public $target;

    public function __construct($total, $target)
    {
        self::$instanceCount++;
        $this->total = $total;
        $this->target = $target;
    }

    public function __destruct()
    {
        // echo "Good bye";
        self::$instanceCount--;
    }
}

class Elementary extends Student
{
    public $total = 3;
    public $target = 1;
}

class Junior extends Student
{
    public $total = 2;
    public $target = 3;
}

class Senior extends Student
{
    public $total = 4;
    public $target = 4;
}

$elementary = new Elementary(3, 1);
echo "Elementary: {$elementary->total} <br/>";
echo "Target: {$elementary->target} <br/>";

$junior = new Junior(2, 3);
echo "Junior: {$junior->total} <br/>";
echo "Target: {$junior->target} <br/>";

unset($elementary);

$senior = new Senior(4, 4);
echo "Senior: {$senior->total} <br/>";
echo "Target: {$senior->target} <br/>";

echo "Instance Count : " . Student::$instanceCount;