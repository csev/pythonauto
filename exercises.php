<?php

$EXERCISES = Array(
"2.2" => Array (
"qtext" => "Write a program that uses raw_input to prompt a user for their name and then
welcomes them.",
"desired" => "Hello Sarah",
"code" => '# This first line is provided for you

name = raw_input("Enter your name")',
"checks" => Array(
"raw_input" => "You must prompt for the user's name using the raw_input() function.",
"print" => "You must use the print statement to print the line of output."
)),

"2.3" => Array(
"qtext" => "Write a program to prompt the user for hours and rate per hour using raw_input
to compute gross pay.  Use 35 hours and a rate of 2.75 per hour to test the 
program (the pay should be 96.25).
We won't worry about making sure our pay has exactly two digits after the decimal 
place for now. If you want, you can play with the built-in Python round function 
to properly round the resulting pay to two decimal places.",
"desired" => "Pay: 96.25",
"code" => '# This first line is provided for you

name = raw_input("Enter Hours:")',
"checks" => Array(
"raw_input" => "You must prompt the pay and rate using the raw_input() function.",
"print" => "You must use the print statement to print the output.",
"float" => "You should use the built-in float() function to convert from a string to a float.",
"!96.25" => "You must actually calculate the pay."))
);
?>

