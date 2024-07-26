<?php
$a=$_POST['npass'];
$b=$_POST['cpass'];

session_start();
$sesid=$_SESSION['user'];
$conn=mysqli_connect("localhost","root","","project");

if($a==$b)
{
    $up="update register set password='$a' where email='$sesid'";
    if(mysqli_query($conn,$up))
    {
        header("location:login.php");
    }
    else{
        echo"password not match";
    }
}
else{
    echo "new and conf pass not match";
}
?>