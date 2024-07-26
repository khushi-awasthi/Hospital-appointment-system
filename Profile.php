<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>

    
    <style>
        body{
            
            background-image:url(hos54.jpg);
            min-height: 100vh;
            background-size:cover;
            display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
        }
        table{
            height:400px;
            width:400px;
            border:2px solid;
            box-shadow:5px 5px 10px 10px grey;
            padding:10px;
            margin-left:100px;
        }
        a{
            margin-left:100px;
            color:white;
            text-decoration:none;
        }
        
    </style>
</head>
<body>


    <?php
            session_start();
            $sesid=$_SESSION['user'];
            $conn=mysqli_connect("localhost","root","","project");
            $sel="select * from register where email='$sesid'";
            $r=mysqli_query($conn,$sel);
            $k=mysqli_fetch_array($r,MYSQLI_BOTH);
    ?>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo $k['name'] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $k['email'] ?></td>
        </tr>
        <tr>
            <th>dateofbirth</th>
            <td><?php echo $k['dateofbirth']?></td>
        </tr>
        <tr>
            <th>Contact</th>
            <td><?php echo $k['contact']?></td>
        </tr>
        <tr>
        <th>Gender</th>
        <td><?php echo $k['gender']?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $k['address']?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo $k['password'] ?></td>
        </tr>
        
        <tr>
            <td><a href="changeprofile.php">Change</a></td>
        </tr>
    </table>
</body>

</html>