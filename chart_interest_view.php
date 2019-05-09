<?php
    ob_start();
    session_start();
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
    <title>Web so sánh &amp;cung cấp dịch vụ so sánh lãi suất</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
      <!--Start Slide logo -->
      <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 250,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1110;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <script>
    function showUser(str) {
    if (str == "") {
        document.getElementById("chartContainer").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("chartContainer").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","chart_interest?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<!--End Slide Logo -->
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
    include("base/top.php");
    ;?>
    <!-- ##### Header Area End ##### -->
    <div class="container">
    <select name="users" onchange="showUser(this.value)">
                    <?php
                      include("./config/dbconfig.php");
                      $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                        $sql="SELECT ten_loai
                            FROM tbl_loai_lai_suat
                            ";   
                            $dulieu = mysqli_query($ketnoi,$sql);
                            while ($row = mysqli_fetch_array($dulieu)){
					;?>
                    <option value="<?php echo $row['ten_loai'] ?>"><?php echo $row['ten_loai']?></option>
                    <?php
                        }
					;?>
                    </select>
                    <div id="chartContainer"><b>Bảng sẽ hiển thị tại đây</b></div>
    </div>
    <!-- ##### Call To Action Start ###### -->
  
    <!-- ##### Miscellaneous Area Start ###### -->
    <section class="miscellaneous-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <!-- Add Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="add-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                    </div>
                </div>

                <!-- Contact Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Section Heading -->
                        <div class="section-heading mb-50">
                            <div class="line"></div>
                            <h2>Liên hệ với chúng tôi</h2>
                        </div>
                        <!-- Contact Content -->
                        <div class="contact-content">
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/location.png" alt="">
                                </div>
                                <div class="text">
                                    <p> <br>Ngõ 12 Chùa Bộc Đống Đa Hà Nội</p>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/call.png" alt="">
                                </div>
                                <div class="text">
                                    <p>337-413-9538</p>
                                    <span>T2-T6 , 08.am - 17.pm</span>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/message2.png" alt="">
                                </div>
                                <div class="text">
                                    <p>hotrowebsosanh@gmail.com</p>
                                    <span>Chúng tôi sẽ trả lời sớm nhất</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Section Heading -->
                        <div class="section-heading mb-50">
                            <div class="line"></div>
                            <h2>Tin tức mới nhất</h2>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/10.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span> 29/3/2019</span>
                                <a href="#">Lãi suất vay mua ô tô tháng 4</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Buiba</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> 29/3/2019</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/11.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span> 29/3/2019</span>
                                <a href="#">Lãi suất gửi tiết kiệm tháng 4</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Buiba</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> 29/3/2019</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span> 29/3/2019</span>
                                <a href="#">Lãi suất vay mua nhà tháng 4</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Buiba</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> 29/3/2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ###### -->

    <!-- ##### Slide Logo Start ###### -->
    <div class="container">
        <div class="row">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:50%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
                    <div>
                        <img data-u="image" src="img/bidv.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/citibank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/hongleongbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/lienvietpostbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/mbbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/pvcombank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/shbbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/shinhanbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/standerd-chartered.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/techcombank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/tpbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/uob.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/vibbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/vietcombank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/vietinbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/vpbank.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    <!-- ##### Slide Logo End ###### -->

    <!-- ##### Newsletter Area Start ###### -->
   <?php
        include('base/newsletter.php');
   ?>
    <!-- ##### Newsletter Area End ###### -->
    <!-- ##### Slide Logo Bank Start ###### -->
    
    <!-- ##### Slide Logo Bank End ###### -->
    <!-- ##### Footer Area Start ##### -->
    <?php
        include("base/footer.php");
    ;?>
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