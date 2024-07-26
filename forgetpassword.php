<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        h1{
            color:white;
            text-shadow: 2px 2px 5px  brown;
            margin-top:10px;
            font-size:90px;
        }
        body{
            background-image:url(forgetp.jpg);
            
			min-height: 50vh;
			background-size: cover;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
        }
        form{
            margin-top:00px;
            font-size:35px;
            color:white;
        }
        input[type="email"]{
            font-size:30px;
            
        }
        button{
            background-color:  blue;
			color: white;
			padding: 7px;
			border: none;
			cursor: pointer;
			width: 30%;
            margin-top:30px;
            margin-left:200px;
        }
        button:hover {
			background-color: black;
		}
    </style>
</head>
<body>
    <h1>Forget password</h1>
    <form action="forgetpasscode.php" method="post">
    Enter register email id :<input type="email" name="email"><br>
    <button><h3>Check</h3></button>
</form>

</body>
</html>