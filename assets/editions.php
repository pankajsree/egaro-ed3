<?php
    $edition = $_GET['edition'];
    $count = 10;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Egaro Photo Festival</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='shortcut icon' type='image/png' href='../images/icons/favicon.png' />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <script src='https://code.jquery.com/jquery-3.3.1.min.js' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint|Kaushan+Script|Nanum+Brush+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Lobster+Two|Poiret+One|Satisfy" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel='stylesheet' type='text/css' href='../css/style.css' />
        <link rel='stylesheet' type='text/css' href='../css/editions.css' />
    </head>
    <body>
        <nav id="header" class="navbar">
            <a class="navbar-brand" href="../index.html"><img src="../images/icons/favicon.png" alt="Logo" /></a>
            <ul id="nav-menu" class="nav justify-content-center">
                <li class="nav-item"><a href="../index.html#my-carousel" class="nav-link">Home<div class="read-more-hover-navbar"></div></a></li>
                <li class="nav-item menu-drop">
                    <a href="../index.html#about" class="nav-link">About us <i class="fas fa-angle-down"></i></a>
                    <ul  class="drop1">
                        <a href="../index.html#fest-dir" class="nav-link">
                            <li>
                                <div class="drop-container-individual">Our Team
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
                        <a href="../index.html#about-agartala" class="nav-link">
                            <li>
                                <div class="drop-container-individual">Visitor's&nbsp;Guide
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
                        <a href="#" class="nav-link">
                            <li>
                                <div class="drop-container-individual">Press&nbsp;&&nbsp;Media<div class="navbar-underline"></div></div>
                            </li>
                        </a>
                    </ul>
                </li>
                <li class="nav-item menu-drop">
                    <div class="nav-link cursor-default">Archive <i class="fas fa-angle-down"></i></div>
                    <ul class="drop1">
                        <li class="nav-item menu-drop-right">
                            <div class="nav-link cursor-default">
                                <div class="drop-container-individual">Photos<div class="navbar-underline"></div></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="archive_photos.php?edition=18_19" class="nav-link">
                                        <div class="drop-container-individual">2018-19<div class="navbar-underline"></div></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="archive_photos.php?edition=17_18" class="nav-link">
                                        <div class="drop-container-individual">2017-18<div class="navbar-underline"></div></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="archive_photos.php?edition=16_17" class="nav-link">
                                        <div class="drop-container-individual">2016-17<div class="navbar-underline"></div></div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item menu-drop-right">
                            <div class="nav-link cursor-default">
                                <div class="drop-container-individual">Videos<div class="navbar-underline"></div></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="archive_videos.php?edition=18_19" class="nav-link">
                                        <div class="drop-container-individual">2018-19<div class="navbar-underline"></div></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="archive_videos.php?edition=17_18" class="nav-link">
                                        <div class="drop-container-individual">2017-18<div class="navbar-underline"></div></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="archive_videos.php?edition=16_17" class="nav-link">
                                        <div class="drop-container-individual">2016-17<div class="navbar-underline"></div></div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-drop">
                    <div class="nav-link cursor-default">Editions <i class="fas fa-angle-down"></i></div>
                    <ul class="drop1">
                        <a href="editions.php?edition=18_19" class="nav-link">
                            <li>
                                <div class="drop-container-individual">2018-19
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
                        <a href="editions.php?edition=17_18" class="nav-link">
                            <li>
                                <div class="drop-container-individual">2017-18
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
                        <a href="editions.php?edition=16_17" class="nav-link">
                            <li>
                                <div class="drop-container-individual">2016-17
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
                    </ul>
                </li>
                <li class="nav-item menu-drop">
                    <div class="nav-link cursor-default">Get&nbsp;involved <i class="fas fa-angle-down"></i></div>
                    <ul class="drop1">
                        <a href="#" class="nav-link">
                            <li>
                                <div class="drop-container-individual">Volunteer Registration
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
                        <a href="../index.html#contacts" class="nav-link">
                            <li>
                                <div class="drop-container-individual">Support us
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="toggle-soc-bar"><i class="fas fa-angle-left"></i></div>
        <div id="cross">
            <i class="far fa-times-circle"></i>
        </div>
        <div id="soc-bar">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="far fa-envelope"></i></a>
        </div>

        <a href="#home"><div id="scroll-up"><span id="scroll-up-content">&#11205;</span></div></a>



        <div class="container editions-top">

        </div>


        <div class="container edition-content">
            <div class="edition-heading">Exhibiting Artists</div>
            <?php
                if($edition == "16_17") {
                    for($i=1; $i<$count; $i++) {
                        if($i % 2 == 0) {
                            echo "
                                <div class='row even'>
                                    <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                        <img class='mar-top-bottom img-fluid' src='../images/editions/2016-17/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                        <div class='row thumb-container'>
                                    ";
                                    for($k = 2; $k <8; $k++) {
                                        echo "
                                        <div class='thumb'>
                                            <a class='modal-anchor' href='../images/editions/2016-17/1/" . $k . ".jpg'><img class='img-res' src='../images/editions/2016-17/1/" . $k . ".jpg' alt='images'></a>
                                        </div>
                                            ";
                                    }
                                    echo "
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                        else {
                            echo "
                                <div class='row odd'>
                                    <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                        <img class='mar-top-bottom img-fluid' src='../images/editions/2016-17/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <div class='row thumb-container'>
                                ";
                                for($k = 2; $k <8; $k++) {
                                    echo "
                                        <div class='thumb'>
                                            <a class='modal-anchor' href='../images/editions/2016-17/1/" . $k . ".jpg'><img class='img-res' src='../images/editions/2016-17/1/" . $k . ".jpg' alt='images'></a>
                                        </div>
                                        ";
                                }
                                echo "
                                    </div>
                                    </div>
                                </div>
                            ";
                        }
                    }
                }
                else if($edition == "17_18") {
                    for($i=1; $i<$count; $i++) {
                        if($i % 2 == 0) {
                            echo "
                                <div class='row even'>
                                    <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                        <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <div class='row'>
                                ";
                                for($k = 2; $k <5; $k++) {
                                    echo "
                                        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                            <img class='img-res' src='../images/editions/2016-17/1/" . $k . ".jpg' alt='images'>
                                        </div>
                                        ";
                                }
                                echo "
                                    </div>
                                    </div>
                                </div>
                            ";
                        }
                        else {
                            echo "
                                <div class='row odd'>
                                    <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                        <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <div class='row'>
                                ";
                                for($k = 2; $k <5; $k++) {
                                    echo "
                                        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                            <img class='img-res' src='../images/editions/2016-17/1/" . $k . ".jpg' alt='images'>
                                        </div>
                                        ";
                                }
                                echo "
                                    </div>
                                    </div>
                                </div>
                            ";
                        }
                    }
                }
                else if($edition == "18_19") {
                    for($i=1; $i<$count; $i++) {
                        if($i % 2 == 0) {
                            echo "
                                <div class='row even'>
                                    <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                        <img class='mar-top-bottom img-fluid' src='../images/editions/2018-19/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <div class='row'>
                                ";
                                for($k = 2; $k <5; $k++) {
                                    echo "
                                        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                            <img class='img-res' src='../images/editions/2016-17/1/" . $k . ".jpg' alt='images'>
                                        </div>
                                        ";
                                }
                                echo "
                                    </div>
                                    </div>
                                </div>
                            ";
                        }
                        else {
                            echo "
                                <div class='row odd'>
                                    <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                        <img class='mar-top-bottom img-fluid' src='../images/editions/2018-19/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, suscipit velit, atque, reiciendis, maxime error ipsum hic eligendi voluptate quis possimus voluptas nesciunt ipsa reprehenderit ex repellat. Ipsa, qui, quibusdam! Beatae vel qui itaque officiis harum fugit quibusdam dicta adipisci tempore! Atque ad vitae perferendis amet quibusdam sint consequuntur, ea.</p>
                                    <div class='row'>
                                ";
                                for($k = 2; $k <5; $k++) {
                                    echo "
                                        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                            <img class='img-res' src='../images/editions/2016-17/1/" . $k . ".jpg' alt='images'>
                                        </div>
                                        ";
                                }
                                echo "
                                    </div>
                                    </div>
                                </div>
                            ";
                        }
                    }
                }
                else {
                    echo "NOT Available !!!";
                }
            ?>
        </div>

        <footer class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="footer-caption">About us</div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ea velit quis, amet quod! Cum voluptates corporis nesciunt, magni laudantium quibusdam harum ipsa, temporibus vitae beatae. Rem dicta, asperiores maiores.</div>
                <div class="col-5">
                    <div class="footer-caption">Contact us</div>
                    <div class="row"><div class="col-1"><i class="fas fa-home"></i></div><div class="col-11">Victor Enterprise, Old RMS Chowmuhani, Agartala, West Tripura, India (799001)</div></div>
                    <div class="row"><div class="col-1"><i class="fab fa-facebook"></i></div><div class="col-11">prandeepgroup</div></div>
                    <div class="row"><div class="col-1"><i class="fas fa-phone"></i></div><div class="col-11">+91-381-2383512 | +91-9774593537 | +91-9774190450</div></div>
                    <div class="row"><div class="col-1"><i class="fas fa-envelope"></i></div><div class="col-11">help@egaro.com</div></div>
                    <div class="row"><div class="col-1"><i class="fab fa-twitter"></i></div><div class="col-11">egarophoto</div></div>
                    <div class="row"><div class="col-1"><i class="fas fa-globe"></i></div><div class="col-11">https://www.egarophotofestival.com</div></div>
                </div>
                <div class="col-3">
                    <div class="footer-caption">Sitemap</div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="col-11">Home</div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="col-11">About us</div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="col-11">Archives</div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="col-11">Editions</div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="col-11">Contact Us</div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="../js/editions.js"></script>
    </body>
</html>
