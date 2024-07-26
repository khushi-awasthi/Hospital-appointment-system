<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>


    <title>Document</title>
    <style>
        body{
            background:url(otp.avif);
            min-height: 50vh;
			background-size: cover;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
        }
        h1{
            font-size:100px;
             color:white;
            text-shadow:4px 4px 5px  black; 
            /* text-shadow: 2px 2px 5px  brown; */
        }
        input[type="text"]{
            font-size:30px;
            background:cadetblue;
            color:white;
            
        }
        form{
            margin-top:00px;
            font-size:35px;
            color:Black;
        }
        button{
            background-color:  Cadetblue;
			color: white;
			padding: 14px;
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
    <h1>OTP PAGE </h1>
    <form action="otpcode.php" method="post">
        Enter OTP: <input type="text" name="otp"><br>
        <button>check</button>
    </form>
</body>
</html>