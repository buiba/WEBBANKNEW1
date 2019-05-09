<?php 
session_start();
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>So sánh lãi suất &amp; Lãi suất ngân hàng</title>

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
                        <h2>Lãi suất ngân hàng</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lãi Suất Ngân Hàng</li>
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
                <table class="table table-striped">
                    <thead >
                        <tr class ="table-primary">
                        <th scope="col">Tên Kì Hạn</th>
                        <th scope="col">KKH</th>
                        <th scope="col">1 Tháng</th>
                        <th scope="col">2 Tháng</th>
                        <th scope="col">3 Tháng</th>
                        <th scope="col">6 Tháng</th>
                        <th scope="col">9 Tháng</th>
                        <th scope="col">12 Tháng</th>
                        <th scope="col">18 Tháng</th>
                        <th scope="col">24 Tháng</th>
                        <th scope="col">36 Tháng</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>
                        <th scope="row">Gía Trị</th>
                        <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql="SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang = '$id'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr >
                       </table>
                    </div>
                    <div class = "row">
                   Hiển thị nội dung mô tả ngân hàng tại đây
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