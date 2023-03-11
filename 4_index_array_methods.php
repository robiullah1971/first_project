<?php

/*
Array Methods

/// Insertion /Add
1. array_push (last)
2. array_unshift (first)


// RemoveS
3. array_pop (last)
.4 array_shift (first)

*/
// $cars1 = ['Toyota', 'BMW', 'Porche', 'Fiat', 'Ford'];
// $cars2 = ['Toyota', 'BMW', 'Porche', 'Fiat', 'Ford'];
// print_r($cars);

// array_push($cars, 'Lancer');
// array_unshift($cars, 'Mersadez');

// print_r($cars);

// array_pop($cars);
// array_shift($cars);
// print_r($cars);


// print(count($cars1));
// print(count($cars2));

// var_dump(json_encode($cars1));
// array_push($cars1, 'Lancer');
// array_push($cars2, ['Lancer','Mersadez']);
// var_dump(json_encode($cars2));

// print(count($cars1));
// print(count($cars2));
// var_dump($cars2);

// $result = array_diff($cars1, $cars2);

// print_r($result);


$cars1 = ['Toyota', 'BMW', 'Porche', 'Fiat', 'Ford'];

// function callBackFunction($item)
// {
//     print($item.'- Mithun Islam -');
// }

// array_map('callBackFunction', $cars1);


// foreach ($cars1 as $key => $car) {
//     echo $key, $car;
// }


for ($i=0; $i <count($cars1) ; $i++) { 
    echo $cars1[$i].' ';
}


