<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Credit - Loan &amp; Credit Company HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php
        include('base/top.php')
    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Tin Tức</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### News Area Start ##### -->
    <section class="news-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Area -->
                    <?php
                    include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql="SELECT * 
                                FROM tbl_tin_tuc
                                LIMIT 0,5
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                    <div class="single-blog-area mb-70">
                        <div class="blog-thumbnail">
                            <a href="#"><img src="<?php echo $row['anh_minh_hoa'] ?>>" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <span>July 18, 2018</span>
                            <a href="#" class="post-title"><?php echo $row['tieu_de'] ?></a>
                            <div class="blog-meta">
                                <!-- <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a> -->
                                <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""><?php echo $row['create_at'] ?></a>
                            </div>
                            <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Tut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis.</p>
                        </div>
                    </div>
                    <?php
                            }
					;?>

                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area search-widget">
                            <form action="#" method="post">
                                <input type="search" name="search" placeholder="Search">
                                <button type="submit">Search</button>
                            </form>
                        </div>

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area tabs-widget">
                            <div class="widget-heading">
                                <h4>Latest News</h4>
                            </div>

                            <div class="credit-tabs-content">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Latest</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Comments</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                        <div class="credit-tab-content">
                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">How to get the best loan online</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/11.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">A new way to finance your dream home</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/12.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">10 tips to get the best loan for you</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                        <div class="credit-tab-content">
                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">How to get the best loan online</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/11.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">A new way to finance your dream home</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/12.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">10 tips to get the best loan for you</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                        <div class="credit-tab-content">
                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">How to get the best loan online</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/11.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">A new way to finance your dream home</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/12.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">10 tips to get the best loan for you</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### News Area End ##### -->

    <!-- ##### Newsletter Area Start ###### -->
    <?php
    include('base/newsletter.php')
    ?>
    <!-- ##### Footer Area Start ##### -->
   <?php
   include('base/footer.php')
   ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>