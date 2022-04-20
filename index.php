<?php
class Worker
{
   public $name;
   public $age;
   public $salary;
}
$obj=new Worker();
$obj->name="Иван";
$obj->age=25;
$obj->salary=1000;

$obj2=new Worker();
$obj->name="Вася";
$obj->age=26;
$obj->salary=2000;
echo "Сумма возврастов".($obj->age+$obj2->age);
echo "<br>";
echo "Сумма зарплат".($obj->salary+$obj2->salary);
