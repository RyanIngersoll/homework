<?php 

// Exercise #1

// Title File: hw_wk2_p1.php

// Please look up the date function to help

// Create a function called daysOfMonth.
// Make sure you are able to pass a month e.g. 'January' to the function. Note: Leap year does not exist. (Lookup date function in php).
// Use other months to test your function.
// Expected output:

// January has 31 days in it.
// February has 28 days in it. (Unless it is leap year, then return 29)
//     and so on...

// function days_of_the_month($month, $year) {
	

// 	$numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// 	return $numDays;
// }

// date_default_timezone_get('America/Chicago');
// echo " Welcome to Days of the Month..." . PHP_EOL;	
// echo " Do you want the (C)urrent month or something (E)lse? " . PHP_EOL;

// $request = trim(fgets(STDIN));

// if($request == 'C'){
// 	$todaysDate = date('t');
// 	echo "the current # of days in this month are: " . $todaysDate . PHP_EOL;
// }
// else{
// 	echo "please enter month like this 1-12: " . PHP_EOL;
// 	$month = trim(fgets(STDIN));
// 	echo "please enter year like this 1999: " . PHP_EOL;
// 	$year = trim(fgets(STDIN));
	
// 	$numDays = days_of_the_month($month, $year);
// 	echo "the number of days you requested is: " . $numDays . PHP_EOL;
// }

//----------------------------------------------------------------------------------------------//
// Exercise #2

// Title File: hw_wk2_p2.php

// Create a function the returns the area of a circle.
// Now create a function that returns the area of a donut; use your previous function to figure this out.
// The radius of the donut is 15 and the radius of its hole is 5.

// function area_of_a_doughnut($radiusOne,$radiusTwo){
// 	$pi= pi();
// 	$areaCircleOne = $pi * ($radiusOne * $radiusOne);
// 	$areaCircleTwo = $pi * ($radiusTwo * $radiusTwo);
// 	$area_of_a_doughnut = ($areaCircleOne - $areaCircleTwo);

// 	return $area_of_a_doughnut;

// }

// $radiusOne = 5;
// $radiusTwo = 3;
// //var_dump($area_of_a_circle($radius));
// echo area_of_a_doughnut($radiusOne, $radiusTwo);

//----------------------------------------------------------------------------------------------//
// Exercise #3

// Title file: h2_wk2_p3.php

// You will need to create a function called listCars() that accepts an array parameter. The function should return each car in the array like the example in the output section.

// You have the following array:




// Create a function that outputs the following:

// I own a 2014 Cadillac Escalade. Details below:
// ------------------------------------------------
// 4 Door 2014 Cadillac Escalade
// Color: white
// Milelage: 5000
// Sunroof: N/A
// Convertable: N/A
// Lincense NO: HTML5
// Now create a function called add_car() that allows you to add cars to the array and now call listCars() so you are able to output with the new added car.
// function menuOrder($items){
//     echo 'Do you want to add new item to the (B)eginning or the (E)nd of your list?';

//     $begOrEnd = get_input(TRUE);

//     echo 'Enter your new item: ';
//     $todo_item = get_input();

//     if($begOrEnd == 'B'){
//         array_unshift($items, $todo_item);
//     } else {
//         $items[] = $todo_item;
//     }
//     return $items;
// }
//----------------------------------------------------------------------------------------
$cars = array(
    'Toyota Solara' => array(
        'year' => 2001,
        'doors' => 2,
        'color' => 'gray',
        'mileage' => 100000,
        'sunroof' => TRUE,
        'convertable' => FALSE,
        'license' => 'JSRULZ'
    ),

    'Honda Odyssey' => array(
        'year' => 2004, 
        'doors' => 4,
        'color' => 'marron',
        'mileage' => 60000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'ILUVPHP'
    ),

    'Cadillac Escalade' => array(
        'year' => 2014,
        'doors' => 4,
        'color' => 'white',
        'mileage' => 5000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'HTML5'
    )

);

function listCars($cars){
	foreach ($cars as $car => $carData) {
	
		echo "I own a {$carData['year']} " . "{$car}" . " details below: " . PHP_EOL;
		
		echo "-------------------------------------------------------------------" . PHP_EOL;
		echo "{$carData['doors']} door " . "{$carData['year']} " . " {$car}" . PHP_EOL;
	
		echo "Color: {$carData['doors']}" . PHP_EOL;
		echo "Mileage: {$carData['mileage']}" . PHP_EOL;
		echo "Sunroof: {$carData['sunroof']}" . PHP_EOL;
		echo "Convertable: {$carData['convertable']}" . PHP_EOL;
		echo "License NO: {$carData['license']}" . PHP_EOL;
	}
}

function get_input($upper = FALSE) {

		$cars = trim(fgets(STDIN));
		
		if ($upper) {
			return strtoupper($cars);
		} 
		else { 
			return $cars;
		}
 	}

 function add_car($Cars){
 	$attributesArray = []; 
	echo 'please enter your car data' . PHP_EOL;
	echo '----------------------------------------------' . PHP_EOL;
	echo "enter make and model in the following format: Toyata Solara " . PHP_EOL;

	// $cars = array();

	// foreach (range($p, $size-1) as $car) {
	//     array_push($cars, array(
	//         "number" => $data[$key], 
	//         "data" => $kkk[1], 
	//         "status" => "A",
 //    	)
	//    );

 	// function add_car($cars){

	$car = get_input();
	$cars[] = $car;
 
	echo "enter year: " . PHP_EOL;
	$year = get_input();
	$cars[] = $carData['year'] = $year;

	echo "enter doors: " . PHP_EOL;
	$doors = get_input();
	$cars[] = $carData['doors'] = $doors;

	echo "enter color: " . PHP_EOL;
	$color = get_input();
	$cars[] = $carData['color'] = $color;

	echo "enter mileage: " . PHP_EOL;
	$year = get_input();
	$cars[] = $carData['mileage'] = $year;

	echo "enter convertible: " . PHP_EOL;
	$convertible = get_input();
	$cars[] = $carData['convertible'] = $convertible;

	echo "enter license NO: " . PHP_EOL;
	$license = get_input();
	$cars[] = $carData['license'] = $license;
	var_dump($cars);
	return $cars;
}	

echo " welcome to car data" . PHP_EOL;
echo " ............................................" . PHP_EOL;
echo " this is our current inventory" . PHP_EOL;

$currentInventory = listCars($cars);
echo $currentInventory;
echo " --------------------------------------------------" . PHP_EOL;
echo "Do You want to (A)dd a new Car?" . PHP_EOL;

$newCar = get_input(TRUE);

if($newCar == 'A'){
	add_car($cars);
	echo listCars($cars);
}
else{
	exit(0);
}










?>