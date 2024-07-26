<?php
 
 
 session_start();
            $sesid=$_SESSION['user'];
            $conn=mysqli_connect("localhost","root","","project");

            $a = $_POST['name'];
            $b = $_POST['email'];
            $c = $_POST['dob'];
            $d = $_POST['cno'];
            $e = $_POST['gender'];
            $f= $_POST['add'];
            $g = $_POST['pass'];

            $up="update register set name='$a', email='$b',dateofbirth='$c',contact='$d',gender='$e',
            address='$f',password='$g'";
            if(mysqli_query($conn,$up))
            {
                header("location:profile.php");
            }
            else{
                echo"profile not found";
            }
?>