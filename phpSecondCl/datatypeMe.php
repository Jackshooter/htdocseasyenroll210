<?php
	echo ("<h4>");
		// Integer 	
		$varInt = 312; 
		var_dump($varInt);
 		// Strings
		$varString = "Hello WWW";
		echo "<br>";
		var_dump($varString);
		echo "<br>";
		// floats
		$varFloat = 3.14;
		var_dump($varFloat);
		echo "<br>";
		 
		$b = 10.2e5;
		var_dump($b);
		echo "<br>";
		// boolean
		$varBool = true;
		var_dump($varBool);
		echo "<br>";
		// NULL values
		$varNull = NULL;
		var_dump($varNull);
		echo "<br>";
echo ("</h4>");
		echo ( " <h3> PHP variable's type is determined by the value it holds </h3>") ;
		echo ( " <h4> Assign an integer value to variable <h4>") ;
		
		$var = 10;
		echo ( " <h4> Check its type and value </h4>") ;
		var_dump($var);
		echo ( " <h4> Use same variable and assign different value types and check its type  using var_dump() </h4>") ;
		echo ( " <h4> Setting to Floating number </h4>") ;
		$var = 88.923;
		var_dump($var);
		echo ( " <h4> Setting to String </h4>") ;
		$var = "Web Programming";
		var_dump($var);
		echo ( " <h4> Setting to  boolean </h4>") ;
		$var = true;
		var_dump($var);
		echo ( " <h4> can have null values as well </h4>") ;
		$var = null;
		var_dump($var);
	?>