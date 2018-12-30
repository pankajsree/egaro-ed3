<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Egaro Photo Festival</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='shortcut icon' type='image/png' href='images/icons/fav.png' />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <script src='https://code.jquery.com/jquery-3.3.1.min.js' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel='stylesheet' type='text/css' href='css/style.css' />
    </head>
    <body>
        <main>
            <nav id="header" class="navbar">
                <a class="navbar-brand" href="index.php"><img src="images/icons/favicon.png" alt="Logo" /></a>

                <div id="hamburger-container">
                    <div class="hamburger" id="one"></div>
                    <div class="hamburger" id="two"></div>
                    <div class="hamburger" id="three"></div>
                </div>

                <ul id="nav-menu" class="nav justify-content-center">
                    <li class="nav-item"><a href="#my-carousel" class="nav-link">Home<div class="read-more-hover-navbar"></div></a></li>
                    <li class="nav-item menu-drop">
                        <a href="#about" class="nav-link">About us <i class="fas fa-angle-down"></i></a>
                        <ul  class="drop1">
                            <li>
                                <a href="#fest-dir" class="nav-link">
                                    <div class="drop-container-individual">Our Team
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#about-agartala" class="nav-link">
                                    <div class="drop-container-individual">Visitor's&nbsp;Guide
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="assets/press_media.html" class="nav-link">
                                    <div class="drop-container-individual">Press&nbsp;&&nbsp;Media<div class="navbar-underline"></div></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-drop">
                        <div class="nav-link cursor-default">Archive <i class="fas fa-angle-down"></i></div>
                        <ul class="drop1">
                            <li>
                                <a href="assets/archive_photos.php" class="nav-link">
                                    <div class="drop-container-individual">Photos
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="assets/archive_videos.php" class="nav-link">
                                    <div class="drop-container-individual">Videos
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-drop">
                        <div class="nav-link cursor-default">Editions <i class="fas fa-angle-down"></i></div>
                        <ul class="drop1">
                            <li>
                                <a href="assets/editions.php?edition=18_19" class="nav-link">
                                    <div class="drop-container-individual">2018-19
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="assets/editions.php?edition=17_18" class="nav-link">
                                    <div class="drop-container-individual">2017-18
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="assets/editions.php?edition=16_17" class="nav-link">
                                    <div class="drop-container-individual">2016-17
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-drop">
                        <div class="nav-link cursor-default">Get&nbsp;involved <i class="fas fa-angle-down"></i></div>
                        <ul class="drop1">
                            <li>
                                <a href="assets/volunteer_register.php" class="nav-link">
                                    <div class="drop-container-individual">Volunteer Registration
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#contacts" class="nav-link">
                                    <div class="drop-container-individual">Support us
                                        <div class="navbar-underline"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div id="menu-expand">
                <div class="menu-expand-container">
                    <ul id="small-menu-ul">
                        <li class="nav-item"><a href="#my-carousel" class="nav-link final-tab">Home</a></li>
                        <li class="nav-item">
                            <div class="nav-link mobile-menu-drop">About us<i class="float-right fas fa-angle-down"></i></div>
                            <ul  id="about-mobile-drop1" class="mobile-drop1">
                                <li>
                                    <a href="#fest-dir" class="nav-link final-tab">
                                        <div class="drop-container-individual">Our Team</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#about-agartala" class="nav-link final-tab">
                                        <div class="drop-container-individual">Visitor's&nbsp;Guide</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/press_media.html" class="nav-link final-tab">
                                        <div class="drop-container-individual">Press&nbsp;&&nbsp;Media</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link mobile-menu-drop">Archive<i class="float-right fas fa-angle-down"></i></div>
                            <ul id="archives-mobile-drop1" class="mobile-drop1">
                                <li>
                                    <a href="assets/archive_photos.php" class="nav-link">
                                        <div class="drop-container-individual">Photos</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/archive_videos.php" class="nav-link">
                                        <div class="drop-container-individual">Videos</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link mobile-menu-drop">Editions<i class="float-right fas fa-angle-down"></i></div>
                            <ul id="editions-mobile-drop1" class="mobile-drop1">
                                <li>
                                    <a href="assets/editions.php?edition=18_19" class="nav-link final-tab">
                                        <div class="drop-container-individual">2018-19</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/editions.php?edition=17_18" class="nav-link final-tab">
                                        <div class="drop-container-individual">2017-18</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/editions.php?edition=16_17" class="nav-link final-tab">
                                        <div class="drop-container-individual">2016-17</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link mobile-menu-drop">Get&nbsp;involved<i class="float-right fas fa-angle-down"></i></div>
                            <ul id="contact-mobile-drop1" class="mobile-drop1">
                                <li>
                                    <a href="assets/volunteer_register.php" class="nav-link final-tab">
                                        <div class="drop-container-individual">Volunteer Registration</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#contacts" class="nav-link final-tab">
                                        <div class="drop-container-individual">Support us</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    <div class="social">
                        <a href="https://www.facebook.com/BOINARI2016/" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/egarophotofestival/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:info@egarophotofestival.com" target="_blank"><i class="far fa-envelope"></i></a>
                    </div>
                </div>
            </div>


            <div id="toggle-soc-bar"><i class="fas fa-angle-left"></i></div>
            <div id="cross">
                <i class="far fa-times-circle"></i>
            </div>
            <div id="soc-bar">
                <a href="https://www.facebook.com/BOINARI2016/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/egarophotofestival/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="mailto:info@egarophotofestival.com" target="_blank"><i class="far fa-envelope"></i></a>
            </div>

            <a href="#home"><div id="scroll-up"><span id="scroll-up-content"><i class="fas fa-angle-up"></i></span></div></a>

            <div id="home" class="container-fluid customed-fluid">
                <div id="my-carousel" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#my-carousel" data-slide-to="1"></li>
                        <li data-target="#my-carousel" data-slide-to="2"></li>
                        <li data-target="#my-carousel" data-slide-to="3"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/carousel/2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/carousel/3.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/carousel/4.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/carousel/5.jpg" alt="Fourth slide">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <section id="about">
                <section id="about-egaro" class="my-container-fluid">
                    <h2 class="head-box left-align">Egaro Photo Festival</h2>
                    <p>Egaro Photo Festival incepted with the idea of showcasing photographs that challenges the widespread notion of what is a ‘good photograph’. We also aim to change the way one looks at exhibition and the way photographs can be displayed, apart from gallery space.</p>
                    <p>Every year, we shall exhibit works of eleven photographers of different genres, who are producing important and relevant photographs in the present environmental, political, cultural, and socio-economic context; hence the name Egaro ( the Bengali word for ‘Eleven’).</p>
                    <p>The festival began as ‘Egaro Chobi Utsav’ in 2016, where the works of eleven photographers of Tripura were showcased in the front lawn of Rabindra Satabarshiki Bhavan; our objective was to spread awareness about the various contemporary photographic styles and change the idea of ‘exhibition’, in Tripura. In 2017, the venue was shifted to Nazrul Kalakshetra, owing to its area, providing room for exploring intriguing and innovative exhibiting possibilities. That’s when we came up with the idea of going beyond the state boundary and showcasing works of artists from all over India. Presently, Egaro Photo Festival also aims at projecting Tripura and the great treasures of the state in terms of Art, History, Nature and Culture, along with that of other regions of India and the world.</p>
                </section>
                <section id="fest-dir" class="container">
                    <h2 class="head-box">Our Team</h2>
                    <div class="row fest-dir-content">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 dir-fest-img">
                            <div class="head-box">Festival Director</div>
                            <div id="dir-imp">
                                <img src="images/team/Arkadripta Chakraborty.jpg" alt="Fetival Director" />
                                <div class="mem-social">
                                    <a href="https://www.facebook.com/arkadripta.chakraborty/" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/arkadripta1/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="mailto:arkadriptac@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="dir-name">Arkadripta Chakraborty</div>
                            <div class="dir-desc">Festival Director</div>
                            <div class="mobile-mem-social center">
                                <a href="https://www.facebook.com/arkadripta.chakraborty/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/arkadripta1/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:arkadriptac@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-xs-12 dir-fest-words">
                            <div class="head-box">Festival Director</div>
                            <div class="words">Arkadripta Chakraborty is a 32-year old independent photographer who currently divides his time between Guwahati,Assam and Agartala, Tripura. Having lived in Pune and Mumbai, he returned to the North-East in 2012.  Some of his earlier works include documentation of the life of Civil Death victims in Uttar Pradesh and coverage of the ethnic conflict in various parts of North East India with particular focus on western Assam, popularly known as the Chicken’s neck. In 2014, he was selected for the India Habitat Centre Fellowship for photography for his ongoing work ‘Crematoria’ and his work has been featured in various national and international publications.</div>
                        </div>
                    </div>
                </section>
                <section id="team-det" class="my-container-fluid">
                    <h2 class="head-box">Members</h2>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Abhijit Deb.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/Oviedev/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/abhijit.waits/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:abhijit.deb207@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Abhijit Deb</div>
                            <div class="dir-desc">Curation Manager</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/Oviedev/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/abhijit.waits/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:abhijit.deb207@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Animikh Chakraborty.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/animikh.chakraborty01/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/animikh.chakraborty/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:animikchakraborty10@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Animikh Chakraborty</div>
                            <div class="dir-desc">Social Media Manager</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/animikh.chakraborty01/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/animikh.chakraborty/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:animikchakraborty10@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Anurab Dhar.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/anurabdhar1/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/anurabdhar/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:anurab08@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Anurab Dhar</div>
                            <div class="dir-desc">Production Manager</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/anurabdhar1/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/anurabdhar/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:anurab08@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Deep Roy.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/unleashed.04/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/deep.roy04/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:roydeep404@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Deep Roy</div>
                            <div class="dir-desc">Asset & Sponsorship Manager</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/unleashed.04/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/deep.roy04/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:roydeep404@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Diptanil Das.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/diptanil.das.9/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/dip_tan/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:diptanildas11@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Diptanil Das</div>
                            <div class="dir-desc">PR & Marketing</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/diptanil.das.9/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/dip_tan/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:diptanildas11@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Neal Bhaumik.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/arghyaneel.bhaumik" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/nealbhaumik/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:nilbhaumik.chobi@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Neal Bhaumik</div>
                            <div class="dir-desc">Curation Manager</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/arghyaneel.bhaumik" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/nealbhaumik/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:nilbhaumik.chobi@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Partha Pratim Ganguly.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/GangulyParthaPratim" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/gangulypp/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Partha Pratim Ganguly</div>
                            <div class="dir-desc">Boinari Member</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/GangulyParthaPratim" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/gangulypp/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Saumyarup Nath.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/saumyarup.nath/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/iframedit/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:saumyarupcb@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Saumyarup Nath</div>
                            <div class="dir-desc">Art & Design</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/saumyarup.nath/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/iframedit/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:saumyarupcb@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Sayandeep Roy.jpg" alt="Festival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/photographsayan1/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/photographsayan/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:roysayandeep1@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Sayandeep Roy</div>
                            <div class="dir-desc">Content & Artist Manager</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/photographsayan1/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/photographsayan/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:roysayandeep1@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="members">
                        <div class="mem-det">
                            <img src="images/team/Subhrangshu B Chowdhury.jpg" alt="Fetival Director" />
                            <div class="mem-social">
                                <a href="https://www.facebook.com/shubhrangshu.choudhury/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/_diffrentvision/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:shubhrangshu_761@rediffmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="mem-det-container">
                            <div class="dir-name">Subhrangshu B Chowdhury</div>
                            <div class="dir-desc">Production Manager</div>
                            <div class="mobile-mem-social">
                                <a href="https://www.facebook.com/shubhrangshu.choudhury/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/_diffrentvision/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:shubhrangshu_761@rediffmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                </section>
                <section id="about-agartala" class="my-container-fluid">
                    <h2 class="head-box">About Agartala</h2>
                    <p>A city still in its adolescence, Agartala can be a plethora of emotions. From love to calmness, from safety to freshness and tranquillity, it’s a melting pot of various cultural and socio-political identities.</p>

                    <p>Lying on the banks of the Haora River, 2km from the Bangladesh border, Agartala is considered as one of the fastest  cities of India. Blessed with rich heritage and culture, it’s a ‘place in transit’, it’s a place that makes one feel close to the bounty of nature, with a tinge of  history in it.</p>

                    <p>Agartala is well connected to other parts of India by air, rail and road transport. Currently a domestic airport, Agartala airport is set to become an international airport soon, thus facilitating international travel. Agartala is also accessible by road from West Bengal, via Bangladesh.</p>

                    <p>This place has been a witness to the immensely talented Sachin Dev Burman and now boasts of internationally acclaimed gymnast, Deepa karmakar as it's golden girl.</p>
                </section>
                <section id="boinari" class="my-container-fluid">
                    <h2 class="head-box">Boinari</h2>
                    <p>Boinari(meaning ‘friend’ in Kokborok) is a group of freelance artists working in their own unique fields, but sharing a collective interest and love for visual media.</p>
                    <p>We constantly try to push the boundaries of art while spreading awareness about the contemporary photography world.</p>
                    <p>Since its initiation, Boinari has been involved in various events and platforms, promoting Art and Visual media, thus enhancing creativity and talent of the masses along with their participation.</p>
                    <p>
                        Egaro Photo Festival is an initiative of Boinari, which began its strides with the organisation itself, in 2016.
                        <br />
                        Boinari is now a registered organisation under the Directorate of Information & Cultural Affairs, Government of Tripura.
                    </p>
                </section>
            </section>

            <section id="contacts" class="container">
                <div class="contact-us">
                    <div class="contact-left">
                        <div class="contact-head">Support&nbsp;Us</div>
                        <form class="contact-form" onsubmit="send_mail()" action="index.php" method="post">
                            <label>Name<sup>*</sup></label>
                            <input type="text" name="customer_name" required />
                            <br />
                            <label>Email ID<sup>*</sup></label>
                            <input type="email" name="customer_email" required />
                            <br />
                            <label>Your Message<sup>*</sup></label>
                            <textarea name="customer_msg" rows="5" required placeholder="Your Messsage ..."></textarea>
                            <br />
                            <input type="submit" name="submit" value="Send Message" />
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <footer class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-caption">About us</div>
                    <p>Egaro Photo Festival incepted with the idea of showcasing photographs that challenges the widespread notion of what is a ‘good photograph’. We also aim to change the way one looks at exhibition and the way photographs can be displayed, apart from gallery space.</p>
                    <p>Every year, we shall exhibit works of eleven&nbsp;....</p>
                    <a class="no-text-decoration" href="#about">
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
                    <div class="row"><div class="col-1"><i class="fas fa-envelope"></i></div><div class="col-11"><a href="mailto:info@egarophotofestival.com" target="_blank">info@egarophotofestival.com</a></div></div>
                    <div class="row"><div class="col-1"><i class="fab fa-facebook"></i></div><div class="col-11"><a href="https://www.facebook.com/BOINARI2016/" target="_blank">BOINARI2016</a></div></div>
                    <div class="row"><div class="col-1"><i class="fab fa-instagram"></i></div><div class="col-11"><a href="https://www.instagram.com/egarophotofestival/" target="_blank">egarophotofestival</a></div></div>
                    <div class="row"><div class="col-1"><i class="fab fa-youtube"></i></div><div class="col-11"><a href="https://www.youtube.com/channel/UCrsVq6exAMcI7CKBF6PQvLg" target="_blank">Egaro Chobi Utsav</a></div></div>
                </div>
                <div class="sitemap col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-caption">Sitemap</div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="#my-carousel">Home</a></span></i>
                    </div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="#about">About&nbsp;us</a></span></i>
                    </div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="assets/archive_photos.php">Photos</a></span></i>
                    </div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="assets/archive_videos.php">Videos</a></span></i>
                    </div>
                    <div class="row">
                        <i class="fas fa-angle-right"><span class="content">&nbsp;&nbsp;<a href="#contacts">Contact</a></span></i>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/main.js"></script>
    </body>
</html>
