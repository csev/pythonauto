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
Do not worry about error checking or bad user data.",
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
program (the pay should be 475).  You should use <b>raw_input</b> to 
read a string and <b>float()</b> to convert the string to a number.
Do not worry about error checking the user input - assume the user types numbers properly.
",
"desired" => "Pay: 475",
"code" => 'hrs = raw_input("Enter Hours:")
h = float(hrs)',
"checks" => Array(
"raw_input" => "You must prompt the pay and rate using the raw_input() function.",
"print" => "You must use the print statement to print the output.",
"if" => "You should use an if statement to decide to to the overtime computation or not.",
"float" => "You should use the built-in float() function to convert from a string to a float.",
"!475" => "You must actually calculate the pay.")),

"3.3" => Array(
"qtext" => "<b>3.3</b> Write a program to prompt the user for a score using <b>raw_input</b>.
Print out a letter grade based on the following table:<br/>
Score    Grade<br/>
>= 0.9     A<br/>
>= 0.8     B<br/>
>= 0.7     C<br/>
>= 0.6     D<br/>
< 0.6      F<br/>
If the user enters a value out of range, print a suitable error message and exit.
For the test, enter a score of 0.85.
",
"desired" => "B",
"code" => '',
"checks" => Array(
"raw_input" => "You must prompt for the score using the raw_input() function.",
"float" => "You should use the built-in float() function to convert from a string to a float.",
"print" => "You must use the print statement to print the output.",
"if" => "You should use an if statement to check the value of the score.",
"elif" => "You should use an elif statement to check the value of the score.")
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
you can assume the user types numbers properly.
",
"desired" => "Pay: 475",
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
"!475" => "You must actually calculate the pay.")
),

"5.2" => Array(
"qtext" => "<b>5.2</b> Write a program that repeatedly prompts a user for integer numbers 
until the user enters 'done'.  Once 'done' is entered, print out the largest and smallest
of the numbers.  If the user enters anything other than a valid number catch it
with a try/except and put out an appropriate message and ignore the number.  
Enter the numbers from the book for problem 5.1 and Match the sample output below.
",
"desired" => "Invalid input
Maximum is 7
Minimum is 4",
"code" => 'largest = None
smallest = None
while True:
    num = raw_input("Enter a number: ")
    if num == "done" : break
    print num

print "Maximum", largest',
"checks" => Array(
"raw_input" => "You must prompt for the numbers using the raw_input() function.",
"print" => "You must use the print statement to print the output.",
"while" => "You should use a while statement to read the numbers.",
"int" => "You should use the int() function to convert from a string to an integer.",
"try" => "You should handle bad numbers using a try/except structure.",
"except" => "You should handle bad numbers using a try/except structure.",
"!4" => "You must actually calculate the minimum.",
"!7" => "You must actually calculate the maximum.")
),

"6.5" => Array(
"qtext" => "<b>6.5</b> Write code using find() and string slicing (see section 6.10) to extract 
the number at the end of the line below.   Convert the extracted value to a floating point 
number and print it out.",
"desired" => "0.8475",
"code" => 'text = "X-DSPAM-Confidence:    0.8475";',
"checks" => Array(
"find" => "You should use the find function to get the position of the colon in the string.",
":" => "You should use string slicing [n:m] to extract data from the string.",
"float" => "You should use the float() function to convert from a string to an integer.",
'!"0.8475"' =>  "You must actually pull the data from the string.")
),

