<?php
echo "<h1>Розбір синтаксису PHP</h1>";
echo "<h3>Змінні</h3>";
$name_value = 'Толя';
$NAME_VALUE = 'Катя';
echo "Чутливість регістру: $NAME_VALUE != $name_value<br>";
echo "Конкатинація рядків: $name_value.$NAME_VALUE<br>";//конкатинація
//echo $name_value+$NAME_VALUE;

$int = 20;
$str_int = "20";
if ($int == $str_int): // === => false
    echo "true<br>";
else:
    echo "false<br>";
endif;

if ($int === $str_int): // === => false
    echo "true<br>";
else:
    echo "false<br>";
endif;

$int_num = 24;
$str_number = '20';
$float_num = 24.5;
$sum = $int_num + $str_number;//превизначення типів
$sum_2 = $float_num + $str_number;
echo "Приклад перевзначення типів(додавання рядка і цілогочисла): $sum <br>";
echo "Приклад перевзначення типів(додавання рядка і дійсного числа): $sum_2 <br>";
echo "Конкатинація рядка і числа: $int_num.$str_number <br>";

/*приклад області видимості змінної
function getName(){
    // global $name_value;
     echo $name_value;
}
getName();*/

echo"Приклад розіменування змінної:<br>";
//змінна змінної
$num_value = 45;
$num = "num_value";
echo $$num;

echo  "<h3> Масиви</h3>";

$names = array("Толя", "Саша", "Катя");
echo "$names[1]<br>";

echo"<br>Приклад використання foreach:<br>";
foreach ($names as $name){
    echo $name.'<br>';
}

$array2[0] = "cереда";
$array2[1] = 7;
$array2[2] = "<strong>квітня</strong>";
echo "Сьогодні $array2[0] $array2[1] $array2[2]<br>";

echo"<br>Приклад асоціативного масиву:<br>";
$date = array("day"=>"7", "moth"=>"квітня", "year"=>2020);
echo $date['year'];
echo "<br>------Приклад використання implode<br>";
echo implode(" ", $date);

echo "<br>------Приклад використання explode<br>";
$str = "Hello world";
$words = explode(" ", $str);
echo $words[0]."<br>";
echo $words[1]."<br>";

$people = array(
    'online'=> array("Толя", "Катя"),
    'offline'=> array("Саша", "Петя")
);
echo $people['offline'][1];

echo "<h3>ООП</h3>";

interface animalInterface{
    public function sound();
}

class Animal {
    public $name;
    public $genus;

    public function __construct(){
        echo "<br> ---$this->name awake---<br>";
    }
    final function moniker($nickname){
        echo $nickname;
    }
    public function display(){
        echo "Animal: $this->name; genus: $this->genus <br>";
    }
    private function lifespan($years){
        echo "Lifespan: $years";
    }
    public function  __destruct(){
        echo "<br>----Sleep----<br>";
    }

}
class Dog extends Animal implements animalInterface {
    public $name = "Dog";
    public $genus = "Canis";

    public static $sound = "Bark!<br>";
    public function sound(){
        echo self::$sound;
    }
    /*function moniker($nickname){
        echo "Dog's name is $nickname";
    }*/
    public function __destruct()
    {
        echo "<br> ---Dog is sleeping---<br>";
    }

}

$doggy = new Dog();
$doggy->display();
$doggy->sound();
echo Dog::$sound;
unset($doggy);

echo "<br><strong>Singleton</strong> <br>";
class Singleton {
    private static $instance=145;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function  getInstance(){
        if(empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
}
$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();
if($obj1 === $obj2){
    echo "Той же об'єкт<br/>";
}else{
    echo "Інший об'єкт<br/>";
}