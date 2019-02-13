<?php
require_once 'backend/db/database.php';
require_once 'backend/admin/admin.php';
require_once 'backend/user/post.php';
$db = null;
$post_id = null;
if(!isset($_GET["n"])){
    header('location:index.php');
}else{
    $db = new database();
    $post_id = $db->con->real_escape_string($_GET["n"]);
}
$post = new post(1,$post_id);
?>
<html lang="en">

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
    <title><?php echo $post->getTitle(); ?></title>
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
    <link rel="stylesheet" type="text/css" href="style/engine1/style.css" />
    <script type="text/javascript" src="style/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <!--    emoji text area starts here-->
    <!--    emoji text area ends here-->
</head>

<body>
    <div class="container-fluid" style="background-color: #212121; height: 300px;">
        <div class="row">
            <div class="col-lg-1 col-md-1 hidden-xs col-sm-1"></div>
            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10 top_site">
                <div class="row">
                    <!--navigation menu-->
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
                            <div class="nevisande_box">
                                <h4 class="nevisandehtitle">نویسنده </h4>
                                <img src="<?php echo $post->getAdmin()->getAvatar(); ?>" alt="سید محمد تقی نژاد" class="nevisande_img">
                                <h4 class="nevisande_etelaati"><?php echo $post->getAdmin()->getName(); ?></h4>
                                <p class="nevisande_etelaati">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                            </div>



                            <br><br><br>
                            <!-- end The most important news -->
                            <?php
                            //add most visited
                            include 'layout/most_visited.php';
                            ?>
                            </div> <div class="col-lg-9 col-md-10 col-xs-12 col-sm-12">
                                        <div class="mycard mycard-2">
                                            <h3 class="stitr"><?php echo $post->getTitle(); ?></h3>
                                            <br>
                                            <br>
                                            <img src="<?php echo $post->getImgLink(); ?>" class="imgsing img-responsive img-rounded">
                                            <br>
                                            <br>
                                            <div class="nevisande singlenevisandeh" style="direction: rtl;"><i class="fa fa-user" aria-hidden="true"></i><?php echo $post->getAdmin()->getName(); ?>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<time datetime="21-8-1396" class="datetime"><?php echo $post->getCreatedDate(); ?>
                                                </time>
                                            </div> <br><br>
                                            <p class="matnsingle1">
                                                <?php echo $post->getContent(); ?>
                                            </p>
                                            <!-- start Polls build box-->
                                            <br>
                                            <br>
                                            <br>
                                            <!--<div class="myBox">
                                     برای دانلود فایل <span class="inja"> اینجا </span> کلیک کنید .
                                    <div id="myinfobox" class="myclass">
                                        <p class="linkHover"><a href="#">قسمت اول</a></p>
                                        <p class="linkHover"><a href="#">قسمت اول</a></p>
                                        <p class="linkHover"><a href="#">قسمت دوم</a></p>
                                        <p class="linkHover"><a href="#">قسمت سوم</a></p>
                                        <p class="linkHover"><a href="#">قسمت چهارم</a></p>
                                        <p class="linkHover"><a href="#">قسمت پنجم</a></p>
                                        <p class="linkHover"><a href="#">قسمت ششم</a></p>
                                        <p class="linkHover"><a href="#">قسمت هفتم</a></p>
                                        <p class="linkHover"><a href="#">قسمت هشتم</a></p>
                                        <p class="linkHover"><a href="#">قسمت نهم</a></p>
                                        <p class="linkHover"><a href="#">قسمت دهم</a></p>
                                        <p class="linkHover"><a href="#">قسمت یازدهم</a></p>
                                        <p class="linkHover"><a href="#">قسمت دوازدهم</a></p>
                                        <p class="linkHover"><a href="#">قسمت سیزدهم</a></p>
                                        <p class="linkHover"><a href="#">قسمت چهاردهم</a></p>
                                        <p class="linkHover"><a href="#">قسمت پانزدهم</a></p>
                                    </div>

                                </div>-->
                                            <div class="dl-box">
                                                <h3>دانلود فایل</h3>
                                                <div class="size">
                                                    <i class="fas fa-box downloadboxfontawsom mydlbox"></i><span>حجم : 40 مگابایت</span>
                                                </div>
                                                <br>
                                                <div class="dl-link">
                                                    <i class="fas fa-download downloadboxfontawsom mydlbox"></i><span><a href="#">دانلود با لینک مستقیم</a></span>
                                                </div>
                                                <br>
                                                <div class="size">
                                                    <i class="fas fa-lock downloadboxfontawsom mydlbox"></i><span>رمز : www.geecktor.ir</span>
                                                </div>
                                                <br>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="row" style="direction: rtl;">
                                                <div class="col-md-12 col-lg-12 col-sm-12 col-md-12 my-container">
                                                    <h3>نظرات</h3>
                                                    <form>
                                                        <label for="comment_name">نام</label>
                                                        <input name="name" id="comment_name" type="text" class="form-control" placeholder="نام">
                                                        <label for="comment_email">ایمیل</label>
                                                        <input name="name" id="comment_email" type="text" class="form-control" placeholder="ایمیل">
                                                        <label for="comment_subject">نظر *</label>
                                                        <textarea id="comment_subject" data-emojiable="true" name="subject" class="form-control" placeholder="نظرتان را بنویسید..." style="height:200px" style="text-align: right;"></textarea><br>
                                                        <be></be>
                                                        <input class="btn btn-primary pull-left" type="submit" value="ارسال نظر" name="submit_comment" />
                                                    </form>
                                                </div>
                                            </div><br><br>
                                            <div class="row" style="direction: rtl;">
                                                <div class="col-md-12 col-lg-12 col-sm-12 col-md-12 my_comments">

                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-md-12 commentbox">
                                                        <img src="images/5.jpg" alt="www.geecktor.ir" class="col-md-2 col-lg-2 hidden-xs hidden-sm comentimg">
                                                        <div class="commenttitlesegment">
                                                            <h5 class="col-md-10 col-lg-10 col-sm-10 col-md-10 commenttitle">
                                                                سید محمد تقی نژاد
                                                            </h5>
                                                            <hr>
                                                            <P class="col-md-10 col-lg-10 col-sm-10 col-md-10 khodecomment">
                                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                                            </P>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-md-12">
                                                            <a href="#">
                                                                <h6 class="pasokhcomment">پاسخ</h6>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-11 col-lg-11 col-sm-11 col-md-11 my_comments1 my_comments commentbox">
                                                    <img src="images/5.jpg" alt="www.geecktor.ir" class="col-md-2 col-lg-2 hidden-xs hidden-sm comentimg">
                                                    <div class="commenttitlesegment">
                                                        <h5 class="col-md-10 col-lg-10 col-sm-10 col-md-10 commenttitle">
                                                            سید محمد تقی نژاد
                                                        </h5>
                                                        <hr>
                                                        <P class="col-md-10 col-lg-10 col-sm-10 col-md-10 khodecomment">
                                                            در پاسخ به این دوست عزیزمون باید بگم که گیکتور سعی بر ان دارد ک به بهترین سطح و مورد نیازترین و نزدیکترین لول به بازار کار برسید
                                                        </P>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-md-12">
                                                        <a href="#">
                                                            <h6 class="pasokhcomment">پاسخ</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Polls build box-->
                </div>
            </div>
            <!-- start footer-->
            <footer>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1"></div>
                    <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10 bottom_site2">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1"></div>
                    <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10 bottom_site">
                        <a href="#" style="text-decoration: none; color: white;">
                            <h4 class="fotter">جهت ارتباط با ما اینجا کلیک کنید</h4>
                        </a>
                    </div>
                </div>
            </footer>
            <!-- end footer-->
        </div>
        <script src="style/bootstrap/js/jquey.min.js"></script>
        <script src="style/bootstrap/js/bootstrap.min.js"></script>
        <!-- Jquery wow Slider -->
        <script type="text/javascript" src="style/engine1/wowslider.js"></script>
        <script type="text/javascript" src="style/engine1/script.js"></script>
        <!--    start emoji-->
        <link rel="stylesheet" href="style/emoji-assets/emojionearea.min.css">
        <script type="text/javascript" src="style/emoji-assets/emojionearea.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#comment_subject").emojioneArea();
            });
        </script>
        <!--end emoji-->
        <script type="text/javascript" src="style/engine1/script.js"></script>
        <script type="text/javascript" src="script/script_jquery.js"></script>
</body>

</html>