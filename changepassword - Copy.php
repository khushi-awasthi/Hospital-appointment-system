<html>
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


        <style>
            *{
                margin:10px;
                padding:10px;
            }
            body{
                background:linear-gradient(white,black);
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

    
    </div>
        <center><h1>Change Password Page</h1></center>
        <form action="changepasswordcode.php" method="post">
            Old Password <input type="text" name="opass"><br>
            New Password<input type="text" name="npass"><br>
            Confirm Password<input type="text" name="cpass"><br>
            <center><button>Change</button></center>
        </form>
    </body>
        
    
</html>