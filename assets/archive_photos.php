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
        <link rel="stylesheet" href="../css/lightbox.min.css" />
        <link rel='stylesheet' type='text/css' href='../css/style.css' />
        <link rel='stylesheet' type='text/css' href='../css/archives.css' />
    </head>
    <body>
        <nav id="header" class="navbar">
            <a class="navbar-brand" href="../index.html"><img src="../images/icons/favicon.png" alt="Logo" /></a>

            <div id="hamburger-container">
                <div class="hamburger" id="one"></div>
                <div class="hamburger" id="two"></div>
                <div class="hamburger" id="three"></div>
            </div>

            <ul id="nav-menu" class="nav justify-content-center">
                <li class="nav-item"><a href="../index.html" class="nav-link">Home<div class="read-more-hover-navbar"></div></a></li>
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
                        <a href="press_media.html" class="nav-link">
                            <li>
                                <div class="drop-container-individual">Press&nbsp;&&nbsp;Media<div class="navbar-underline"></div></div>
                            </li>
                        </a>
                    </ul>
                </li>
                <li class="nav-item menu-drop">
                    <div class="nav-link cursor-default">Archive <i class="fas fa-angle-down"></i></div>
                    <ul class="drop1">
                        <a href="archive_photos.php" class="nav-link">
                            <li>
                                <div class="drop-container-individual">Photos
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
                        <a href="archive_videos.php" class="nav-link">
                            <li>
                                <div class="drop-container-individual">Videos
                                    <div class="navbar-underline"></div>
                                </div>
                            </li>
                        </a>
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
                        <a href="volunteer_register.php" class="nav-link">
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

        <div id="menu-expand">
            <div class="menu-expand-container">
                <ul id="small-menu-ul">
                    <li class="nav-item"><a href="../index.html" class="nav-link final-tab">Home</a></li>
                    <li class="nav-item">
                        <div class="nav-link mobile-menu-drop">About us<i class="float-right fas fa-angle-down"></i></div>
                        <ul  id="about-mobile-drop1" class="mobile-drop1">
                            <a href="../index.html#fest-dir" class="nav-link final-tab">
                                <li>
                                    <div class="drop-container-individual">Our Team</div>
                                </li>
                            </a>
                            <a href="../index.html#about-agartala" class="nav-link final-tab">
                                <li>
                                    <div class="drop-container-individual">Visitor's&nbsp;Guide</div>
                                </li>
                            </a>
                            <a href="press_media.html" class="nav-link final-tab">
                                <li>
                                    <div class="drop-container-individual">Press&nbsp;&&nbsp;Media</div>
                                </li>
                            </a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link mobile-menu-drop">Archive<i class="float-right fas fa-angle-down"></i></div>
                        <ul id="archives-mobile-drop1" class="mobile-drop1">
                            <a href="archive_photos.php" class="nav-link">
                                <li>
                                    <div class="drop-container-individual">Photos</div>
                                </li>
                            </a>
                            <a href="archive_videos.php" class="nav-link">
                                <li>
                                    <div class="drop-container-individual">Videos</div>
                                </li>
                            </a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link mobile-menu-drop">Editions<i class="float-right fas fa-angle-down"></i></div>
                        <ul id="editions-mobile-drop1" class="mobile-drop1">
                            <a href="editions.php?edition=18_19" class="nav-link final-tab">
                                <li>
                                    <div class="drop-container-individual">2018-19</div>
                                </li>
                            </a>
                            <a href="editions.php?edition=17_18" class="nav-link final-tab">
                                <li>
                                    <div class="drop-container-individual">2017-18</div>
                                </li>
                            </a>
                            <a href="editions.php?edition=16_17" class="nav-link final-tab">
                                <li>
                                    <div class="drop-container-individual">2016-17</div>
                                </li>
                            </a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link mobile-menu-drop">Get&nbsp;involved<i class="float-right fas fa-angle-down"></i></div>
                        <ul id="contact-mobile-drop1" class="mobile-drop1">
                            <a href="volunteer_register.php" class="nav-link final-tab">
                                <li>
                                    <div class="drop-container-individual">Volunteer Registration</div>
                                </li>
                            </a>
                            <a href="../index.html#contacts" class="nav-link final-tab">
                                <li>
                                    <div class="drop-container-individual">Support us</div>
                                </li>
                            </a>
                        </ul>
                    </li>
                </ul>


                <div class="social">
                    <a href="https://www.facebook.com/BOINARI2016/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/egarophotofestival/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="far fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <div id="toggle-soc-bar"><i class="fas fa-angle-left"></i></div>
        <div id="cross">
            <i class="far fa-times-circle"></i>
        </div>
        <div id="soc-bar">
            <a href="https://www.facebook.com/BOINARI2016/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/egarophotofestival/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="far fa-envelope"></i></a>
        </div>

        <a href="#home"><div id="scroll-up"><span id="scroll-up-content">&#11205;</span></div></a>



        <div class="container archives-top">

        </div>


        <div class="container gallery">
            <?php
                echo "
                    <div class='row'>
                        <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                            <a href='../images/archives/photos/1.jpg' data-lightbox='gallery'><img id='img-first' class='mar-top-bottom img-fluid' src='../images/archives/photos/small/1.jpg' alt='image' /></a>
                        </div>
                        <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                            <a href='../images/archives/photos/2.jpg' data-lightbox='gallery'><img class='mar-top-bottom img-fluid' src='../images/archives/photos/small/2.jpg' alt='image' /></a>
                        </div>
                        <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                            <a href='../images/archives/photos/3.jpg' data-lightbox='gallery'><img class='mar-top-bottom img-fluid' src='../images/archives/photos/small/3.jpg' alt='image' /></a>
                        </div>
                    </div>
                ";
                $html = "";
                for($i=4; $i<22;) {
                    $html .= "<div class='row'>";
                    for($j=0; $j<3; $j++) {
                        $html .= "
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <a href='../images/archives/photos/" . $i . ".jpg' data-lightbox='gallery'><img class='mar-top-bottom img-fluid' src='../images/archives/photos/small/" . $i  . ".jpg' alt='image' /></a>
                            </div>
                            ";
                            $i++;
                    }
                    $html .= "</div>";
                }
                echo $html;
            ?>
        </div>

        <footer class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-caption">About us</div>
                    <p>Egaro Photo Festival incepted with the idea of showcasing photographs that challenges the widespread notion of what is a ‘good photograph’. We also aim to change the way one looks at exhibition and the way photographs can be displayed, apart from gallery space.</p>
                    <p>Every year, we shall exhibit works of eleven&nbsp;....</p>
                    <a class="no-text-decoration" href="../index.html#about">
                        <div class="read-more">
                            Read More&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>
                            <div class="underline-footer"></div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-caption">Contact us</div>
                    <div class="row"><div class="col-1"><i class="fas fa-home"></i></div><div class="col-11">Victor Enterprise, Old RMS Chowmuhani, Agartala, West Tripura, India (799001)</div></div>
                    <div class="row"><div class="col-1"><i class="fas fa-phone"></i></div><div class="col-11"><a id="call-one" href="tel:+91-381-2383512">+91-381-2383512</a> | <a id="call-two" href="tel:+91-9774593537">+91-9774593537</a> | <a id="call-three" href="tel:+91-9774190450">+91-9774190450</a></div></div>
                    <div class="row"><div class="col-1"><i class="fas fa-envelope"></i></div><div class="col-11"><a href="#">XXXXXXXXXX</a></div></div>
                    <div class="row"><div class="col-1"><i class="fab fa-facebook"></i></div><div class="col-11"><a href="https://www.facebook.com/BOINARI2016/">BOINARI2016</a></div></div>
                    <div class="row"><div class="col-1"><i class="fab fa-instagram"></i></div><div class="col-11"><a href="https://www.instagram.com/egarophotofestival/">egarophotofestival</a></div></div>
                    <div class="row"><div class="col-1"><i class="fab fa-twitter"></i></div><div class="col-11"><a href="#">XXXXXXXXXX</a></div></div>
                </div>
                <div class="sitemap col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-caption">Sitemap</div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="../index.html">Home</a></span></i>
                    </div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="../index.html#about">About&nbsp;us</a></span></i>
                    </div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="archive_photos.php">Photos</a></span></i>
                    </div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="archive_videos.php">Videos</a></span></i>
                    </div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="../index.html#contacts">Contact</a></span></i>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="../js/lightbox-plus-jquery.min.js"></script>
        <script type="text/javascript" src="../js/archives_photos.js"></script>
    </body>
</html>
