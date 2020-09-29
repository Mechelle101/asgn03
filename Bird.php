<?php

class Bird {
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public $flying = "yes";

    public static $instance_count;
    public static $egg_num = 0;

    // public static function can_fly() {
    //  Null Coalescing Operator
    //      $flying_string = static::$flying == "Can fly" ?? "Is struck on the ground";
    //  Ternary Operator 
    //      $flying_string = static::$flying == "yes" ? "can fly" : "is stuck on the ground";
    // }

    // this is how you had it in the initial file but the instructions where different
    // so I just left it but either way wouldnt work 
    function can_fly() {
        if($this->flying == "yes" ) {
            $flying_string = "can fly";
        } else {
            $flying_string = "is stuck on the ground";
        }
        return  $flying_string ;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
    static public $egg_num = "3-4, sometimes 5";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
}
?>