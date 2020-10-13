<?php

class Bird {
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public static $flying = "yes";

    public static $instance_count = 0;
    public static $egg_num = 0;

    public static function create() {
        $class_name = get_called_class();
        $object = new $class_name;
        // $object = new static; 
        self::$instance_count++;
        return $object;
    }
 
    // public static function can_fly() {
    //  Null Coalescing Operator
    //      $flying_string = static::$flying == "Can fly" ?? "Is struck on the ground";
    //  Ternary Operator 
    //      $flying_string = static::$flying == "yes" ? "can fly" : "is stuck on the ground";
    // }

    function can_fly() {
        if(static::$flying == "yes" ) {
            $flying_string = "can fly";
        } else {
            $flying_string = "is stuck on the ground";
        }
        return  $flying_string ;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";
    public static $egg_num = "3-4, sometimes 5";
}

class Kiwi extends Bird {
    public $name = "kiwi";
    public $diet = "omnivorous";
    public static $flying = "no";
}
?>