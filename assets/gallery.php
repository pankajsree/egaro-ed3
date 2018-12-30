<?php
    $edition = $_GET['edition'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gallery</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' type='text/css' href='../css/default.css' />
        <link rel='stylesheet' type='text/css' href='../css/style.css' />
        <link rel='shortcut icon' type='image/png' href='../images/icons/favicon.png' />
        <link href="https://fonts.googleapis.com/css?family=Cagliostro|Cinzel:400,700|Cormorant+Garamond|Dancing+Script|Vollkorn" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Playfair+Display" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <script src='https://code.jquery.com/jquery-3.3.1.min.js' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body id="gallery-page">
        <header id="header">
            <a class="smooth brand header-elem" href="../index.html"><img src="../images/icons/favicon.png" /></a>
            <ul class='tabs'>
                <a class="smooth header-elem tab" href="../index.html"><li>Home<div class="tab-hover"></div></li></a>
                <a class="smooth header-elem tab" href="../index.html#about">
                    <li class="drop">About Us<span>&#11206;</span><div class="tab-hover"></div>
                        <ul>
                            <a class="smooth" href="../index.html#fest-dir"><li class="drop-first">Our team</li></a>
                            <a class="smooth" href="../index.html#about-agartala"><li>Visitor's&nbsp;Guide</li></a>
                            <a class="smooth" href="../index.html#"><li class="drop-last">Press&nbsp;&&nbsp;Media</li></a>
                        </ul>
                    </li>
                </a>
                <a class="header-elem tab" href="archives.html">
                    <li class="drop">Archive<span>&#11206;</span><div class="tab-hover"></div>
                        <ul>
                            <li class="drop-first">Photos</li>
                            <li class="drop-last">Videos</li>
                        </ul>
                    </li>
                </a>
                <a class="header-elem tab" href="editions.html">
                    <li class="drop">Edition<span>&#11206;</span><div class="tab-hover"></div>
                        <ul>
                            <li class="drop-first">2018-19</li>
                            <li>2017-18</li>
                            <li class="drop-last">2016-17</li>
                        </ul>
                    </li>
                </a>
                <a class="smooth header-elem tab" href="../index.html#contacts">
                    <li class="drop">Get Involved<span>&#11206;</span><div class="tab-hover"></div>
                        <ul>
                            <li class="drop-first">Volunteer&nbsp;Registration</li>
                            <li class="drop-last">Support&nbsp;Us</li>
                        </ul>
                    </li>
                </a>
            </ul>
        </header>
        <main>
            <div class="container gallery-container">
                <?php
                    if($edition == "2016_17") {
                        for($i=1; $i<10; $i++) {
                            echo "<div class='row'>";
                            for($j=0; $j<3; $j++) {
                                echo "
                                    <div class='col-lg'>
                                        <img class='mar-top-bottom img-fluid' src='../images/archives/2016-17/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    ";
                                    $i++;
                            }
                            echo "</div>";
                        }
                    }
                    else if($edition == "2017_18") {
                        for($i=1; $i<10; $i++) {
                            echo "<div class='row'>";
                            for($j=0; $j<3; $j++) {
                                echo "
                                    <div class='col-lg'>
                                        <img class='mar-top-bottom img-fluid' src='../images/archives/2017-18/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    ";
                                    $i++;
                            }
                            echo "</div>";
                        }
                    }
                    else if($edition == "2018_19") {
                        for($i=1; $i<10; $i++) {
                            echo "<div class='row'>";
                            for($j=0; $j<3; $j++) {
                                echo "
                                    <div class='col-lg'>
                                        <img class='mar-top-bottom img-fluid' src='../images/archives/2017-18/" . $i  . ".jpg' alt='image' />
                                    </div>
                                    ";
                                    $i++;
                            }
                            echo "</div>";
                        }
                    }
                    else {
                        echo "NOT Available !!!";
                    }
                ?>
            </div>
        </main>
    </body>
</html>
