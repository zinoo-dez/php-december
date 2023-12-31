<?php
// $name = " james adam ";
// echo strlen($name);
// echo "<br>";
// $str = "    james camerron    ";
// echo strlen($str), "<br>";
// $trimed =  trim($str);
// echo strlen($trimed), "<br>";

// $p1 = '12345678';
// $p2 = '12345678';
// if (strcmp($p1, $p2) != 0) {
//     echo "password don't match";
// } else {
//     echo "password match";
// }
// echo "<br>";
// $web = 'Dfas@sd.coM';
// echo strtolower($web);
// echo "<br>";
// echo strtoupper($web);
// echo "<br>";
$mystr = "welcome to new york";
echo substr($mystr, 0, 7);
echo "<br>";
// string to Array
$email = "james@bb.com.mm.ygn";
$arr = explode('.', $email);
print_r($arr);
echo "<br>";
$str = "ds dsif ifds fdsf dsf sdf ds";
$ac = explode(' ', $str);
print_r($ac);
echo "<br>";
$url = "https://mdbootstrap.com/docs/standard/forms/input-fields/";
$url_res = explode('/', $url);
print_r($url_res);
echo "<br>";
// array to String
$arr = ['a1', 'b1', 'c1', 'd1'];
$my_arr = implode(',', $arr);
echo $my_arr;
echo "<br>";

$str = "hello mm";
$str2 = "World hello mm";
echo ucfirst($str) . "<br>";
echo lcfirst($str2) . "<br>";
echo "<br>";
$mail = "bobo@ggmail.commm";
echo str_replace("ggmail", "gmail", $mail) . "<br>";
echo str_replace("commm", "com", $mail) . "<br>";
