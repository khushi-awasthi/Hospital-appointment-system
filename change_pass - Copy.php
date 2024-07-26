<html>
    <head>
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
            
            height:400px;
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
        <center><h1>Change Password</h1></center>
        <form action="change_pass_code.php" method="post">
              new password <input type="text" name="npass" ><br>
            confirm Password:<input type="text" name="cpass"><br>
            <center><button>Change</button></center>
        </form>
    </body>
</html>