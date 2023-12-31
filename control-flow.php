<?php
/*
$name = "Mr";
$name .= " ";
$name .= "james";
echo $name;
echo "<br>";
// like js
$num = 2;
$num = $num + 1;
$num += 1;
$a = $num++;
$b = ++$num;
echo $num;
echo "<br>";
echo $a;
echo "<br>";
echo $b;

*/

// ternary operator
// echo 2 === 2 ? "right" : "No", "<br>";
// echo 1 === 2 ? "right" : "No", "<br>";
// ternary operator 
// ! =
// echo 2 != 2 ? "right" : "No", "<br>";
echo 1 != 2 ? "right" : "No", "<br>";

// $flower = "deisy";
// echo $flower ?: "rose", "<br>";
// $sun_flower = "";
// echo isset($sun_flower) ? $sun_flower : "rose", "<br>";


// null coalescing operator
// $hobby = "";
// echo $hobby ?? "soccer", "<br>";



echo date("y m d"), "<br>";
echo date("y m d H : i : s"), "<br>";
$d = date("D");
echo $d, "<br>";
if ($d === "Sat" || $d === "Sun") {
    echo "Weekend";
} else {
    echo "Weekday";
}
switch ($d) {
    case 'Sat':
    case 'Sun':
        echo "weekend ";
        break;
    default:
        echo "weekday ";
        break;
}
