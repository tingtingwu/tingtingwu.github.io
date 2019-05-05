<!DOCTYPE html>
<html>
<head>
    <?php require ("inc/header.php");?>

    <title></title>
</head>

<body data-spy="scroll" data-target=".scrollspy">
    <div id="wrap">
        <div class="container-fluid">
            <?php require ("inc/nav.php");?>
        </div>

        <header class="intro">
            <div class="intro-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">TINGTING \tíngtíng\
                            <span class="n">n.</span></h1>

                            <p class="intro-text">An insatiably curious,
                            twenty-something, Midwest transplant who delights in
                            novelty, data, and design.</p>

                            <div class="btn btn-circle page-scroll">
                                <a href="#who"><span class=
                                "glyphicon glyphicon-menu-down"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="sections">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <section id="who">
                            <h1>Who</h1>

                            <h2>"Why, sometimes I've believed as many as six
                            impossible things before breakfast." – Lewis
                            Carroll</h2>

                            <div class="tw"></div>
                            <div></div>
                            <p>I am a consultant interested in design thinking, data visualization, and user experience design, who also happens to:</p>

                            <ul>
                                <li>
                                    <span class=
                                    "glyphicon glyphicon-chevron-right"></span>Dabble in watercolor painting and photography
                                </li>

                                <li>
                                    <span class=
                                    "glyphicon glyphicon-chevron-right"></span>Box, hike, and attempt headstands
                                </li>

                                <li>
                                    <span class=
                                    "glyphicon glyphicon-chevron-right"></span>Contribute to a <a href="http://makingstewards.com/">sustainability startup</a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div><!--container-fluid-->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <section id="work">
                            <h1>Work</h1>

                            <h2>"Boredom always precedes a period of great
                            creativity." – Robert M. Pirsig</h2>

                            <p>Despite my propensity for seeking novelty, I
                            found myself to have developed quite a fondness for
                            design and data that has not subsided over time,
                            only evolved. I'm especially interested in
                            data-influenced design for improved health, social,
                            and business outcomes. A selection of my work can be found below.</p>

                            <div class="row">
                                <!-- <h3 class="text-center">Design-related
                                Skills</h3>
                                <?php require ("inc/skills.php");?> -->
                                <button class="btn btn-default center-block top-buffer"
                                data-target="#resume" data-toggle="modal" type=
                                "button">Résumé</button>
                            </div><?php require ("inc/projects.php");?>
                        </section>
                    </div>
                </div>
            </div><!--container-fluid-->

<!--              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <section id="write">
                            <h1>Write</h1>

                            <h2>"The art of writing is the art of discovering
                            what you believe." – Gustave Flaubert</h2>

                            <p>While in elementary school and middle school, I
                            kept a traveling journal full of ticket stubs,
                            receipts, and other random memorabilia. It was
                            never about impressing anyone but merely me jotting
                            down ideas, thoughts, and complaints. Nowadays, I'm
                            mostly collecting thoughts before etching them in
                            stone of the 21st century – the Internet. But the
                            thoughts are there, and the plans are set in
                            motion.</p>
                        </section>
                    </div>
                </div>
            </div><!--container-fluid -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <section id="wander">
                            <h1>Wander</h1>

                            <h2>"We wander for distraction, but we travel for
                            fulfillment." – Hilaire
                            Belloc</h2><?php require ("inc/photos.php");?>

                            <p>I did not grow up traveling much, so I'm eternally grateful for having a job that has enabled me to see so much more of the world.</p>

                            <ul>
                                <li>
                                    <span class=
                                    "glyphicon glyphicon-chevron-right"></span>Details
                                    of my more professional experiences can be
                                    found on <a href=
                                    "https://www.linkedin.com/in/wutingting">LinkedIn</a>
                                </li>

                                <li>
                                    <span class=
                                    "glyphicon glyphicon-chevron-right"></span>A photography project I started one
                                    summer in Ithaca resides on <a href=
                                    "http://161daysofcornell.tumblr.com/">Tumblr</a>
                                </li>

                                <li>
                                    <span class=
                                    "glyphicon glyphicon-chevron-right"></span>The
                                    more active photoblog of places I visit is on <a href=
                                    "https://instagram.com/tingbug">Instagram</a>
                                </li>

                            </ul>

                            <p>I can also be reached via email at <a href=
                            "mailto:hello@tingtingwu.co">hello@tingtingwu.co</a>.</p>
                        </section>
                    </div>
                </div>
            </div><!--container-fluid-->
        </div><!--sections-->
        <!-- footer -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-md-offset-5 top-buffer">
                    <p class="footer text-center">Copyright (c) 2018 Tingting
                    Wu</p>
                </div>
            </div>
        </div>
    </div><!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <script src="styles/bootstrap/js/bootstrap.min.js"></script> <?php require ("inc/scripts.php");?>
</body>
</html>
