<?php require "./header.php"; 
	include "./dbcon.php";
?>
<link href="./css/navbar.css" rel="stylesheet">
<link href="./css/signin.css" rel="stylesheet">
</head>

<body class="bg-dark">

    <?php require "./navbar.php"; ?>

    <main class="form-signin text-center">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <img class="mb-4" src="https://github.com/twbs.png" alt="" width="72" height="72">
            <h1 class="display-6 mb-3 fw-normal text-light">Sign In</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="JohnDoe" name="username" autocomplete="off">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" autocomplete="off">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>
			<div class="form-floating">
                <input type="password" class="form-control" id="password2" placeholder="ConfirmPassword" name="password2">
                <label for="password2">Confirm Password</label>
            </div>
            <div class="form-floating mb-5">
              <input type="date" class="form-control form-control-sm" id="birthday" name="birthday" placeholder="01/01/1991" min="1935-01-01" max="<?php echo date('Y-m-d'); ?>">
              <label for="birthday">Birthday</label>
            </div>


            <div class="checkbox mb-3 text-secondary">
                <label>
                    <input type="checkbox" value="tos"> I agree to the <a href="./tos.php" class="text-decoration-none text-primary">Terms of Service</a>
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
            <p class="mt-5 mb-3 text-light">Already have an account? <a href="./login.php?nav=2" class="text-decoration-none text-primary">Log in!</a></p>
        </form>
    </main>
	
	<?php
		if(isset($_POST['submit'])){
			$si_username = $_POST['username'];
			$si_email = $_POST['email'];
			$si_pw = $_POST['password'];
			$si_pw2 = $_POST['password2'];
			$si_bday = $_POST['birthday'];
			
			if (empty($si_username) OR empty($si_email) OR empty($si_pw) OR empty($si_pw2) OR empty($si_bday)){
				echo "<div class='mx-auto text-center col-md-3 alert alert-danger'>
							<strong>Please enter all empty fields</strong>
						</div>
					";
			}else{
				$sql1 = "SELECT * FROM players";
				
				$q1 = mysqli_query($con, $sql1);
				
				while ($check = mysqli_fetch_array($q1)){
					$username = $check['username'];
					$email = $check['email'];
				}
				if ($username == $si_username){//to check if username is UNIQUE
					echo "<div class='mx-auto text-center ml-5 col-md-3 alert alert-danger'>
							<strong>Username is already taken. Please create a unique username.</strong>
						</div>
					";
				}else{
					if ($email == $si_email){//to check if email is already taken
						echo "<div class='mx-auto text-center ml-5 col-md-3 alert alert-danger'>
							<strong>Account already exists. Please use an another email.</strong>
						</div>
					";
					}else{
						if($si_pw == $si_pw2){//to check if password and check passowrd is the same
							$enc_pw = md5(md5($si_pw));
							
							$sql2 = "INSERT INTO players(username, email, password, birthday)
										VALUES ('$si_username', '$si_email', '$enc_pw', '$si_bday')";
										
							$q2 = mysqli_query($con, $sql2);
							if(!$q2){
								echo "<div class='mx-auto text-center ml-5 col-md-3 alert alert-danger'>
									<strong>Error!</strong>
								</div>
							";
							}else{
								header("location:login.php");
							}
								
						}else{
							echo "<div class='mx-auto text-center ml-5 col-md-3 alert alert-danger'>
									<strong>Password does not match</strong>
								</div>
							";
						}
					}
				}
			}
		}
	?>

    <?php require "./footer.php"; ?>


</body>

</html>