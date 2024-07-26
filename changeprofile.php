<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>

    
        <style>
           *{
                margin:10px;
                padding:10px;
            }
            body{
                background:linear-gradient(white,cadetblue);
            }
    h1{
            color:white;
            text-shadow: 2px 2px 5px  brown;
        }
        form{
            height:500px;
            width:400px;
            border:2px solid;
            box-shadow:5px 5px 10px 10px grey;
            padding:10px;
            margin-left:500px;
        }
        .button {
			background-color:blue;
			color: white;
			padding: 14px;
			border: none;
			cursor: pointer;
			width: 100%;
            
		}

		.button:hover {
			background-color: black;
		}
        </style>
    </head>
    <body>
        <center><h1>Change Profile</h1></center>
        <?php
            session_start();
            $sesid=$_SESSION['user'];
            $conn=mysqli_connect("localhost","root","","project");
            $sel="select * from register where email='$sesid'";
            $r=mysqli_query($conn,$sel);
            $k=mysqli_fetch_array($r,MYSQLI_BOTH);
    ?>
        <form action="changeprofilecode.php" method="post">
            Name<input type="text" name="name" value="<?php echo $k['name']?>"><br>
            Email<input type="email" name="email"  value="<?php echo $k['email']?>"><br>
            dateofbirth<input type="text" name="dob" value="<?php echo $k['dateofbirth']?>"><br>
            Contact<input type="text" name="cno" value="<?php echo $k['contact']?>"><br>
            Gender<input type="text" name="gender" value="<?php echo $k['gender']?>"><br>
            Address<input type="text" name="add" value="<?php echo $k['address']?>"><br>
            Password<input type="password" readonly name="pass" value="<?php echo $k['password']?>"><br>
            
            <button name="btn">Submit</button>

        </form>
    </body>
</html>