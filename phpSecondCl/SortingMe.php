<?php 
$indexArray = array(1,2,3,4,5);
$asociativeArray = array ( "day1" =>"Monday" , 
 							"day2" =>"Tuesday",
 							"day3" =>"Wednesday",
  							"day4" =>"Thursday",
 							"day5"=> "Friday");
foreach ($asociativeArray as $value) {
	printf(" $value ");
}
printf( " Key         Value </br>");
foreach ($asociativeArray as $key => $value) {
	print("$key   $value  </br>");
}
$originalArray = $asociativeArray;
sort($asociativeArray );
printf( " Key         Value </br>");
foreach ($asociativeArray as $key => $value) {
	print("$key   $value  </br>");
}
$asociativeArray = $originalArray;
asort( $asociativeArray);
printf( " Key         Value </br>");
foreach ($asociativeArray as $key => $value) {
	print("$key   $value  </br>");
}
?>
