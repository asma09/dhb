<?php
class Car {
   // Defining default class properties
   public $wheels = 4;
   public $color = 'red';
   public $model = 'Toyota';
   public function setColor($color){
     $this->color = $color;
   }
   public function setWheels($wheels){
     $this->wheels = $wheels;
   }
   public function setModel($model){
     $this->model = $model;
   }
    
   public function getColor($color){
     return $this->color;
   }
   public function getWheels($wheels){
     return $this->wheels;
   }
   public function getModel($model){
     return $this->model;
   }
}
// We can now create our new objects
$default = new Car();

// We view our properties
echo $default->wheels; // 4
echo $default->color; // red
echo $default->model; // Toyota

$newCar = new Car();
$newCar->setColor('Blue');
$newCar->setWheels('6');
$newCar->setModel('Benz');

echo $newCar->wheels; // 4
echo $newCar->color; // red
echo $newCar->model; // Toyota

?>