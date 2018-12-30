<?php
    $edition = $_GET['edition'];
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
        <link rel="stylesheet" href="../css/lightbox.min.css" />
        <link rel='stylesheet' type='text/css' href='../css/style.css' />
        <link rel='stylesheet' type='text/css' href='../css/editions.css' />
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



        <div class="container editions-top">

        </div>


        <div class="container edition-content">

            <?php
                $html = "
                <div class='edition-heading'>Exhibiting Artists</div>
                ";
                if($edition == "16_17") {
                    echo "
                        <div class='coming-soon'>Need Contents</div>
                    ";
                }



                else if($edition == "17_18") {
                    $html .= "
                        <div class='row odd'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/1/Adil_Hasan.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Adil&nbsp;Hasan</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <p><big>The TV</big></p>
                                <blockquote>
                                    <p>\"What is the role of the TV in our lives? Early contemplation oscillated between a gift from the gods, and a Trojan horse; entering our houses under the pretext of harmless entertainment as a garb over the undermining of the fabric of our societies.</p>
                                    <p>But irrespective, even with the Orwellian Newspeak similarity, or dissimilarity, we are now from a generation which has hardly known life without it. Looking back at all the years as an audience to this contraption, I merely wish to express my opinion on the collective information emanating from the TV, and document the spaces that remind me of it.\"</p>
                                <blockquote>
                                <div class='blockquote-footer'>Adil Hasan<br /><a href='www.adilhasan.com'>www.adilhasan.com</a></div>

                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <3; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/1/" . $k . ".jpg' data-lightbox='artistgallery1'><img class='img-res' src='../images/editions/2017-18/1/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row even'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/2/Aishwarya_Arumbakkam.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Aishwarya&nbsp;Arumbakkam</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <p>According to Khasi mythology, God had originally distributed the human race into sixteen families split between heaven and earth. A heavenly ladder resting on a sacred peak allowed the families on earth to visit the heavens.</p>

                                <p>On the same sacred peak was a giant, divine tree that cast a shadow on the whole world. The Khasis on earth felt that if this tree were cut down, there’ll be nothing to stand in the way of sun’s light, and cultivation could thrive.</p>

                                <p>Upon unanimous decision, they destroyed the divine tree, going against God’s command not to do so. This angered God to the point where she destroyed the heavenly ladder.</p>

                                <p>The seven families have been stuck on earth ever since and they became the seven tribes that form the Khasi community.</p>

                                <p>Nobody knows what became of the tree, for since the time it fell, its species has died and there is no seed of it to be found anywhere on earth, from which it can be grown.</p>

                                <p>This tree is called Ka Dingiei.</p>

                                <br />

                                <p><big>Ka Dingiei, 2016 – Ongoing</big></p>

                                <p>Ka Dingiei is an ongoing, fictional, photo-story set in the village of Lama Punji in Jaflong, Bangladesh. The story explores the Khasi community’s intrinsic relationship with nature and the changes being forced upon them.</p>

                                <p>The mines surrounding the village of Lama Punji are destroying not just the physical landscape of the Khasi community but also their emotional and mythical landscape. Ka Dingiei explores this idea using the format of fiction. It’s a retelling of the origin myth of the Khasi community, adapted to a modern day context.</p>

                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <5; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/2/" . $k . ".jpg' data-lightbox='artistgallery2'><img class='img-res' src='../images/editions/2017-18/2/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row odd'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/3/Anushree_Fadnavis.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Anushree&nbsp;Fadnavis</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <p>#traindiaries
                                <p>We humans are such that wherever we go we end up making friends. We have school friends, college buddies, office colleagues, colony friends and so many more. In Mumbai however, we also have a concept of 'train friends'. This ought to happen if we share a journey in the train with strangers for almost two hours. The probability increases even more in a women compartment since we women can really talk!</p>
                                <p>I often see women pouring their hearts out to each other in trains. They hear each other out and share an understanding about common experiences. At times they share their secrets with strangers. They know that their secrets will be safe with these unfamiliar faces because often one never sees them again. But then there are also strangers, who, over the years end up becoming friends and almost become a second family to one another. They share their joys, troubles, cooking recipes, and even advices on a dress color. Isn’t this so Mumbai? Mumbai, which welcomes strangers with open arms!</p>
                                <p>In this journey of 2 to 3 hours each day people forge many relationships with other commuters and also develop one with the environment. I wanted to capture the essence of this travel - the relationships, my own visual affair and most importantly the people. This is how the '#traindiaries' project started. This project is a visual, virtual photo diary that I maintain whereby I document, photograph, and pen down memories and experiences. Sometimes my own and sometimes of others.</p>
                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <6; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/3/" . $k . ".jpg' data-lightbox='artistgallery3'><img class='img-res' src='../images/editions/2017-18/3/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row even'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/4/Arka_Patra.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Arka&nbsp;Patra</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <p>Hello,<br />
                                I am very glad for this opportunity to showcase my work at Egaro.</p>
                                <p>The series ‘Do not go to the garden of flowers! ‘, is based on a poem by Kabir by the same name.</p>
                                <blockquote>
                                    Do not go to the garden of flowers!<br />
                                    Do not go to the garden of flowers!<br />
                                    Do not go to the garden of flowers!<br />
                                    O Friend! go not there;<br />
                                    In your body is the garden of flowers.<br /><br />

                                    Take your seat on the thousand petals of the lotus,<br />
                                    and there gaze on the Infinite Beauty.
                                </blockquote>
                                <p>I decided to divide the series in two sections, white and black. The white section deals with the struggles and conflict of beliefs, in finding love.  The black section deals with the death of love.</p>
                                <p>Thank you<br />
                                Arka Patra</p>
                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <3; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/4/" . $k . ".jpg' data-lightbox='artistgallery4'><img class='img-res' src='../images/editions/2017-18/4/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row odd'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/5/Asmita_Parelkar.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Asmita&nbsp;Parelkar</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <blockquote class='blockquote'>
                                    God loves the birds and invented trees.<br />
                                    Man loves the birds and invented cages.
                                </blockquote>
                                <div class='blockquote-footer'>Jacques Deval, Afin de virve Bel et bein</div>

                                <br /><br />

                                <p>Giraffe behind the door is a photo project about observing animals in captivity. As human beings evolved so did the environments around us, we built ourselves limitations, walls, ceilings and all we could to avoid wilderness. We built walls, set boundaries and kept the wild out. The limitations were soon imposed on the co-inhabitants, we built zoos with cages and glass boxes, nets and moats, supporting all arrangements for a life in entire solitude. We have always been intrigued by wild animals and have felt the need to tame them. Ironically this fascination for embracing the wild and free results in captivation taking that freedom away from them.</p>

                                <p>Animals in captivity are looked at as nothing but live exhibits - live collections that these institutions posses. The living conditions of the captivated animals in many zoos across the world are often grim with concrete walls and cages. At the same time there are some zoos that are spending a lot of money on making artificial environments, with controlled temperatures, and artificial light which don't come as close as the natural environments of the animals. The painted walls with the scenes of the habitats just create an illusion of open landscapes inside these cages. Wild animals are naturally shy and hide in vegetation or their surroundings but the exhibits are made in such a way that they are always visible to the public gaze. The stress of this often leads to Zoochosis showing abnormal behaviour in animals such as pacing in the cages and sometimes even self-mutilation. Animal in captivity is nothing but a ghost or skeleton of its former self.</p>

                                <p>Giraffe behind the door is a journey through the zoos and the psychological spaces of these animals. Through these images of observations I am beginning to question the intricate relationship between us and the natural world and our impact and consequences on the same.</p>

                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <3; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/5/" . $k . ".jpg' data-lightbox='artistgallery5'><img class='img-res' src='../images/editions/2017-18/5/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row even'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/6/Gayatri_Ganju.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Gayatri&nbsp;Ganju</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                            <p><u>Title: Flora</u></p>

                            <p>Over a week, I set myself a task – to walk along the Adyar River from Nandambakkam (where it becomes markedly contaminated) to where it meets the sea.</p>

                            <p>One of the two rivers that wind through Chennai, the Adyar is mostly walled off and out of sight, representative of its fractured relationship with the city. Waste, washed ashore has become the topography of the banks. </p>

                            <p>‘Flora’ is a photographic study of the landscape of the banks. I chose to remove the objects I collected from their context and photograph them clinically, as a researcher would treat botanical specimens. During the process of collecting and photographing these objects, I was in equal parts drawn to and disturbed by how closely their form resembled organic matter. </p>

                            <p>This project was a way for me to reflect on and engage with how disconnected we have become from the natural spaces that exist in the city. And how this separation is accelerating the way we transform these spaces. Among the objects I photographed there were also the debris of personal histories that stuck out of the plastic. A stark reminder of human transience but the permanence of what we leave behind. The images attempt to provoke the act of looking at these things we’ve thrown out, that are becoming the land we live on.</p>

                            <br /><br />

                            <p>Over a week, I set myself a task – to walk along the Adyar River from Nandambakkam (where it becomes markedly contaminated) to
                            where it meets the sea.</p>

                            <p>One of the two rivers that wind through Chennai, the Adyar is mostly walled off and out of sight, representative of its fractured
                            relationship with the city. Waste, washed ashore has become the topography of the banks. </p>

                            <p>‘Flora’ is a photographic study of the landscape of the banks.  I chose to remove the objects I collected from their context and
                            photograph them clinically, as a researcher would treat botanical specimens.  During the process of collecting and photographing
                            these objects, I was in equal parts drawn to and disturbed by how closely their form resembled organic matter. </p>

                            <p>This project was a way for me to reflect on and engage with how disconnected we have become from the natural spaces that exist in
                            the city.  And how this separation is accelerating the way we transform these spaces.  Among the objects I photographed there were also the debris of personal histories that stuck out of the plastic.  A stark reminder of human transience but the permanence of what
                            we leave behind.  These images attempt to provoke a response form the act of looking at the things we’ve thrown out, that are
                            becoming the land we live on.</p>


                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <3; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/6/" . $k . ".jpg' data-lightbox='artistgallery6'><img class='img-res' src='../images/editions/2017-18/6/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row odd'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/7/Iman_Ghosal.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Iman&nbsp;Ghosal</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>

                            <p>Imagine your life at its peak. An obedient daughter, a loving sister, a committed lover, an easy going friend, a student of literature with big future Plans. Now imagine all of it being snatched away from you within months time. Imagine not being able to communicate with your parents ,being isolated by you friends, your love life shattering to pieces and your future uncertain. Imagine a life confined to a room with all the windows close shut for months. Imagine being laughed at, teased, stared, criticized just for the way you look. </p>
                            <p>Crisis shapes us. It gives birth to a stronger, courageous, better human being. As an Alopecia areata ( an auto immune disorder which results in sudden and partial or total baldness.) patient i was subjected to humiliation, isolation, curiosity, hate. It totally engulfed me and spit me out broken and hopeless. It is like a nightmare I can never wake up from. I became reckless, self harming, desperate and miserable. At my darkest hour I found solace in my father's arms. I found acceptance through photographing my physical changes and changes around me. This is an ode to myself for still holding on to life, still wanting to fall in love and not being judgmental when I was being judged most. This is also a tribute to my family who stood by me and gave me a place to come back and cry my heart out only to pull myself back together again, stronger than before.</p>

                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <9; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/7/" . $k . ".jpg' data-lightbox='artistgallery7'><img class='img-res' src='../images/editions/2017-18/7/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row even'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/8/Parth_Gupta.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Parth&nbsp;Gupta</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <blockquote>What do I know? How will I die? What sort of death will it be? If I do not forget the Lord Master from my mind, then my death will be easy. The world is terrified of death; everyone longs to live. By Guru's Grace, one who dies while yet alive, understands the Lord's Will. O Nanak, one who dies such a death, lives forever.</blockquote>
                                <div class='blockquote-footer'>Sri Guru Granth Sahib Ji, Page 555</div>

                                <br />

                                <p>You can smell Khanauri before you see it. It reeks of decay and death. This is not hyperbolic exaggeration. Built between 1950 and 1954, the Bhakra Main Line Canal is 164 kilometres long and runs through Punjab and Haryana. The inter-state channel carries water from the Sutlej to these two states and Rajasthan. At Khanauri, the canal branches out towards Rajasthan and here, where water gushes out of a sluice gate, is the spot known for being the floating ground for corpses.</p>

                                <p>It’s a gruesome spot. The stench of rotting flesh hangs in the air and in the garbage-caked water, and there are almost always a few dead bodies floating on its surface which were not identifiable. On the morning of November 7, 2016, I visited Khanauri, figures floated in the canal. Bodies have been drifting here, according to the people in Khanauri and villages/towns nearby, since the canal was built. An entire industry has grown up around it—divers who fish out bodies for relatives of missing persons. The people in the area go about their lives, seemingly unaffected by the prevalence of death around them.</p>

                                <p>The first time I met Inderjit Singh, he was scanning the water for the body of his niece, Harpreet Kaur. Kaur, 16 years old, committed suicide on the 3rd of December, 2016. Both come from Bhundthe Village, Kartarpur district of Punjab. Inderjit told me that Kaur’s father was under a lot of debt, which she often dwelled on. On the 3rd of December she made tea for the family and offered to shop for groceries, which was unlike her. Kaur, instead, started walking along the canal. Two young men, passing by, had observed her for the past 10-15 minutes and were worried. Kaur took off her salwar and jumped in. She bobbed once, and went under. As soon as the family learnt, they started their journey to the Khanauri barrage so that they could collect the body, where it would eventually reach. Ashu Malik, a professional corpse retriever asked them questions about Kaur, from her diet to her weight so that he could predict where she would surface.</p>

                                <p>On 8th of December, Malik took the family to Fatehgarh Sahib to retrieve the body. Kaur’s family could not afford a post mortem for the body as they’d have to invest 7000-8000 rupees. Thus, they could not get a death certificate. A lot of people avoid post mortem for the same reason, i.e. poverty.
                                The cremation was the next day.</p>

                                <p>Despite the alarming number of bodies that find their way here, the government has done little to acknowledge the problem. There is no fencing by the canals, and there are no facilities for mental health anywhere in the area. There has never been any proper examination conducted by any body, government or other, as to why so many people in the region are committing suicide.
                                The bodies found in Khanauri are mainly from the districts of Ropar, Fatehgarh Sahib and Patiala in Punjab but the problems lie in much more depth in the other remote areas before and after Khanauri, where I plan to further investigate and document the social, economical and political conditions of the areas. Khanuari might be where bodies end up, but that’s not where they begin and is indicative of a much more complex institutional problem across the three states of Punjab, Haryana and Rajasthan.
                                <i>(Ongoing Project)</i></p>

                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <11; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/8/" . $k . ".jpg' data-lightbox='artistgallery8'><img class='img-res' src='../images/editions/2017-18/8/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row odd'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/9/Sandeep_Dhopate.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Sandeep&nbsp;Dhopate</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <p>All religions promote some kind of promised land of eternal happiness after death. The idea must have been to be encourage compassion and respect for everything around so as to be deserving of this great reward. But somewhere along the line, we seemed to have lost the plot and started engaging in violent forceful behaviour to gain entry into that Elysium. What made us believe in a myth so staunchly that we ignore the paradise we already are on and resort to destroying everything around us. The elysian fields do exist and we are already there.</p>
                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <4; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/9/" . $k . ".jpg' data-lightbox='artistgallery9'><img class='img-res' src='../images/editions/2017-18/9/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row even'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/10/Sathish_Kumar.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Sathish&nbsp;Kumar</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <p><b>HOME</b> (Title)</p>
                                <p>These are photos of Kanchipuram <br />
                                These are photos of my family <br />
                                These are photos of my life <br /></p>

                                <p>I miss my hometown<br />
                                I miss my father <br />
                                I miss my life that was<br /></p>

                                <p>
                                    (In Tamil)<br />
                                    என் காஞ்சிபுரம். <br />
                                    என் வாழ்வு.<br />
                                    என் பயணங்கள்.<br />
                                    என்  மனிதர்கள்.<br />
                                    என் நினைவுகள்.<br />
                                    என் அப்பா.
                                </p>

                                <p>Bio</p>

                                <p>
                                    b.1986<br />
                                    Sathish Kumar<br />
                                    works and lives in Chennai.<br />
                                    <a href='www.sathishphoto.com'>www.sathishphoto.com</a>
                                </p>

                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <5; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/10/" . $k . ".jpg' data-lightbox='artistgallery10'><img class='img-res' src='../images/editions/2017-18/10/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>

                        <div class='row odd'>
                            <div class='images col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                <img class='mar-top-bottom img-fluid' src='../images/editions/2017-18/11/Swarat_Ghosh.jpg' alt='image' />
                                <br />
                                <div class='artist-name'>Swarat&nbsp;Ghosh</div>
                            </div>
                            <div class='individual-contents col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                <p>Artist Statement   For him, in the street, he normally tries to catch the emotions more than anything. According to him “Content” is the King. Beyond Street is his own personal experience and space within which he communicates and creates the dialogue with these unknown and unposed strangers whom he met accidentally yet somehow build some strong bonding with them unintentionally. As long as he is getting strong subjects with varied emotions which people can easily relate to, he thinks as a photographer he has done justice to himself. He just enjoys the whole experience of making pictures till date. It’s all about the timing and the capacity to observe. He pats himself on the back for the sheer dedication with which he pushes himself when making images on the streets. </p>

                                <blockquote>Many times I feel to skip on weekends (due to my software job) but somehow drag myself just for the sheer joy of clicking that magic picture at a time.</blockquote>
                                <div class='blockquote-footer'>Swarat Ghosh</div>

                                <div class='row thumb-container'>
                    ";
                    for($k = 1; $k <6; $k++) {
                        $html .= "
                                    <div class='thumb'>
                                        <a class='modal-anchor' href='../images/editions/2017-18/11/" . $k . ".jpg' data-lightbox='artistgallery11'><img class='img-res' src='../images/editions/2017-18/11/small/" . $k . ".jpg' alt='images'></a>
                                    </div>
                        ";
                    }
                    $html .= "
                                </div>
                            </div>
                        </div>
                    ";
                    echo $html;
                }






                else if($edition == "18_19") {
                    echo "
                        <div class='coming-soon'>Coming Soon</div>
                    ";
                }



                else {
                    echo "NOT Available !!!";
                }
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
        <script type="text/javascript" src="../js/editions.js"></script>
    </body>
</html>
