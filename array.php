<?php
/*
$user = ['bobo', "bobo@gmail.com", 20, 'male', 'ygn'];//numeric array
$user[0] = "rose";
$user[50] = "50";
$user[] = "09345678";
echo $user[0];
echo count($user);
echo "<pre>";
print_r($user);
echo "</pre>";
// associated array
$user = [
    "name" => "bobo",
    "age" => 20,
    "gender" => "male",
];
echo $user['name'];
// multi-dimensional array
$myArr = [
    [
        ["name" => "bobo", "age" => 20, "gender" => "male"],
        ["name" => "james", "age" => 25, "gender" => "male"],
        ["name" => "rose", "age" => 23, "gender" => "female"],
    ],
    [
        ["name" => "koko", "age" => 20, "gender" => "male"],
        ["name" => "smith", "age" => 25, "gender" => "male"],
        ["name" => "lana", "age" => 23, "gender" => "female"],
        ]
    ];
    echo "<pre>";
    print_r($myArr);
    echo "</pre>";
    
    // destructure
    $user = ["james", 20];
[$name, $age] = $user;
echo "name is $name age is $age <br>";

//old version destructure(list())
$fruit = ["orange", "200ks"];
list($name, $price) = $fruit;
echo $name . " price is " . $price;

//associated array destructure
$users = ["name" => "rose", "age" => 20, "grade" => 10];
["name" => $name, "age" => $age, "grade" => $grade] = $users;
echo "name is $name age is $age grade is $grade";
echo "<br>";

$num = [1, 2, 3, 4, 5, 55];
echo count($num) . "<br>"; //အရေအတွက်
echo is_array($num) . "<br>"; //check array
echo in_array(11, $num) . "<br>"; //find value in array
echo array_search(55, $num) . "<br>"; //find value in array return index value
print_r(array_push($num, 100));
print_r(array_pop($num));
print_r(array_unshift($num, 200));
print_r(array_shift($num));
print_r($num);
$res = array_splice($num, 0, 2);
print_r($res);
echo "<br>";

// $user = ["id" => 1, "name" => "phone", "model" => 2020];
// foreach ($user as $key => $val) {
//     echo $key, "<br>";
//     echo $val, "<br>";
// }
// echo "<br>";
// $keys = array_keys($user);
// $val = array_values($user);
// print_r($keys);
// echo "<br>";
// print_r($val);
// echo "<br>";

echo file_exists('test.php'), "<br>";
$str = file_get_contents("test.php");
echo $str, "<br>";
$arr = file("text.php");
print_r($arr);
// echo "<br>";
file_put_contents('test.php', "hello php is easy to understand");


$person = [
    "name" => "bobo",
    "age" => 20,
    "gender" => "male",
    "address" => "ygn"
];
echo $person['name'];
echo $person['age'];
$p = (object) $person; //array to object
echo $p->name . "<br>";
echo $p->age . "<br>";
echo $p->address . "<br>";

$a = [2, 3, 4, 56, 7, 8, 89, 9];
sort($a);
print_r($a);
rsort($a);
print_r($a);
echo "<br>";

// numeric array => sort() 
// associated array => asort() 
// associated array key => ksort() 
// need calculation() use u (usort(),uksort(),uasort())
// sleep(3);
echo "hi";
// die('die');
// exit('exit');
echo "hey";


$num = [12, 2, 3, 4, 4, 5, 5, 56, 345];
echo array_sum($num);
// $result = 0;
// foreach ($num as $value) {
//     $result += $value;
// }
// echo $result;
// echo "<br>";
// echo "<br>";

$array = ["B", "Cat", "Dog", "B", "Dog", "Dog", "Cat"];
print_r(array_count_values($array));


$item = ["name" => "umesh", "class" => "mca"];
if (array_key_exists("email", $item)) {
    echo "Key is exists";
} else {
    echo "Key does not exist!";
}

//  How do you remove duplicates from an array?
$array = ["a" => "answer", "b" => "interviewquestion", "c" => "answer"];
// print_r(array_unique($array));

//  How to change array index in PHP?
// Answer
$array = ['name' => 'bobo', 'age' => '20', 'gender' => 'male'];
$array['username'] = $array['name'];
unset($array['name']);
print_r($array);


//  How to get common values from two array in php?
$a1 = ["a" => "red", "b" => "black", "c" => "blue", "d" => "yellow"];
$a2 = ["e" => "red", "f" => "black", "g" => "purple"];
$result1 = array_intersect($a1, $a2);
$result2 = array_intersect($a2, $a1);
print_r($result1);
echo "<br>";
print_r($result2);


$before = [
    'PHP' => 2,
    'JavaScript' => 4,
    'HTML' => 4,
    'CSS' => 3
];
$after = [
    'PHP' => 5,
    'JavaScript' => 5,
    'MySQL' => 4,
];
$skills1 = array_merge($before, $after);
$skills2 = array_merge($after, $before);

print_r($skills1);
echo "<br>";
print_r($skills2);

*/
$web = [
    'PHP' => 2,
    'JavaScript' => 4,
    'HTML' => 4,
    'CSS' => 3
];
$res = 0;
foreach ($web as $v) {
    $res *= $v;
}
echo $res;
