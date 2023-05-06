<?php

$first = 0;
$second = '0';
$third = 0;

if ($first == $second)
    echo 'first == second';

if ($first === $second)
    echo 'first === second';

echo '<br>';

if ($first === $third)
    echo 'first === third';

echo '<br>';
$second .= "1";
echo $second;
echo '<br>';


/*При конкатенації рядків PHP автоматично
  приводить числа до рядків.*/
$first .= "2";
echo $first;
echo '<br>';
echo gettype($first);
echo '<br>';

$first += 3;
echo $first;

echo '<br>';

$num = "3.14";
$int_n = (int)$num;
$float_n = (float)$num;
echo $int_n.' '.gettype($int_n);
echo '<br>'.$float_n.' '.gettype($float_n);

echo '<br>';

$arr = [1, 2, 3]; // $arr = array(1, 2, 3);
foreach ($arr as $value) {
    echo $value . ' ';
}
echo '<br>';
var_dump($arr);


echo '<br><br>';
$arr2 = [];
for ($i = 0; $i <= 5; $i++) {
    $arr2[] = $i;
}
var_dump($arr2);


echo '<br>';
echo '<br>';
$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$countries[1] = 10;
var_dump($countries);


echo '<br><br><br>';


class Person {
    public string $name;
    function __construct($name) {
        $this->name = $name;
    }
    function __toString() {
        return "Name: $this->name";
    }
}

class Student extends Person {
    public string $university;
    function __construct($name, $university) {
        parent::__construct($name);
        $this->university = $university;
    }
    function __toString() {
        return parent::__toString()."<br>Study at $this->university";
    }
}

$student = new Student("Yurii", "KPI");
echo $student;


echo '<br><br><br>';



class Singleton {
    private static $instance = null;
    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {
        throw new Exception("Cannot unserialize a singleton");
    }
    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}


$ob1 = Singleton::getInstance();
$ob2 = Singleton::getInstance();
if ($ob1 === $ob2) {
    echo "Both variables contain the same instance";
}
else {
    echo "Variables contain different instances.";
}


