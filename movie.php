<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Genres - Sutorimu</title>

        <!-- slick -->
        <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
        <!-- // Add the new slick-theme.css if you want the default styling -->
        <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
        <!-- Bootstrap CSS -->
        <link href="assets/css/bs/bootstrap.css" rel="stylesheet">
        <!-- fontawesome -->
        <link rel="stylesheet" href="assets/css/fa/all.min.css">
        <!-- style -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="assets/js/bs/bootstrap.min.js"></script>
        <!-- fontawesome -->
        <script src="assets/js/fa/all.min.js"></script>
        <!-- slick -->
        <script type="text/javascript" src="assets/slick/slick.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Sutorimu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="nav navbar-nav ml-auto justify-content-end">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="list.html">Anime List</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Movie <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="genre.html">Genre</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <form>
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </li>
              </ul>
            </div>
        </nav>

        <div class="container-fluid" style="margin-top: 2%;">
            <div class="row">
                <div class="col-sm-8 space">
                    <!-- list genre -->
                    <div class="ongoing">
                        <div class="title-ongoing">
                            <strong><h5>Movie</h5></strong>
                        </div>
                        <div class="container-genre" id="container-genre">
                            <div class="box-item recomended">
                                <a href="#">
                                    <div class="image-update">
                                        <img src="assets/img/movie/103385.jpg" alt="ongoing" class="image-ongoing">
                                        <div class="rating"><i class="fas fa-star"></i> N/A</div>
                                    </div>
                                    <div class="title-movie">Fate/Grand Order: Shinsei Entaku Ryouiki Camelot 1 - Wandering; Agateram</div>
                                </a>
                                <div class="desc-movie">
                                    Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br> <br>
                                    <?php
                                        $title = 'An adaptation of the the Sixth Singularity, The Sacred Round Table Realm Camelot Singularity of Fate/Grand Order.';
                                        $arr = explode(" ", $title);
                                        $limit = 40;
                                        $new = [];

                                        if (count($arr) > $limit) {
                                            for($i = 0; $i < $limit; $i++) {
                                                array_push($new, $arr[$i]);
                                            }
                                        }

                                        if($new) {
                                            $new = implode(" ", $new);
                                            print_r($new.'...');
                                        }
                                        else {
                                            print_r($title);
                                        }
                                    ?>                                    
                                </div>
                            </div>
                            <div class="box-item recomended">
                                <a href="#">
                                    <div class="image-update">
                                        <img src="assets/img/movie/106947.jpg" alt="ongoing" class="image-ongoing">
                                        <div class="rating"><i class="fas fa-star"></i> N/A</div>
                                    </div>
                                    <div class="title-movie">Kimetsu no Yaiba Movie: Mugen Ressha-hen</div>
                                </a>
                                <div class="desc-movie">
                                    Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br> <br>
                                    <?php
                                        $title = 'Tanjirou Kamado and his friends from the Demon Slayer Corps accompany Kyoujurou Rengoku, the Flame Hashira, to investigate a mysterious series of disappearances occurring inside a train. Little do they know that Enmu, one of the Twelve Kizuki, is also on board and has prepared a trap for them.';
                                        $arr = explode(" ", $title);
                                        $limit = 40;
                                        $new = [];

                                        if (count($arr) > $limit) {
                                            for($i = 0; $i < $limit; $i++) {
                                                array_push($new, $arr[$i]);
                                            }
                                        }

                                        if($new) {
                                            $new = implode(" ", $new);
                                            print_r($new.'...');
                                        }
                                        else {
                                            print_r($title);
                                        }
                                    ?>                                    
                                </div>
                            </div>
                            <div class="box-item recomended">
                                <a href="#">
                                    <div class="image-update">
                                        <img src="assets/img/movie/108967.jpg" alt="ongoing" class="image-ongoing">
                                        <div class="rating"><i class="fas fa-star"></i> N/A</div>
                                    </div>
                                    <div class="title-movie">Burn the Witch</div>
                                </a>
                                <div class="desc-movie">
                                    Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br> <br>
                                    <?php
                                        $title = 'Historically, 72% of all the deaths in London are related to dragons, fantastical beings invisible to the majority of the people. While unknown to most, some people have been standing up to these dragons. <br> Only inhabitants of Reverse London who live in the hidden "reverse" side of London can see the dragons. Even then, only a selected few become qualified enough as witches or wizards to make direct contact with them. <br> The protagonists of the story are witch duo Noel Niihashi and Ninny Spangcole. They are protection agents for Wing Bind (WB), an organization for dragon conservation and management. Their mission is to protect and manage the dragons within London on behalf of the people.';
                                        $arr = explode(" ", $title);
                                        $limit = 40;
                                        $new = [];

                                        if (count($arr) > $limit) {
                                            for($i = 0; $i < $limit; $i++) {
                                                array_push($new, $arr[$i]);
                                            }
                                        }

                                        if($new) {
                                            $new = implode(" ", $new);
                                            print_r($new.'...');
                                        }
                                        else {
                                            print_r($title);
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="box-item recomended">
                                <a href="#">
                                    <div class="image-update">
                                        <img src="assets/img/movie/86916.jpg" alt="ongoing" class="image-ongoing">
                                        <div class="rating"><i class="fas fa-star"></i> N/A</div>
                                    </div>
                                    <div class="title-movie">Kud Wafter</div>
                                </a>
                                <div class="desc-movie">
                                    Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br> <br>
                                    <?php
                                        $title = "This anime adapts Key's visual novel Kud Wafter, which follows the romantic relationship between Riki Naoe and Kudryavka Noumi from the game Little Busters!";
                                        $arr = explode(" ", $title);
                                        $limit = 40;
                                        $new = [];

                                        if (count($arr) > $limit) {
                                            for($i = 0; $i < $limit; $i++) {
                                                array_push($new, $arr[$i]);
                                            }
                                        }

                                        if($new) {
                                            $new = implode(" ", $new);
                                            print_r($new.'...');
                                        }
                                        else {
                                            print_r($title);
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <ul class="pagination pagination-sm justify-content-center" style="clear: both;">
                            <li class="page-item"><a class="page-link paging page-active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link paging" href="#">2</a></li>
                        </ul>
                    </div>
                    <!-- end list genre -->
                </div>

                <div class="col-sm-4 space">
                    <!-- recomended -->
                    <div class="ongoing">
                        <div class="title-ongoing">
                            <strong><h6>Recomended</h6></strong>
                        </div>
                        <div class="box-item recomended">
                            <a href="#">
                                <div class="image-update">
                                    <img src="assets/img/movie/108892.jpg" alt="ongoing" class="image-ongoing">
                                    <div class="rating"><i class="fas fa-star"></i> N/A</div>
                                </div>
                                <div class="title-update">Josee to Tora to Sakana-tachi</div>
                            </a>
                            <div class="desc-update">
                                Genre : Action, Sci-Fi, Supernatural, Magic, Romance, School <br>
                            </div>
                        </div>
                    </div>
                <!-- end recomended -->
                </div>
            </div>
        </div>
        
        <footer>
            <i class="fa fa-copyright" aria-hidden="true"></i> Copyright Sutorimu - Anime Streaming Website
        </footer>
    </body>
</html>
