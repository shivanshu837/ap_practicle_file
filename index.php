<?php
//phpinfo();
//echo "he said \"hey that's my bike\"";

/*
//we can use echo to write html tags
echo "<h1> Hello Prateek here </h1> ";
//concatenating strings using . or ,
echo "hello prateek here "."how are u doin?</br>";
echo "hello prateek here ","how are u doin?";
//print is same as echo
*/

//comments in php /* */ -> multiple line comments
//single line comments by using #,//


//variables in php
/*
$name = "prateek sharma";
$age = 19;
echo $name." ".$age;
*/

//data types
//strings ,boolean ,integer ,float ,NULL


//string interpolation
//echo "hello myself $name im $age years old"-> when we use double quotes php look the string for any variable

//operators , operator precedence and associativity

//string methods
/*
-strlen()
-strrev()
-strpos(with two arguments)
-str_word_count()
-str_replace('world','dolly','hello world')-> replaces world with dolly


//numeric methods
-is_numeric -> identifies whether a numeric or numeric string
-is_int
-is_float
-is_finite
-var_dump -> it returns the data type with the value
-to parse we use (int)$x

some more operators
-<=> -> spaceship operator $x<=>$y returns -1 if x is less than y and
returns 0 if equal and 1 if x is greater than y

//php constants 
define("x",5,true);-> here true signifies that the variable name is case insensitive;
echo x;



//functions ---------

declare(strict_types=1);
function add(int $x,int $y):int{
    return $x + $y;
}
$result=add(5,5);
echo $result;

if we pass anyother type of argument then simply it will be an error

//array 
$names = array('prateek','yug');
-unset($names[0])->deletes the element at the position.
-count($names)->count the no. of elements in array

//asociative arrays -> for key value pair
$debts = array('prateek'=>150,'yug'=>160);
$debts('prateek');


foreach($names as $value){
    echo $value,'</br>';
}

foreach($debts as $key=>$value){
    echo $key,'->',$value,'</br>';
}

implode and explode in array

implode(' ',$names) -> it returns a string with 'first argument' attached after each element of array
explode(' ',$names) -> it returns an array splits or breaks the string at the point and returns an array of it

extract()-> this method is used for associative arrays and it creates variables of keys.

sort()-> sorts the array in ascending order
rsort()-> sorts in descending order
ksort() -> sorts the associative array ont the basis of the key in asc order



splitting array -> array_slice(arrayname,indexto start, no.of ele)-> returns an array
merging array -> array_merge(array1,array2)-> returns an array



local and global variable
- if we want to use global var in funct use global $variable name 

incude and require in php is used to include any other php file in your current php file
diff b/w include and require is that if something goes wrong with the require then whole page will not be loaded but
in include it is not so

ex-
<?php
include 'filename.php'
?>


******************************** php and forms *****************************

<form action = 'handler.php' method='get or post'>
name:<input type="text">
<input type="submit" value="submit">
</form>

//action tells where this data will go
//method means there are two mw=ethods by which data will be transffered i.e get or post
//input type should be submit because it will send data to some place




*/
















?>