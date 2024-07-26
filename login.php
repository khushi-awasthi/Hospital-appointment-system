<html>
    <head>
        <style>
            body {
			height: 100%;
			font-family: Arial, sans-serif;
			margin: 0;
		}

        .bg-img {
			background-image: url("back.jpg");
			min-height: 100vh;
			background-size: cover;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

        .container {
			position: relative;
			max-width: 300px;
			padding: 16px;
			background: cadetblue;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}

		h1 {
			text-align: center;
			color: white;
			-webkit-text-stroke: 1px black;
			margin-bottom: 20px;
		}

		b {
			color: ;
			font-size: 18px;
			-webkit-text-stroke: 1px black;
		}

		input[type="email"],
		input[type="password"] {
			width: 100%;
			padding: 12px;
			margin: 8px 0;
			border: 1px solid purple;
			box-sizing: border-box;
		}

		.button {
			background-color:  black;
			color: white;
			padding: 14px;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		.button:hover {
			background-color: aqua;
		}
        </style>
    <head>
                         
        <body>
        <div class="bg-img">
		<h1>LOGIN PAGE</h1>

		<form class="container" action="logincode.php" method="post">
			<b>Email</b>
			<input type="email" placeholder="Enter your Email"
				name="email" required>

                

			<b>Password</b>
			<input type="password" placeholder="Enter your password"
				name="password" required>
                <span class="psw"> <a href="forgetpassword.php">Forgot password ?</a></span>
        
			<button type="submit" class="button">Login</button>
		</form>
	</div>
        </body>
</html>