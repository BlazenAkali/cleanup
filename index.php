<?php require "./header.php"; ?>

<!-- Custom styles for this template -->
<link href="./css/leaderboard.css" rel="stylesheet">
<link href="./css/navbar.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

  <?php require "./navbar.php"; ?>
  <div>
    <div class="px-3">
      <div class="container px-4 py-5 " id="custom-cards">

        <form method="POST" action="./leaderboard.php">

          <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://github.com/twbs.png" alt="Bootstrap" width="72" height="72">
            <h1 class="display-5 fw-bold">Clean it Up! Cuenca</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Clean the trash as fast as you can. Keep the Adamson University as clean as possible!</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3" name="showLevel1">Play Now</button>
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