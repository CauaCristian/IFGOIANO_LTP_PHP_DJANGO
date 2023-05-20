
<?php

class Bhaskara {

    function calculate($a, $b, $c){

        $delta = pow($b, 2) - (4 * $a) * $c;

        if ($delta < 0) {
            die("Not a real number");
        }
        $plus = (-($b) + sqrt($delta)) / (2 * $a);
        $minus = (-($b) - sqrt($delta)) / (2 * $a);
        if ($minus == $plus) {
            $complete = "S = {" . $minus . "}";
        } 
        else {
            $complete = "S = {" . $plus . "; " . $minus ."}";
        }
        echo "Delta: " . $delta . "<br>";
        echo "x': " . $plus . "<br>";
        echo "x'': " . $minus . "<br>";
        echo "Complete: " . $complete . "<br>";

    }
}
$power = new Bhaskara();
$equiation->calculate(1, -6, 9);

?>