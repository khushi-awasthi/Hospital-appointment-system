<html>
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>

    
        <style>
            body{
                height:300px;
    width:300px;
    color:blue;
    background: linear-gradient(black,white,gray);
    
    background: linear-gradient(white,skyblue,black); 
    box-shadow:4px 4px 4px black, -4px -4px 4px white inset;
    /* margin:auto; */
    margin-top:200px;
    margin-left:600px;
            }
            a{
                color:black;
                text-decoration:none;
            }
        </style>
</head>
            <body>
                <center><h1>Dashboard Page</h1></center>

                <?php
                session_start();
                $sesid=$_SESSION['user'];
                $conn=mysqli_connect("localhost","root","","project");
                $sel="select * from register where email='$sesid'";
                $r=mysqli_query($conn,$sel);
                $k=mysqli_fetch_array($r,MYSQLI_BOTH);
                ?>
                 <center><h1>Welcome <?php echo $k['name'];?></h1> </center>
                <center><a href="changepassword.php">Change Password</a></center><br>
                
                <center><a href="profile.php">Profile</a></center>
            </body>
</html>