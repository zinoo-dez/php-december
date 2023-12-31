<?php

// function sum($num)
// {
//     return array_sum($num);
// }
// echo sum([22, 33, 44, 5, 66, 30]), "<br>";
// echo sum([22, 333, 464, 58, 606, 30]), "<br>";
// echo sum([2266, 3333, 44, 555, 676, 30]), "<br>";


// function hello()
// {
//     echo "hello";
//     return "helo";
// }
// hello();

// function add($a, $b)
// {
//     return $a + $b;
// }
// try {
//     echo add(20);
// } catch (\Throwable $err) {
//     print_r($err);
// } finally {

//     echo "<br>";
//     echo add(20, 30);
//     echo "<br>";
//     echo add(20, 30, 100);
//     echo "<br>";
// }
// defult parameter
// function show($a = 0, $b = 20)
// {
//     return $a + $b;
// };
// echo show() . "<br>";
// echo show(100), "<br>";
// echo show(100, -300), "<br>";

function spread($a, ...$b)
{
    echo $a . "<br>";
    // print_r($b);
    foreach ($b as $key => $value) {
        echo "the value is =>", $value . "<br>";
    }
};
// echo spread(1000, 'qq', 'e', 'rrr', 't', 't', 22, 22, 55);

function arr()
{
    $res = func_get_args();
    foreach ($res as $key => $value) {
        echo "the name is =>", $value . "<br>";
    }
}
// echo arr("rose", "bobo", "mgmg");
echo "<br>";




// $age = 30;
// function getage($a)
// {
//     $a = 20;
//     echo "inside fun =>", $a, "<br>";
// }
// getage($age);
// echo "outside ", $age;

// // refrence operator(&)
// $age = 30;
// function age(&$a)
// {
//     $a = 45;
//     echo "inside fun =>", $a, "<br>";
// }
// age($age);
// echo "outside ", $age;


// $hobby1 = "football";
// $hobby2 = "swimming";
// define("hobby3", "reading"); //global variable
// function hobby()
// {
//     global $hobby1, $hobby2;
//     echo "my hobby1 is $hobby1 and $hobby2 &&" . hobby3;
// }
// hobby();

// function two($a)
// {
//     echo "similar js and $a";
// }
// $pp = "two";
// // echo $pp;
// $pp("php");

// $numbers = [1, 2, 3, 4, 5, 6];
// function multi($a)
// {
//     return $a * 3;
// }
// $res = array_map("multi", $numbers);
// print_r($res);

// function expression
// $add = function ($a, $b) {
//     echo $a +  $b;
// };
// $add(100, 200);


// $myname = "rose";
// $callme = function () use ($myname) {
//     echo "my name is $myname";
// };
// $callme();
// // arrow function (php >= 7.4 )
// $ar = fn ($aa) => $aa * 5;
// echo $ar(3);

// $one = 2;
// $call = fn ($two) => $one * $two; #no need global or use()
// $call(10);

function myProfile($name, $phone, $email)
{
    echo "my name is $name and phone $phone and email is $email <br>";
};
myProfile("james", "091234567",  "abcd@bb.com");
myProfile("091234567", "james", "abcd@bb.com");
myProfile(phone: "09345678", email: "fghjk@mm.com", name: "koko");
