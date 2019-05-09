<?php 
	session_start();
	
	$sotiengui = $_POST['tiengui'];
	//echo $sotiengui;
	$nganhang = $_POST['nganhang'];
	$kyhan = $_POST['kyhan'];
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	$laisuat = "
	SELECT `gia_tri`
	FROM `tbl_lai_suat_tiet_kiem` 
	WHERE `ten_ngan_hang` = '$nganhang' AND `ten_lai_suat` = '$kyhan'+'_T'
	";
	//echo $laisuat;
	$tonglanh = "";
	$datalaisuat = mysqli_query($ketnoi, $laisuat);
	while($row = mysqli_fetch_array($datalaisuat)) {
		$laisuat =  $row['gia_tri'];
	}
	$rate2 = ($laisuat)/100;
	$amount_interest = ($sotiengui) * (1+ (($rate2)*$kyhan));
	//echo $laisuat;
	//echo $amount_interest;
	//$tonglanh = $sotiengui + $sotiengui*0.1;
	echo '
		<script type="text/javascript">
			var result = <?php echo $amount_interest ?>
			alert (result);
			alert("Tổng số tiền bạn nhận được là!!!");
			window.location.href="caculator_interest_deposits.php";
		</script>';
;?>