<?php
if(!empty( $_POST['fname']) && !empty( $_POST['lname'])){
    $name = $_POST['fname'];
    $sur = $_POST['lname'];
    $m = $_POST['mail'];
    $s = $_POST['sgpa'];
    $te = $_POST['ten'];
    $t = $_POST['twe'];
    $r = $_POST['roll'];
    $b = $_POST['branch'];
    $a = $_POST['ach'];
}  
else{
    echo "enter all fields</br>";
}
filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL);
echo("DETAILS ENTERED </br>");
echo("FIRST NAME : $name </br>");
echo("LAST NAME : $sur </br>");
echo(" E-MAIL : $m </br>");
echo("SGPA :  $s</br>");
echo("HIGH SCHOOL PERCENT : $te </br>");
echo("INTERMEDIATE PERCENT : $t </br>");
echo("ROLL NO. : $r</br>");
echo("BRANCH : $b </br>");
echo("ACHIEVEMENTS : $a </br>");
?>