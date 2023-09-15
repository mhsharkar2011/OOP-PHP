<?php 

class Person{
    public  $name    = "Monir Hossain";
    public  $age     = 33;
    public  $contact = 01733172007;

    public static $sex = "Male";
    public static $color = "Blue";

    // public static function personDetails(){
    //     echo "My Name is " . self::$name ."<br>";      
    //     echo "My age is " . self::$age . " <br>";      
    //     echo "My Contact Number " . self::$contact;      
    // }

    // public function __construct()
    // {   
    //     $this->name;
    //     $this->age;
    //     $this->contact;
    // }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setSex1($sex)
    {
        return self::$sex = $sex;
    }
    public function getSex()
    {
         self::$sex;
         self::$color;
    }

    public static function setSex($gender, $color){
        echo self::$sex = $gender;
        echo self::$color = $color;
    }

    public function __destruct()
    {
      echo "Method destructed";
    }
    
}