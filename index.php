<?php
require_once 'backend/db/database.php';
require_once 'backend/admin/admin.php';
require_once 'backend/user/post.php';
$db = new database();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scalable=no" />
    <link href="style/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style/style.css" rel="stylesheet" />
    <!--<link rel="stylesheet" href="style/w3.css">-->
    <script type="text/javascript" src="style/data1/1learn.js"></script>
    <link rel="stylesheet" href="style/css/fontawesome-all.css">
    <link rel="icon" href="style/pic/ico/android-icon-144x144.png" type="image/png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Geektor</title>
    <style>
        .info-bar-text {
            color: white;
            text-align: center;
            line-height: 25px;
            vertical-align: middle;
        }

        .header-slider {
            margin-top: -19px;
        }

        .form-control-gray:focus {
            border-color: #999;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(18, 95, 201, .075), 0 0 8px rgba(18, 95, 201, .6);
            box-shadow: inset 0 1px 1px rgba(18, 95, 201, .075), 0 0 8px rgba(18, 95, 201, .6);
        }
    </style>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="style/slider/engine1/style.css" />
    <script type="text/javascript" src="style/slider/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>

<body>
    <div class="container-fluid" style="background-color: #212121; height: 300px;">
        <div class="row">
            <div class="col-lg-1 col-md-1 hidden-xs col-sm-1"></div>
            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10 top_site">
                <div class="row">
                    <!--navigation menu-->
                    <?php include 'layout/menu.php'; ?>
                </div>
                <div class="row" style="background-color:white">
                    <div style="float: right; height: 128px; width: 128px; margin-right: 50px;">
                        <a href="#"> <img class="img-responsive" src="images/LOGO%20MOHAMMD.png" /></a>
                    </div>
                    <a href="#" style="text-decoration: none;">
                        <h1 style="color: #125fc9; margin: 40px; float: right;">
                            گیک تور</h1>
                    </a>
                </div>
                <div class="container-fluid" style="position:relative; z-index: 1;">
                    <div class="row">
                        <div class="col-lg-3 col-md-2 hidden-xs hidden-sm">
                            <!-- Start Search box -->
                            <form class="search-container">
                                <input class="form-control form-control-gray" type="text" dir="rtl" id="search-bar" placeholder="عنوان مورد نظر خود را وارد کنید..."><i class="fas fa-search search-icon"></i>
                            </form>
                            <!-- end Search box -->
                            <!-- Start The most important news -->
                            <a href="#">
                                <div class="importantnews"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews1"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews1"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews1"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews1"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews1"></div>
                            </a>
                            <a href="#">
                                <div class="importantnews"></div>
                            </a>
                            <br><br>
                            <!-- end The most important news -->
                            <!--
                            <h4 style="text-align:right; margin-top: 20px;">تازه ترین ها</h4>
                            <hr class="bigHr">
-->
                            <?php include 'layout/most_visited.php'; ?>

                        </div> <div class="col-lg-9 col-md-10 col-sm-12 col-xs-12" style="margin-top: 20px; ">
                                        <!--Strating Slide Show-->
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="images/2.jpg" alt="geecktor.ir" class="sliderimages">
                                                    <div class="carousel-caption">
                                                        <h3>geecktor.ir</h3>
                                                        <p>Thank you for your choice</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="images/3.jpg" alt="geecktor.ir" class="sliderimages">
                                                    <div class="carousel-caption">
                                                        <h3>geecktor.ir</h3>
                                                        <p>Thank you for your choice</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="images/4.jpg" alt="geecktor.ir" class="sliderimages">
                                                    <div class="carousel-caption">
                                                        <h3>geecktor.ir</h3>
                                                        <p>Thank you for your choice</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <br><br>
                                        <!--
                           Ending Slide Show
                        -->

                                        <h3 style="text-align:right;">آخرین مطالب</h3>
                                        <hr class="bigHr">
                                        <!--Start box shadow-->
                                        <div class="parrent_box_shahab_1">

                                            <!--                               sliders-->
                                            <!--                                <div class="col-lg-12 hidden-md hidden-sm hidden-xs">-->


