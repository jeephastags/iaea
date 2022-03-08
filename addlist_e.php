
<?php
session_start();
$U_r =$_SESSION['username'];
$li0=$_POST['li'];
$li1=$_POST['li1'];
$li2=$_POST['li2'];
$li3=$_POST['li3'];
$li4=$_POST['li4'];
$li5=$_POST['li5'];
include('../condata.php');
$sql12="INSERT INTO `list_e`( `u_id`, `dd`, `mm`, `yy`, `list_q`, `g_name`, `li_num`) VALUES ('$U_r','$li1','$li2','$li3','$li0','$li4','$li5')";
$result12=$mysqli->query($sql12);
if($result12 == null ){
    echo "<script>";
    echo "alert('กรุณากรอกข้อมูลในแบบform');";
    echo "window.location='home.php';";
    echo "</script>";

}else{
    echo "<script>";
    echo "alert('บันทึกรายการสำเร็จ');";
    echo "window.location='home.php';";
    echo "</script>";

}
?>