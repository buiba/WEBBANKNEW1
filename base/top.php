<header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                               <a href="index.html"><img src="img/core-img/logobank.png" alt="LOGO BANK"></a>
                        </div>
                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="0988950408"><img src="img/core-img/call.png" alt=""> <span>+84988950408</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="babuimis.hvnh@gmail.com"><img src="img/core-img/message.png" alt=""> <span>hotrowebsosanh@gmail.com</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ngõ 12, Chùa Bộc, Đống Đa, Hà Nội"><img src="img/core-img/placeholder.png" alt=""> <span>Ngõ 12, Chùa Bộc, Đống Đa, Hà Nội</span></a>         
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">
                           
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">                           
                                <ul>                             
                                    <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="about.php">Giới thiệu</a></li>
                                    <li><a href="#">Gửi tiết kiệm</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="lai_suat_ngan_hang.php?id=1">So Sánh Lãi Suất</a></li>
                                                <li><a href="lai_suat_ngan_hang.php?id=GPBANK">Lãi suất Ngân Hàng GPBANK</a></li>
                                                <li><a href="lai_suat_ngan_hang.php?id=DongABank">Lãi suất Ngân Hàng DongABank</a></li>
                                               
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="lai_suat_ngan_hang.php?id=VietinBank"> Lãi suất Ngân Hàng VietinBank</a></li>
                                                <li><a href="lai_suat_ngan_hang.php?id=OceanBank"> Lãi suất Ngân Hàng OceanBank</a></li>
                                                <li><a href="lai_suat_ngan_hang.php?id=SeABank">Lãi suất Ngân Hàng SeABank</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="lai_suat_ngan_hang.php?id=SaigonBank">Lãi suất Ngân Hàng SaigonBank</a></li>
                                                <li><a href="lai_suat_ngan_hang.php?id=Vietcombank">Lãi suất Ngân Vietcombank</a></li>
                                                <li><a href="lai_suat_ngan_hang.php?id=PVComBank">Lãi suất Ngân PVComBank</a></li>                                      
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                            <li><a href="lai_suat_ngan_hang.php?id=PGBank">Lãi suất Ngân PGBank</a></li>
                                            <li><a href="lai_suat_ngan_hang.php?id=AgriBank">Lãi suất Ngân AgriBank</a></li>
                                            <li><a href="lai_suat_ngan_hang.php?id=BaoVietBank">Lãi suất Ngân BaoVietBank</a></li>                                        
                                            </ul>                                           
                                        </div>
                                    </li>
                                    <li><a href="post.html">Công Cụ</a>
                                        <ul class="dropdown">
                                                <li><a href="caculator_interest_2.php">Tính lãi tiền gửi</a></li>
                                                <li><a href="chart_interest.php">Biểu đồ lãi suất</a></li>
                                                <li><a href="services.html">Tỷ giá ngoại tệ</a></li>     
                                            </ul>
                                    </li>
                                    <li><a href="post.html">Tư Vấn</a>
                                        <ul class="dropdown">
                                                <li><a href="contact.php">Nhận tư vấn</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="news.php">Tin tức</a></li>
                                    <li><a href="recommend_location.php">Điểm đặt ATM</a></li> 
                                    <li><a href="sigup.php">Đăng kí</a></li>
                                    <?php
                                    if(isset($_SESSION['tai_khoan']))
                                    {
                                        echo"Xin Chào".$_SESSION['tai_khoan']."  <a href='./admin/dang_xuat.php'>Đăng xuất</a>";
                                    }
                                    else{
                                        
                                        echo"<li><a href='login.php'>Đăng nhập</a><li>";
                                    }
                                    ;?>    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>