<?php
function custom_echo($x, $length)
{
    if(strlen($x)<=$length)
    {
        echo $x;
    }
    else
    {
        $y=substr($x,0,$length) . '...';
        echo $y;
    }
}
$page = 1;
if(isset($_GET['page'])){
    $page = mysqli_real_escape_string($db->con,$_GET['page']);
}
$post_ids = $db->get_all_posts_ids($page);
foreach ($post_ids as $id){
    $post = new post(1,$id);
    ?>
    <div class="card hidden-sm hidden-xs" style="direction:rtl;">
        <div class="row">
            <div class="col-lg-9 col-md-9 hidden-sm hidden-xs">
                <div class="nevisande"><i class="fa fa-user" aria-hidden="true"></i><?php echo $post->getAdmin()->getName(); ?> |
                    <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<time datetime="21-8-1396" class="datetime">2
                        ابان 1396
                    </time>
                </div>
                <h3><a href="single.php?n=<?php echo $post->getId(); ?>"><?php echo $post->getTitle(); ?></a></h3>
                <p>
                   <?php
                   custom_echo($post->getContent(),200);
                   ?>
                </p>
                <a href="single.php?n=<?php echo $post->getId(); ?>">
                    <div class="myButton"> ادامه مطلب</div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <img src="<?php echo $post->getImgLink(); ?>" class=" img-responsive img-rounded indeximg">
            </div>
        </div>
    </div>
    <br class="hidden-sm hidden-xs"><br class="hidden-sm hidden-xs">
    <!--                               sliders-->

    <!--                                </div>-->
    <?php
}
                                            ?>






                                            <!--                             show-in-sm show-in-xs    -->


                                            <div class="card111 card-112 res_box" style="direction:rtl;">
                                                <div class="row">
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <img src="images/1.jpg" class="indeximg1">
                                                    </div>
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <div class="nevisande1"><i class="fa fa-user" aria-hidden="true"></i>سید محمد تقی نژاد |
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<time datetime="21-8-1396" class="datetime1" style="font-weight: bold;">2 ابان 1396
                                                            </time>
                                                        </div>
                                                        <h3 class="mobilemahsol"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h3>
                                                        <p class="mobilemahsol">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                        </p>
                                                        <a href="#">
                                                            <div class="myButton"> ادامه مطلب</div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card111 card-112 res_box" style="direction:rtl;">
                                                <div class="row">
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <img src="images/1.jpg" class="indeximg1">
                                                    </div>
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <div class="nevisande1"><i class="fa fa-user" aria-hidden="true"></i>سید محمد تقی نژاد |
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<time datetime="21-8-1396" class="datetime1" style="font-weight: bold;">2 ابان 1396
                                                            </time>
                                                        </div>
                                                        <h3 class="mobilemahsol"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h3>
                                                        <p class="mobilemahsol">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                        </p>
                                                        <a href="#">
                                                            <div class="myButton"> ادامه مطلب</div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card111 card-112 res_box" style="direction:rtl;">
                                                <div class="row">
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <img src="images/1.jpg" class="indeximg1">
                                                    </div>
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <div class="nevisande1"><i class="fa fa-user" aria-hidden="true"></i>سید محمد تقی نژاد |
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<time datetime="21-8-1396" class="datetime1" style="font-weight: bold;">2 ابان 1396
                                                            </time>
                                                        </div>
                                                        <h3 class="mobilemahsol"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h3>
                                                        <p class="mobilemahsol">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                        </p>
                                                        <a href="#">
                                                            <div class="myButton"> ادامه مطلب</div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card111 card-112 res_box" style="direction:rtl;">
                                                <div class="row">
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <img src="images/1.jpg" class="indeximg1">
                                                    </div>
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <div class="nevisande1"><i class="fa fa-user" aria-hidden="true"></i>سید محمد تقی نژاد |
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<time datetime="21-8-1396" class="datetime1" style="font-weight: bold;">2 ابان 1396
                                                            </time>
                                                        </div>
                                                        <h3 class="mobilemahsol"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h3>
                                                        <p class="mobilemahsol">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                        </p>
                                                        <a href="#">
                                                            <div class="myButton"> ادامه مطلب</div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card111 card-112 res_box" style="direction:rtl;">
                                                <div class="row">
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <img src="images/1.jpg" class="indeximg1">
                                                    </div>
                                                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                                        <div class="nevisande1"><i class="fa fa-user" aria-hidden="true"></i>سید محمد تقی نژاد |
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<time datetime="21-8-1396" class="datetime1" style="font-weight: bold;">2 ابان 1396
                                                            </time>
                                                        </div>
                                                        <h3 class="mobilemahsol"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h3>
                                                        <p class="mobilemahsol">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                        </p>
                                                        <a href="#">
                                                            <div class="myButton"> ادامه مطلب</div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>










                                            <div class="center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="pagination">
                                                    <?php echo $db->get_paginator_links($page,"active"); ?>
<!--                                                    <a href="#">1</a>-->
<!--                                                    <a href="#">2</a>-->
<!--                                                    <a href="#" class="active">3</a>-->
<!--                                                    <a href="#">4</a>-->
<!--                                                    <a href="#">5</a>-->
<!--                                                    <a href="#"></a>-->
                                                </div>
                                            </div>

                                        </div>

                                        <!--end of box shadow-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 hidden-xs col-sm-1"></div>
            </div>
            <!--            <br><br><br>-->
            <!-- start footer-->
            <footer>
                <div class="row mtfasele">
                    <div class="col-lg-1 col-md-1 hidden-xs col-sm-1"></div>
                    <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10 bottom_site2">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 hidden-xs col-sm-1"></div>
                    <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10 bottom_site">
                        <a href="#" style="text-decoration: none;">
                            <h4 class="fotter">
                                <a href="#" style="text-decoration: none; color: white;">جهت ارتباط با ما اینجا کلیک کنید</a></h4>
                        </a>
                    </div>
                </div>
            </footer>
            <!-- end footer-->
        </div>
        <script src=" style/bootstrap/js/jquey.min.js "></script>
        <script src="style/bootstrap/js/bootstrap.min.js "></script>
        <!-- Jquery wow Slider -->
        <script type="text/javascript " src="style/engine1/wowslider.js "></script>
        <script type="text/javascript " src="style/engine1/script.js "></script>
        <script type="text/javascript " src="script/script_jquery.js "></script>
</body>

</html>
