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
    <title>Credit - Loan &amp; Credit Company HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script>
            function calculate()
            {
                // var principal = document.getElementById("principal").value;
                // var rate = document.getElementById("rate").value;
                // var time = document.getElementById("time").value;
                var p = document.getElementById("amount").value;
                var n = document.getElementById("nums").value;
                var r = document.getElementById("rate").value;
                
                rate2 = parseFloat(r)/100;
                
                amount_interest = parseFloat(p) * (1+ (parseFloat(rate2)*n));
            
                // amt =amount_interest.toFixed(2);
                // display = Commas(amt);
                results =amount_interest;
                
                document.getElementById("result").innerHTML = results;

                // p = document.getElementById("amount").value;
                // n = document.getElementById("nums").value;
                // r = document.getElementById("rate").value;
                // result = document.getElementById("result");
                
                // result.innerHTML = "Tổng Lãnh:" + (p*n*r/100);
            }
    </script>

<!-- <script>
        $(document).ready(function(){
            $("#tinh").click(function(){
                var tiengui = $("#tiengui").val();
                var nganhang = $("#nganhang").val();
                var kyhan = $("#kyhan").val;
                $.get("tinh_lai_suat.php",{a:tiengui,b:nganhang, c:kyhan},function(data){
                        $("#ketqua").html(data);
                });
            });
        });
    </script> -->
</head>

<body>
    <!-- Preloader -->
    

    <?php
    include("base/top.php");
    ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Công Cụ Tính</li>
                                <li class="breadcrumb-item active" aria-current="page">Tính lãi tiền gửi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <section class="contact-area section-padding-10-0">
    <div class="container">
        <div class="row">
    <!-- ========== Icon Boxes ========== -->
            <div class="col-12">
                <div class="elements-title mb-30">
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
    <section class="contact-area section-padding-2-0">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-15">
                        <h2>Tính lãi tiền gửi</h2>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <!-- ##### Contact Area Start ##### -->
    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <!-- ##### Google Maps ##### -->
        <div class="map-area"
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                            <h4>Lãi Suất Tự Nhập</h4>
                                <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id ="amount" name ="txtMatKhau" class="form-control" id="name" placeholder="Số tiền gửi">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input type="text" id ="nums" name ="txtNhacLaiMatKhau"class="form-control" id="email" placeholder="Kỳ hạn(tháng)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id ="rate" name ="txtNhacLaiMatKhau"class="form-control" id="email" placeholder="Lãi suất(%)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <button class="btn credit-btn mt-13" onclick="calculate()">Kết Quả</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <h4>Tổng Lãnh</h4>
                                                <h4 id="result"></h4>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                            <h4>Lãi Suất Theo Ngân Hàng</h4>
                            <form action = "./admin/tinh_lai_suat.php" method ="post">
                                <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name ="tiengui" name ="txtSoTienGui" class="form-control" id="name" placeholder="Số tiền gửi">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                            <div class="form-group">
                                                <select class="form-control" name="nganhang">
                                                    <option value = "GPBANK">GPBANK</option>
                                                    <option value = "DongABank">DongABank</option>
                                                    <option value = "VietinBank">VietinBank</option>
                                                    <option value = "OceanBank">OceanBank</option>
                                                    <option value = "SeABank">SeABank</option>
                                                    <option value = "SaigonBank">SaigonBank</option>
                                                    <option value = "VietComBank">VietComBank</option>
                                                    <option value = "VietinBank">VietinBank</option>
                                                    <option value = "PVComBank">PVComBank</option>
                                                    <option value = "PGBank">PGBank</option>
                                                    <option value = "AgriBank">AgriBank</option>
                                                    <option value = "BaoVietBank">BaoVietBank</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select class="form-control" name="kyhan">
                                                    <option value = "K">Không kì hạn</option>
                                                    <option value = "1">1</option>
                                                    <option value = "2">2</option>
                                                    <option value = "3">3</option>
                                                    <option value = "6">6</option>
                                                    <option value = "9">9</option>
                                                    <option value = "12">12</option>
                                                    <option value = "18">18</option>
                                                    <option value = "24">24</option>
                                                    <option value = "36">36</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <button id ="tinh" type ="submit"class="btn credit-btn mt-13" >Kết Quả</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <h4>Lãi suất sẽ lấy tự động theo ngân hàng và kì hạn bạn chọn phía trên</h4>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   <?php
        include("base/footer.php")
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