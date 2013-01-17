<?php

$EXERCISES = Array(
"hello" => Array (
"qtext" => "Write a program that uses a <b>print</b> statement to say 'hello world'
as shown below.",
"desired" => "hello world",
"code" => 'prinq "hello world"',
"checks" => Array(
"print" => "You must use a print statement within the loop."
)),

"loop" => Array (
"qtext" => "Write a program that uses a <b>for</b> loop  and the built-in function 
<b>range</b> to write out three numbers as shown below.",
"desired" => "0
1
2",
"code" => 'print range(3)',
"checks" => Array(
"for" => "You must produce the numbers using a for loop.",
"print" => "You must use a print statement within the loop.",
"range" => "You should use the range function to generate the list of numbers on the for statement.",
":" => "Your for statement should end with a colon (:) and the following line should be indented"
)),

"2.2" => Array (
"qtext" => "<b>2.2</b> Write a program that uses <b>raw_input</b> 
to prompt a user for their name and then
welcomes them.  Note that <b>raw_input</b> will pop a dialog box.",
"desired" => "Hello Sarah",
"code" => '# The code below almost works

name = raw_input("Enter your name")
print "Howdy"',
"checks" => Array(
"raw_input" => "You must prompt for the user's name using the raw_input() function.",
"print" => "You must use the print statement to print the line of output."
)),

"2.3" => Array(
"qtext" => "<b>2.3</b> Write a program to prompt the user for hours and rate per hour using raw_input
to compute gross pay.  Use 35 hours and a rate of 2.75 per hour to test the 
program (the pay should be 96.25).  You should use <b>raw_input</b> to 
read a string and <b>float()</b> to convert the string to a number.
Do not worry about error checking.",
"desired" => "Pay: 96.25",
"code" => '# This first line is provided for you

hrs = raw_input("Enter Hours:")',
"checks" => Array(
"raw_input" => "You must prompt the pay and rate using the raw_input() function.",
"print" => "You must use the print statement to print the output.",
"float" => "You should use the built-in float() function to convert from a string to a float.",
"!96.25" => "You must actually calculate the pay.")),


"3.1" => Array(
"qtext" => "<b>3.1</b> Write a program to prompt the user for hours and rate per hour using raw_input
to compute gross pay.  Award time-and-a-half for the hourly rate for all hours 
worked above 40 hours.  Use 45 hours and a rate of 10.00 per hour to test the 
program (the pay should be 475.0).  You should use <b>raw_input</b> to 
read a string and <b>float()</b> to convert the string to a number.
Do not worry about error checking the user input - assume the user types numbers properly.",
"desired" => "Pay: 475.0",
"code" => 'hrs = raw_input("Enter Hours:")
h = float(hrs)',
"checks" => Array(
"raw_input" => "You must prompt the pay and rate using the raw_input() function.",
"print" => "You must use the print statement to print the output.",
"if" => "You should use an if statement to decide to to the overtime computation or not.",
"float" => "You should use the built-in float() function to convert from a string to a float.",
"!475.0" => "You must actually calculate the pay.")),

"3.3" => Array(
"qtext" => "<b>3.3</b> Write a program to prompt the user for a score using <b>raw_input</b>.
Print out a letter grade based on the following table:<br/>
Score    Grade<br/>
>= 0.9     A<br/>
>= 0.8     B<br/>
>= 0.7     C<br/>
>= 0.6     D<br/>
< 0.6      F<br/>
If the user enters bad data or a value out of range, 
print a suitable error message and exit.
For the test, enter a score of 0.85.",
"desired" => "B",
"code" => '',
"checks" => Array(
"raw_input" => "You must prompt for the score using the raw_input() function.",
"float" => "You should use the built-in float() function to convert from a string to a float.",
"print" => "You must use the print statement to print the output.",
"if" => "You should use an if statement to check the value of the score.",
"elif" => "You should use an elif statement to check the value of the score.",
"try" => "You should use a try/except block to deal with bad data entered from the user",
"except" => "You should use a try/except block to deal with bad data entered from the user")
),

"4.6" => Array(
"qtext" => "<b>4.6</b> Write a program to prompt the user for hours and rate per hour using raw_input
to compute gross pay.  Award time-and-a-half for the hourly rate for all hours 
worked above 40 hours.  
Put the logic to do the computation of time-and-a-half in a function called <b>computepay()</b>
and use the function to do the computation.  The function should return a value.
Use 45 hours and a rate of 10.00 per hour to test the 
program (the pay should be 475.0).  You should use <b>raw_input</b> to 
read a string and <b>float()</b> to convert the string to a number.
Do not worry about error checking the user input unless you want to - 
you can assume the user types numbers properly.",
"desired" => "Pay: 475.0",
"code" => 'hrs = raw_input("Enter Hours:")
h = float(hrs)',
"checks" => Array(
"raw_input" => "You must prompt the pay and rate using the raw_input() function.",
"print" => "You must use the print statement to print the output.",
"if" => "You should use an if statement to decide to to the overtime computation or not.",
"float" => "You should use the built-in float() function to convert from a string to a float.",
"def" => "You must use a function called computepay to do the computation.",
"return" => "You must use a function called computepay to do the computation.",
"computepay" => "You must use a function called computepay to do the computation.",
"!475.0" => "You must actually calculate the pay.")
)

);
?>

