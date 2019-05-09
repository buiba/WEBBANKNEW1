
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    /* border-collapse: collapse; */
}

table, td, th {
    /* border: 1px solid black; */
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

include("./config/dbconfig.php");
$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

$sql="SELECT ten_ngan_hang, gia_tri, ten_lai_suat
FROM tbl_lai_suat_tiet_kiem
WHERE ten_lai_suat LIKE '%$q%'
ORDER BY gia_tri DESC
LIMIT 3
";   
//echo $sql;
$dulieu = mysqli_query($ketnoi,$sql);

echo "<table>
<tr>
<th>Tên ngân hàng</th>
<th>Kỳ hạn(Tháng)</th>
<th>Giá trị</th>
</tr>";
while($row = mysqli_fetch_array($dulieu)) {
    echo "<tr>";
    echo "<td>" . $row['ten_ngan_hang'] . "</td>";
    echo "<td>" . $row['ten_lai_suat'] . "</td>";
    echo "<td>" . $row['gia_tri'] . "</td>";
    echo "</tr>";
}
echo "</table>";
//mysqli_close($con);
?>
</body>
</html> 