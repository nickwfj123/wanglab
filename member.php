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
    <?php include "data/members_data.php" ?>
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
                        <div class="section-heading text-center" style="margin-top: 80px">
                            <h2 class="section-title">MEMBERS</h2>
                        </div>
                    </div>
                    <h3 style="margin-top:25px;">Current Members</h3>
                    <div class="row">
                        <?php
                        foreach ($cur_members as $val) {
                            echo '
                <div class="col-md-3 col-sm-5 col-xs-10 short">
                    <section>
                        <div class="card card-cascade">
                            <div class="view overlay hm-white-slight">
                                <img src="' . $val['img'] . '" class="img-responsive"
                                     alt="' . $val['name'] . '" style="">
                                <a>
                                    <div class="mask waves-effect waves-light"></div>
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <p class="card-title"><strong>' . $val['name'] . '</strong></p>
                                <p>' . $val['title'] . '</p>

                                <a href="' . $val['email'] . '" class="email"><i
                                            class="fa fa-envelope"></i></a>

                            </div>
                        </div>
                    </section>
                </div>';
                        }
                        ?>
                    </div>

                    <h3 style="margin-top:25px;">Lab Alumni</h3>
                    <div class="row">
                        <?php
                        foreach ($lab_alumni as $val) {
                            echo '
                <div class="col-md-3 col-sm-5 col-xs-10 short">
                    <section>
                        <div class="card card-cascade card-alumni">
                            <div class="card-body text-center">
                                <p class="card-title"><strong>' . $val['name'] . '</strong></p>
                                <p>' . $val['title'] . '</p>
                            </div>
                        </div>
                    </section>
                </div> ';
                        }
                        ?>
                    </div>

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