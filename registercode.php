<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['dob'];
$d=$_POST['cno'];
$e=$_POST['gnd'];
$f=$_POST['add'];
$g=$_POST['pass'];

$conn=mysqli_connect("localhost","root","","project");
$ins="insert into register(name,email, dateofbirth,contact,gender,address,password)values('$a','$b',
'$c','$d','$e','$f','$g')";
if(mysqli_query($conn,$ins)){
    echo "<script>window.location.href='register.php';alert('data store')</script>";
}
else{
    echo "<script>window.location.href='register.php';alert('data  not store')</script>";
}

?>
