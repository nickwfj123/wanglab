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
    <?php include "data/research_data.php" ?>
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
                            <h2 class="section-title">Software</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px">
                            <div class="project">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="images/software/toolbox.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <h4 style="margin:0">Cmai</h4>
                                        <div class="project_crdts"><a href="https://github.com/ice4prince/Cmai" target="_blank"><span class="fa fa-github"> Github</span></a> &nbsp;</div>
                                        <p>In this work, we developed an innovative Artificial Intelligence tool, Cmai, to address the prediction of binding between antibodies and antigens that can be scaled to high-throughput sequencing data.</p>
                                        <hr style="margin-bottom: 10px; margin-top:0">
                                        <div><a href="./download/cmai/RFoutputs.zip" target="_blank" download><span class="fa fa-download"><strong> RFoutputs</strong></a></div>
                                        <p>The intermediate data from preparing and processing RoseTTAFold of the example data.</p>
                                        <div><a href="./download/cmai/NPY.zip" target="_blank" download><span class="fa fa-download"><strong> NPY</strong></a></div>
                                        <p>NPY Description The intermediate data of all antigen embeddings of the example data.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    foreach ($data as $val) {
                        $icons = '';
                        if (isset($val['web'])) $icons .= '<a href="' . $val['web'] . '" target="_blank"><span class="fa fa-desktop"> Web</span></a> &nbsp;';
                        if (isset($val['github'])) $icons .= '<a href="' . $val['github'] . '" target="_blank"><span class="fa fa-github"> Github</span></a> &nbsp;';
                        if (isset($val['package'])) $icons .= '<a href="' . $val['package'] . '" target="_blank"><span class="fa fa-desktop"> Package</span></a> &nbsp;';
                        if (isset($val['software'])) $icons .= '<a href="' . $val['software'] . '" target="_blank" download><span class="fa fa-download"> Software</span></a> &nbsp;';
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
                                            <div class="project_crdts">' . $icons . '</div>
                                            <p>' . $val['description'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            ';
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