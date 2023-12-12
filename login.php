<?php require "./header.php"; 
	include "./dbcon.php";
?>

<link href="./css/navbar.css" rel="stylesheet">
<link href="./css/signin.css" rel="stylesheet">
</head>

<body class="bg-dark">

    <?php require "./navbar.php"; ?>

    <main class="form-signin text-center">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <img class="mb-4" src="https://github.com/twbs.png" alt="" width="72" height="72">
            <h1 class="display-6 mb-3 fw-normal text-light">Please Log in</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="JohnDoe" name="username" autocomplete="off">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass" >
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3 text-secondary">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Sign in</button>
            <p class="mt-5 mb-3 text-light">Don't have an account? <a href="./signin.php?nav=5" class="text-decoration-none text-primary">Sign in!</a></p>
        </form>
    </main>
	
	<?php
		if(isset($_POST['signin'])){
			$username = $_POST['username'];
			$pw = $_POST['pass'];
			$enc_pw = md5(md5($pw));
			
			if(empty($username) OR empty($pw)){
				echo "<div class='mx-auto text-center ml-5 col-md-3 alert alert-danger'>
						<strong>Username and Password is required</strong>
					</div>
				";
			}else{
				$sql = "SELECT * FROM players WHERE username='$username'";
				
				$q = mysqli_query($con, $sql);
				
				if(mysqli_num_rows($q) > 0) {
					while($getPlayer = mysqli_fetch_array($q)){
						$db_user_id = $getPlayer['user_id'];
						$db_username = $getPlayer['username'];
						$db_password = $getPlayer['password'];
					}
					
					if (($db_username == $username) AND ($db_password == $enc_pw)){
						session_start();
						
						$_SESSION['logged'] = true;
						$_SESSION['user_id'] = $db_user_id;
						
						header("location:index.php?nav=1&id=". $_SESSION['user_id']);
						
						$sql = "UPDATE current_playing
								SET user_id =" . $_SESSION['user_id'] . "
								WHERE id = 1";
								
						mysqli_query($con, $sql);
						
					}else{
						echo "<div class='mx-auto text-center col-md-3 alert alert-danger'>
							<strong>Username and Password does not match</strong>
						</div>
					";
					}
				}else{
					echo "<div class='mx-auto text-center col-md-3 alert alert-danger'>
							<strong>Account Does not exist</strong><br/>
							Create an account <a href='signin.php'>here!</a>
						</div>
					";
				}
			}
		}
	
	?>
	
	
	<?php include "./footer.php"; ?>
</body>

</html>
