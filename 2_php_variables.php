<?php
/*
 Data Types in PHP

 1. String
 2. Integer
 3. Float
 4. Char
 5. Null
 6. Object
 7. Array
*/

$name = "Robiullah";
$age = 23;
$gps_location = 23.01564;

$name = "Sakib";

$name = "Masrafi";
// print($name);
// print($age);

// echo $name, $age,$gps_location;

// Indexed Array -- index number
$countries = ["Agentina","France","Brazil","Germany","Spain"];

// print($countries[0]);
// print_r($countries);

// Associative Array -- Key value Pair
$cars = [
    "Japan" => 
        [
            "total" => "4.2B", 
            "profit" => "5.6B", 
            "info" => "asdmabsdvamsnbdj"
        ],
    "India" => "0.5B",
    "France" => "1.2B",
    "Germany" => "2.5B",
];

// print_r(json_encode($cars));

// print_r($cars['Japan']['info']);



$myarray = [
    "name" => "Mahmud Ibrahim",
    "age" => 36,
    "hobby" => ['Bike', 'Code', 'Book Reading', 'Biya Korta'],
    "education" => [
        [
            "Degree Name" => "SSC",
            "Degree Year" => 2005,
            "Degree Institute" => "MGBS",
            "Degree CGPA" => 5.0
        ],
        [
            "Degree Name" => "HSC",
            "Degree Year" => 2007,
            "Degree Institute" => "DCC",
            "Degree CGPA" => 5.0
        ],
        [
            "Degree Name" => "BSC",
            "Degree Year" => 2012,
            "Degree Institute" => "UIU",
            "Degree CGPA" => 4.0
        ],
        [
            "Degree Name" => "MSC",
            "Degree Year" => 2017,
            "Degree Institute" => "UIU",
            "Degree CGPA" => 4.0
        ],
    ]
    
    ];

print_r(json_encode($myarray))
?>