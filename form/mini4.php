<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$books = $_POST["books"];
$os = $_POST["os"];

$values = $fname . "," . $lname . "," .  $email . "," .  $phone . "," . $books. "," . $os . "\n";

$csv = fopen("mini4.csv","a+" );

fwrite($csv, $values);

fclose($csv);

$csv = fopen("mini4.csv","r" );

while(!feof($csv)) //loop check 
{
    echo fgets($csv). "<br>";
}
fclose($csv);


?>