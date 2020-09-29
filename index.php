<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asgn03 Static</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';
    
    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>"; 
    
    echo "Bird count: " . $Bird->instance_count; 
    echo "Flycatcher count: " . $YellowBelliedFlyCatcher->instance_count; 
    echo "Kiwi count: " . $Kiwi->instance_count; 

    public static function create(){
        $class_name = get_called_class();
        $object = new $class_name;
        //$object = new static; 
        self::$instance_count++;
        return $object;
    }

    echo "Bird count: " . $Bird->instance_count; 
    echo "Flycatcher count: " . $YellowBelliedFlyCatcher->instance_count; 
    echo "Kiwi count: " . $Kiwi->instance_count; 

?>
</body>
</html>

