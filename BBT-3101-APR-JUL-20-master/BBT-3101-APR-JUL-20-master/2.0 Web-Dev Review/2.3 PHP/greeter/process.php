<?php
//var_dump($_GET); #superglobal(forms) -- update/create

$age = $_GET['age'];

#echo $age;

if($age <= 12){
  //redirecting you to another page in PHP
  header("Location:index.php?msg=Child&greet=yes");
}else if($age >= 13 and $age <= 19){
  header("Location:index.php?msg=Teenie&greet=yes");
}else if($age >= 20 and $age <= 30){
  header("Location:index.php?msg=Yout&greet=yes");
}else{
  header("Location:index.php?msg=Mzito&greet=yes");
}
