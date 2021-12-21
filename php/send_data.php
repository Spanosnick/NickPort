<?php

if ( isset( $_POST['submit'] ) ) { 
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
}
$msg='This is the message from Portfolio'.$message;

$myemail='nickspanosf1@gmail.com';
mail($myemail,'Portfolio Website',$message,$msg);


header('Location: https://nickport.com/port/');
?>