"7.1" => Array(
"qtext" => "<b>7.1</b> Write a program that prompts for a file name, then opens that file
and reads through the file, and print the contents of the file in upper case.  Use
the file <b>words.txt</b> to produce the output below.",
"desired" => "WRITING PROGRAMS OR PROGRAMMING IS A VERY CREATIVE
AND REWARDING ACTIVITY  YOU CAN WRITE PROGRAMS FOR
MANY REASONS RANGING FROM MAKING YOUR LIVING TO SOLVING
A DIFFICULT DATA ANALYSIS PROBLEM TO HAVING FUN TO HELPING
SOMEONE ELSE SOLVE A PROBLEM  THIS BOOK ASSUMES THAT
{\EM EVERYONE} NEEDS TO KNOW HOW TO PROGRAM AND THAT ONCE
YOU KNOW HOW TO PROGRAM, YOU WILL FIGURE OUT WHAT YOU WANT
TO DO WITH YOUR NEWFOUND SKILLS

WE ARE SURROUNDED IN OUR DAILY LIVES WITH COMPUTERS RANGING
FROM LAPTOPS TO CELL PHONES  WE CAN THINK OF THESE COMPUTERS
AS OUR PERSONAL ASSISTANTS WHO CAN TAKE CARE OF MANY THINGS
ON OUR BEHALF  THE HARDWARE IN OUR CURRENT-DAY COMPUTERS
IS ESSENTIALLY BUILT TO CONTINUOUSLY AS US THE QUESTION
WHAT WOULD YOU LIKE ME TO DO NEXT

OUR COMPUTERS ARE FAST AND HAVE VASTS AMOUNTS OF MEMORY AND
COULD BE VERY HELPFUL TO US IF WE ONLY KNEW THE LANGUAGE TO
SPEAK TO EXPLAIN TO THE COMPUTER WHAT WE WOULD LIKE IT TO
DO NEXT IF WE KNEW THIS LANGUAGE WE COULD TELL THE
COMPUTER TO DO TASKS ON OUR BEHALF THAT WERE REPTITIVE
INTERESTINGLY, THE KINDS OF THINGS COMPUTERS CAN DO BEST
ARE OFTEN THE KINDS OF THINGS THAT WE HUMANS FIND BORING
AND MIND-NUMBING",
"code" => 'fh = open("words.txt")
text = fh.read()
print text.upper()
',
"checks" => Array(
"raw_input" => "You must prompt for the file name using the raw_input() function.",
"open" => "You need to use open() to open the file.",
"print" => "You must use the print statement to print the lines.",
"upper" => "You should use the upper() function to convert the lines to upper case.")
),

"7.2" => Array(
"qtext" => "<b>7.2</b> Write a program that prompts for a file name, then opens that file
and reads through the file, looking for lines of the form:
<pre>
X-DSPAM-Confidence:    0.8475
</pre>
Count these lines and extract the floating point values form each of the lines and 
Open the file <b>mbox-short.txt</b> to produce the output below.",
"desired" => "Average spam confidence: 0.7507185185185187",
"code" => 'fname = raw_input("Enter file name: ")
fh = open(fname)
for line in fh:
    if not line.startswith("X-DSPAM-Confidence:") : continue
    print line
print "Done"
',
"checks" => Array(
"raw_input" => "You must prompt for the file name using the raw_input() function.",
"open" => "You need to use open() to open the file.",
"find" => "You should use the find function to get the position of the colon in the string.",
":" => "You should use string slicing [n:m] to extract data from the string.",
"float" => "You should use the float() function to convert from a string to an integer.",
'!18518' =>  "You must actually pull the data from the strings and convert it.",
"/" => "Average is usually a total / count.")
),

"8.4" => Array(
"qtext" => "<b>8.4</b> Open the file <b>romeo.txt</b> and read it line by
line.  For each line, split the line into a list of words using the <b>split()</b>
function.   The program should build a list of words.  For each word on each line
check to see if the word is already in the list and if not append it to the list.
At the end of the program print out the list.",
"desired" => "['But', 'soft', 'what', 'light', 'through', 'yonder', 'window', 'breaks', 'It', 'is', 'the', 'east', 'and', 'Juliet', 'sun', 'Arise', 'fair', 'kill', 'envious', 'moon', 'Who', 'already', 'sick', 'pale', 'with', 'grief']",
"code" => 'fname = raw_input("Enter file name: ")
fh = open(fname)
lst = []
for line in fh:
    words = line.split()
    for word in words:
        if word in lst: continue
        lst.append(word)
print lst
',
"checks" => Array(
"raw_input" => "You must prompt for the file name using the raw_input() function.",
"open" => "You need to use open() to open the file.",
"find" => "You should use the find function to get the position of the colon in the string.",
":" => "You should use string slicing [n:m] to extract data from the string.",
"float" => "You should use the float() function to convert from a string to an integer.",
'!18518' =>  "You must actually pull the data from the strings and convert it.",
"/" => "Average is usually a total / count.")
)

);
?>

