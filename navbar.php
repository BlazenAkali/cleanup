<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0 text-light">Clean Up!</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <?php 
                $_GET['nav'] = (isset($_GET['nav'])) ? $_GET['nav'] : 1;  
                $nav = $_GET['nav']; ?>
                <a class="nav-link <?php echo ($nav == 1) ? "active" : "";?>" aria-current="page" href="./index.php?nav=1">Home</a>
                <a class="nav-link <?php echo ($nav == 2 || $nav == 5) ? "active" : "";?>" href="./login.php?nav=2"><?php echo ($nav == 5) ? "Register" : "Login";?></a>
                <a class="nav-link <?php echo ($nav == 3) ? "active" : "";?>" href="./leaderboard.php?nav=3">Leaderboard</a>
                <a class="nav-link <?php echo ($nav == 4) ? "active" : "";?>" href="./help.php?nav=4">Help</a>
            </nav>
        </div>
    </header>