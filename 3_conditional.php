<?php

/*
Logical Operators 

&& ---> AND
|| ---> OR
!= ---> Not Equal
== ---> Equal
! -----> NOT

Conditionals 

if 
else if
else
while
switch
*/

use function PHPSTORM_META\type;

$age = '48';

// if($age<18){
//     print('Under Age');
// }elseif($age>=18 && $age<=40){
//     print('Perfect Age for Marrage');
// }elseif($age>=40){
//     print('Over Age for Marrage');
// }else{
//     print('Unknown Condition!');
// }


// switch($age){
//     case $age<18:
//         print('Under Age');
//         break;
//     case $age>=18 && $age<=40:
//         print('Perfect Age for Marrage');
//         break;
//     case $age>=40:
//         print('Over Age for Marrage');
//         break;
//     default:
//         print('Unknown Condition!');
//         break;
// }

$payment_methods = "Card";

// switch($payment_methods){
//     case 'cod':
//         print('Cash On Delivery');
//         break;
//     case 'Card':
//         print('Bank Transfer');
//         break;
//     case 'bkash':
//         print('Bkash Payment');
//         break;
//     default:
//         print('Unknown Condition!');
//         break;
// }


echo $age == 50;

?>