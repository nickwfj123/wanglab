<!DOCTYPE html>
<html>

<head lang="en">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Tao Wang Lab | Quantitative Biomedical Research Center | UT Southwestern</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Fangjiang Wu">
    <meta name="description" content="UT Southwestern,QBRC,Tao Wang Lab" />
    <meta name="keyword"
        content="UT Southwestern,QBRC,Tao Wang Lab,Population and Data Sciences,Bioinformatics,Quantitative Biomedical Research Center" />

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" title="Favicon" />

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'
        rel='stylesheet' type='text/css'>
</head>

<body>
    <?php include "data/talks_data.php" ?>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status" class="la-ball-triangle-path">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--End of Preloader-->

    <div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
        <div class="top-border wow fadeInDown animated"
            style="visibility: visible; animation-name: fadeInDown;"></div>
        <div class="right-border wow fadeInRight animated"
            style="visibility: visible; animation-name: fadeInRight;"></div>
        <div class="bottom-border wow fadeInUp animated"
            style="visibility: visible; animation-name: fadeInUp;"></div>
        <div class="left-border wow fadeInLeft animated"
            style="visibility: visible; animation-name: fadeInLeft;"></div>
    </div>

    <div id="wrapper">

        <?php include "navbar.php" ?>

        <!--Main Content Area-->
        <main id="content">
            <section class="bg bg-long">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px">
                            <div class="section-heading text-center" style="margin-top: 80px">
                                <h2 class="section-title">TALKS</h2>
                            </div>
                            <div style="padding: 0 100px; font-size: 1.5rem">
                                Here, we release the WIPS, JC, and tech talks presented at our lab meetings that are
                                suitable for open release and that could be helpful for our fellow researchers!
                            </div>
                        </div>
                    </div>

                    <?php
                    foreach ($data as $val) {
                        echo '
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px">
                                    <div class="project">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <img src="' . $val['img'] . '" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <h4 style="margin:0">' . $val['title'] . '</h4>
                                                <div class="project_crdts">
                                                    <a><span
                                                                class="fa fa-user"></span> Presenter: ' . $val['presenter'] . '</a>
                                                    &nbsp;
                                                    <a><span
                                                                class="fa fa-clock-o"></span> Date: ' . $val['date'] . '</a>
                                                    &nbsp;
                                                </div>
                                                <div style="margin-top: 10px">
                                                    <a href="' . $val['download'] . '" class="btn btn-success" download>Download
                                                        Slides</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>

                </div>
            </section>
        </main>
        <!--End Main Content Area-->

        <?php include "footer.php" ?>

    </div>

    <!-- Include JavaScript resources -->
    <script src="js/jquery.1.8.3.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/featherlight.min.js"></script>
    <script src="js/featherlight.gallery.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <!-- <script src="js/jquery.stickyNavbar.min.js"></script> -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/images-loaded.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/site.js"></script>
    <script src="js/custom.js"></script>
    <script type='text/javascript' src="js/collapsibleclick.js"></script>
</body>

</html>