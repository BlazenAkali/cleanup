<?php require "./header.php"; ?>
<link href="./navbar.css" rel="stylesheet">
<link href="./signin.css" rel="stylesheet">
</head>

<body class="bg-dark">

    <?php require "./navbar.php"; ?>

    <main class="form-signin text-center">
        <form>
            <img class="mb-4" src="https://github.com/twbs.png" alt="" width="72" height="72">
            <h1 class="display-6 mb-3 fw-normal text-light">Please Sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="JohnDoe">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="input" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-5">
              <input type="date" class="form-control form-control-sm" id="floatingDate" name="birthday" placeholder="01/01/1991" min="1935-01-01" max="<?php echo date('Y-m-d'); ?>">
              <label for="floatingDate">Birthday</label>
            </div>


            <div class="checkbox mb-3 text-secondary">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-light">Already have an account? <a href="./login.php?nav=2" class="text-decoration-none text-primary">Log in!</a></p>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>

    <?php require "./footer.php"; ?>


</body>

</html>