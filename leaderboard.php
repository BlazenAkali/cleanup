<?php require "./header.php"; 
	include "./dbcon.php";

?>

<!-- Custom styles for this template -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<link href="./css/leaderboard.css" rel="stylesheet" />
<link href="./css/navbar.css" rel="stylesheet" />
</head>

<?php
	session_start();
	
	if($_SESSION['logged']==true){
		
	$user_id = $_SESSION['user_id'];
	
	$sql = "SELECT * FROM players WHERE user_id=$user_id";
	
	$q = mysqli_query($con, $sql);
	
	while($getPlayer = mysqli_fetch_array($q)){
		$username = $getPlayer['username'];
	}
	if ($_GET['l']==1){
		$l = 1;
	}
	if ($_GET['l']==2){
		$l = 2;
	}
	if ($_GET['l']==3){
		$l = 3;
	}
	if ($_GET['l']==4){
		$l = 4;
	}
?>
<body class="d-flex h-100 text-center text-white bg-dark">

    <?php require "./navbar.php"; ?>

    <svg>
        <symbol id="geo-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
        </symbol>
        <symbol id="calendar3" viewBox="0 0 16 16">
            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </symbol>
    </svg>

    <div class="container px-4 py-5 " id="custom-cards">

        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://github.com/twbs.png" alt="Bootstrap" width="72" height="72">
                <h1 class="display-5 fw-bold">Leaderboards</h1>
                <div class="col-lg-6 mx-auto">
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="leaderboard.php?nav=3&l=1"><button type="button" class="<?php echo ($l == 1) ? "btn btn-primary btn-lg px-4 gap-3" : "btn btn-outline-secondary btn-lg px-4" ?>" name="showLevel1">Level 1</button></a>
                        
						<a href="leaderboard.php?nav=3&l=2"><button type="button" class="<?php echo ($l == 2) ? "btn btn-primary btn-lg px-4 gap-3" : "btn btn-outline-secondary btn-lg px-4" ?>" name="showLevel2">Level 2</button></a>
                        
						<a href="leaderboard.php?nav=3&l=3"><button type="button" class="<?php echo ($l == 3) ? "btn btn-primary btn-lg px-4 gap-3" : "btn btn-outline-secondary btn-lg px-4" ?>" name="showLevel3">Level 3</button></a>
						
						<a href="leaderboard.php?nav=3&l=4"><button type="button" class="<?php echo ($l == 4) ? "btn btn-primary btn-lg px-4 gap-3" : "btn btn-outline-secondary btn-lg px-4" ?>" name="showLevel4">Level 4</button></a>
                    </div>
                </div>
            </div>

            <h2 class="pb-3 display-6 fw-bold border-bottom">Top Players</h2>
			
			<?php
				if ($l == 1){ 
					$sql2 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 1
							) as t
							WHERE t.rank = 2";
				}elseif ($l == 2){ 
					$sql2 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 2
							) as t
							WHERE t.rank = 2";
				}elseif ($l == 3){ 
					$sql2 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 3
							) as t
							WHERE t.rank = 2";
				}elseif ($l == 4){ 
					$sql2 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 4
							) as t
							WHERE t.rank = 2";
				}							
				$q2 = mysqli_query($con, $sql2);
							
				if (mysqli_num_rows($q2) > 0){
					while($getScore = mysqli_fetch_array($q2)){
						$username2 = $getScore['username'];
						$score2 = $getScore['score'];
						$date2 = $getScore['date_achieved'];
					}
				}else{
					$username2 = "";
					$score2 = 0;
					$date2 = 0;
				}
            ?>
			
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 ">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Top 2</h2>
                            <p class="lead"><?php echo "$username2" ?></p>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://cdn-user-icons.flaticon.com/129258/129258051/1702309516524.svg?token=exp=1702310573~hmac=355be5620799e8286853608f689fccf3" alt="Bootstrap" width="32" height="32" class="rounded-circle">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small><?php echo "$score2"; ?></small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small><?php echo "$date2"; ?></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

			<?php
				if ($l == 1){ 
					$sql1 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 1
							) as t
							WHERE t.rank = 1";
				}elseif ($l == 2){ 
					$sql1 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 2
							) as t
							WHERE t.rank = 1";
				}elseif ($l == 3){ 
					$sql1 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 3
							) as t
							WHERE t.rank = 1";
				}elseif ($l == 4){ 
					$sql1 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 4
							) as t
							WHERE t.rank = 1";
				}							
				$q1 = mysqli_query($con, $sql1);
							
				if (mysqli_num_rows($q1) > 0){
					while($getScore = mysqli_fetch_array($q1)){
						$username1 = $getScore['username'];
						$score1 = $getScore['score'];
						$date1 = $getScore['date_achieved'];
					}
				}else{
					$username1 = "";
					$score1 = 0;
					$date1 = 0;
				}
            ?>
			
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Top 1</h2>
                            <p class="lead"><?php echo "$username1" ?></p>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://cdn-user-icons.flaticon.com/129258/129258051/1702309531572.svg?token=exp=1702310573~hmac=e7ea96984678e370eac21dfbd4f774de" alt="Bootstrap" width="32" height="32" class="rounded-circle">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small><?php echo "$score1" ?></small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small><?php echo "$date1" ?></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

			<?php
				if ($l == 1){ 
					$sql3 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 1
							) as t
							WHERE t.rank = 3";
				}elseif ($l == 2){ 
					$sql3 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 2
							) as t
							WHERE t.rank = 3";
				}elseif ($l == 3){ 
					$sql3 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 3
							) as t
							WHERE t.rank = 3";
				}elseif ($l == 4){ 
					$sql3 = "SELECT * FROM (
							SELECT username, score, date_achieved,
								DENSE_RANK() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
							NATURAL JOIN players
								WHERE level_id = 4
							) as t
							WHERE t.rank = 3";
				}							
				$q3 = mysqli_query($con, $sql3);
							
				if (mysqli_num_rows($q3) > 0){
					while($getScore = mysqli_fetch_array($q3)){
						$username3 = $getScore['username'];
						$score3 = $getScore['score'];
						$date3 = $getScore['date_achieved'];
					}
				}else{
					$username3 = "";
					$score3 = 0;
					$date3 = 0;
				}
            ?>
			
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Top 3</h2>
                            <p class="lead"><?php echo "$username3" ?></p>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://cdn-user-icons.flaticon.com/129258/129258051/1702309574581.svg?token=exp=1702310494~hmac=6e66db08cd0c91089b6a5e802284701c" alt="Bootstrap" width="32" height="32" class="rounded-circle">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small><?php echo "$score3" ?></small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small><?php echo "$date3" ?></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover bg-light">
                <thead>
                    <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Username</th>
                        <th scope="col">High Score</th>
                        <th scope="col">Total Trash Collected</th>
                    </tr>
                </thead>
				
				<tbody>
				<?php 
				if($l == 1){
					$sqlt = "SELECT * FROM 
								(
								SELECT username, score, trash_collected,
									ROW_NUMBER() OVER (ORDER BY score DESC) AS 'rank'
								FROM leaderboard
									NATURAL JOIN players
								  WHERE level_id = 1
								) as t
								LIMIT 5";
				}elseif($l == 2){
				$sqlt = "SELECT * FROM 
							(
							SELECT username, score, trash_collected,
								ROW_NUMBER() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
								NATURAL JOIN players
							  WHERE level_id = 2
							) as t
							LIMIT 5";
				}elseif($l == 3){
				$sqlt = "SELECT * FROM 
							(
							SELECT username, score, trash_collected,
								ROW_NUMBER() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
								NATURAL JOIN players
							  WHERE level_id = 3
							) as t
							LIMIT 5";
				}elseif($l == 4){
				$sqlt = "SELECT * FROM 
							(
							SELECT username, score, trash_collected,
								ROW_NUMBER() OVER (ORDER BY score DESC) AS 'rank'
							FROM leaderboard
								NATURAL JOIN players
							  WHERE level_id = 4
							) as t
							LIMIT 5";
				}	
				$qt = mysqli_query($con, $sqlt);
				
				if (mysqli_num_rows($qt) > 0) {
					while($getData = mysqli_fetch_array($qt)){
						$rankt = $getData['rank'];
						$usernamet = $getData['username'];
						$scoret = $getData['score'];
						$trasht = $getData['trash_collected'];
						
						echo "<tr>";
							echo "<th scope='row'>$rankt</th>";
							echo "<td>$usernamet</td>";
							echo "<td>$scoret</td>";
							echo "<td>$trasht</td>";
						echo "</tr>";
					}					
				}
				?>
                </tbody>
            </table>
        </form>
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