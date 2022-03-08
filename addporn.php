<?php
session_start();
$U_r =$_SESSION['username'];
$li0=$_POST['l1'];
$li1=$_POST['l2'];
$li2=$_POST['l3'];
$li3=$_POST['l4'];
include('../condata.php');
$lq="INSERT INTO `porn`( `u_id`, `detail`, `p_num`, `m_num`, `p_nb`, `p_numf`, `status`) VALUES ('$U_r','$li0','$li1','0','$li2','$li3','N')";
$result17=$mysqli->query($lq);
if($result17 == null ){
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