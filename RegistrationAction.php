<?php 

$value1 = $_POST["fname"];

if (!empty($value1))
 {
  echo "Fine<br>";
} 

else 
{
  echo "1st Name Must be Complete<br>";
}

$value2 = $_POST["lname"];
if (!empty($value2))
 {
  echo "Fine <br>";
} 
else 
{
  echo " Last Name Should be complete <br>";
}


$value3 = $_POST["gender"];
if (!empty($value3) && $value3) 
{
  echo $value3."<br>";
} else {
  echo "<br> Please Select a Gender <br>";
}


?>



