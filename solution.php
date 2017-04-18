<?php

// Repeat the array three times
function repeat($repeatInput = array(1, 2, 3))
{
	// Repeat three times and output each element of array
	for($x = 1; $x <= 3; $x++)
	{
		echo implode(",", $repeatInput);
	}
}

// Format the string
function reformat($string = "liMeSHArp DeveLoper TEST")
{
	// Set accepted vowels - be lazy and just chuck caps and non-caps in, instead of using strtoupper
	$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

	// Replace all vowels with null value in string
	$string = str_replace($vowels, "", $string);

	// Convert all chars to lowercase
	$string = strtolower($string);

	// Convert first char to uppercase using this super cheaty function that I doubt people ever actually use
	$string =  ucfirst($string);

	// Output string
	echo $string;
}

/* 
* Next binary number
* I struggled with this and couldn't finish it. Here's my attempt never the less. 
* From what I understood, you wanted to input a binary string and have the function
* calculate the next binary element using the truth table, using only for loops.  
*/
function next_binary_num($binaryString = array(1, 0, 0, 0, 0, 0, 0, 0, 0, 1))
{
	// Assign array of binary string to var
	$binaryString = array(1, 0, 0, 0, 0, 0, 0, 0, 0, 1);

	// Loop x until reaches length of binary string
	for($x = 0; $x < count($binaryString); $x++)
	{
		/* Set Y = to $x + 1, meaning that $y is always one array element in ahead of $x. Eg, $x = 10000001
		*																					  $y =  0000001
		*/
		$y = $x + 1;

		// This is where I got lost... Realised I was not working it out from the last element of the binary string and was basing it on the entered string.
		for($x = $x; $x == 0; $x++)
		{
			echo 0;
		}

		for($x = $x; $x == 1; $x++)
		{
			for($y = $y; $y == 1; $y++)
			{
				echo 1;
			}
		}

	}
}

?>