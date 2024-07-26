<?php
$a=$_POST['pname'];
$b=$_POST['date'];
$c=$_POST['number'];
$d=$_POST['dep'];
$e=$_POST['email'];
$f=$_POST['sym'];
$g=$_POST['time'];
$h=$_POST['gnd'];

$conn=mysqli_connect("localhost","root","","project");
$ins="INSERT INTO `appoint`( `pname`, `date`, `number`, `department`, `email`, `symptoms`, `time`, `gender`)
 VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";
 if(mysqli_query($conn,$ins)){
   
     header("location:Appointment.php");
 }
 else{
    echo"not inserted";
 }

?>