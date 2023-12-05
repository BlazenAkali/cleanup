<?php require "./header.php"; ?>

<!-- Custom styles for this template -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<link href="./css/leaderboard.css" rel="stylesheet" />
<link href="./css/navbar.css" rel="stylesheet" />
</head>

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

        <form method="POST" action="./leaderboard.php">

            <?php 

            ?>
            
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://github.com/twbs.png" alt="Bootstrap" width="72" height="72">
                <h1 class="display-5 fw-bold">Leaderboards</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3" name="showLevel1">Level 1</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4" name="showLevel2">Level 2</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4" name="showLevel3">Level 3</button>
                    </div>
                </div>
            </div>

            <h2 class="pb-3 display-6 fw-bold border-bottom">Top Players</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 ">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Top 2</h2>
                            <p class="lead">Jacob</p>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>5,000</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>3d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Top 1</h2>
                            <p class="lead">Mark</p>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>6,500</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>4d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Top 3</h2>
                            <p class="lead">Larry the Bird</p>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>3,000</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>5d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for a user" aria-label="Search for a user" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="search">Search</button>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>6,500</td>
                        <td>15,653</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>5,000</td>
                        <td>12,100</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>3,000</td>
                        <td>14,000</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <?php require "./footer.php"; ?>
    </div>
</body>

</html>