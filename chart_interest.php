<?php
 $dataPoints = array();
 include("./config/dbconfig.php");
 $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

 $sql="SELECT ten_ngan_hang, gia_tri
 FROM tbl_lai_suat_tiet_kiem
 WHERE ten_lai_suat LIKE '1_T%'
 ";   
 $result = mysqli_query($ketnoi,$sql);

 while($row = mysqli_fetch_array($result))
 {        
	 $point = array("y" => $row['gia_tri'] , "label" => $row['ten_ngan_hang']);

	 array_push($dataPoints, $point);        
 }

 //echo json_encode($dataPoints, JSON_NUMERIC_CHECK);
     
// 	 $dataPoints = array(
// 		 array("y" => 0.25, "label" => "Sunday"),
// 		 array("y" => 15, "label" => "Monday"),
// 		 array("y" => 25, "label" => "Tuesday"),
// 		 array("y" => 5, "label" => "Wednesday"),
// 		 array("y" => 10, "label" => "Thursday"),
// 		 array("y" => 0, "label" => "Friday"),
// 		 array("y" => 20, "label" => "Saturday")
// 	 );
	  
	 ?>
	 <!DOCTYPE HTML>
	 <html>
	 <head>
	 <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Web so sánh &amp;cung cấp dịch vụ so sánh lãi suất theo kỳ hạn</title>

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
	 window.onload = function () {
	  
	 var chart = new CanvasJS.Chart("chartContainer", {
		 title: {
			 text: "So sánh lãi theo kì"
		 },
		 axisY: {
			 title: "Lãi suất"
		 },
		 data: [{
			 type: "line",
			 dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		 }]
	 });
	 chart.render();
	  
	 }
	 </script>

	 </head>
	 <body>
	 <?php
    include("base/top.php");
    ;?>
	 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
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
	 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	 </body>
	 </html>                              