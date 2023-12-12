<?php require "./header.php";
	include "./dbcon.php";
 ?>

<!-- Custom styles for this template -->
<link href="./css/leaderboard.css" rel="stylesheet">
<link href="./css/navbar.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>

<?php
	session_start();
	
	if($_SESSION['logged']==true){
		
	$id = $_SESSION['user_id'];
	
	$sql = "SELECT * FROM players WHERE user_id=$id";
	
	$q = mysqli_query($con, $sql);
	
	while($getPlayer = mysqli_fetch_array($q)){
		$username = $getPlayer['username'];
	}

?>
<body class="d-flex h-100 text-center text-white bg-dark">

  <?php require "./navbar.php"; ?>
  <div>
    <div class="px-3">
      <div class="container px-4 py-5 " id="custom-cards">

        <form method="POST" action="./leaderboard.php">

          <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="css/405850941_862067078999234_7753273189289244724_n.png" width="150" height="150">
            <h1 class="display-5 fw-bold">Welcome! <?php echo "$username";?></h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Clean the trash as fast as you can</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3" name="showLevel1">Play Now</button>
				<a href="logout.php" type="button" class="btn btn-danger btn-lg px-4 gap-3">Log Out</a>
              </div>
            </div>
          </div>
      </div>
      <?php include "./help.php"; ?>
    </div>
    <?php require "./footer.php"; ?>
  </div>

</body>
</html>
<?php
	}else{
		header("location:login.php?nav=2");
	}
?>