<?php
$id=$_GET['id'];
$id1=$_GET['id1'];
include('../condata.php');
$sql="DELETE FROM user_iaea WHERE u_id='$id'";
$sql2="DELETE FROM tax WHERE u_id='$id'";
$sql3="DELETE FROM porn WHERE u_id='$id'";
$sql4="DELETE FROM list_e WHERE u_id='$id1'";
$result=$mysqli->query($sql);
$result2=$mysqli->query($sql2);
$result3=$mysqli->query($sql3);
$result4=$mysqli->query($sql4);
if($result == null ){
    echo "<script>";
    echo "alert('กรุณากรอกข้อมูลในแบบform');";
    echo "window.location='home.php';";
    echo "</script>";

}elseif($result2 == null ){
    echo "<script>";
    echo "alert('กรุณากรอกข้อมูลในแบบform');";
    echo "window.location='home.php';";
    echo "</script>";

}elseif($result3 == null ){
    echo "<script>";
    echo "alert('กรุณากรอกข้อมูลในแบบform');";
    echo "window.location='home.php';";
    echo "</script>";

}elseif($result4 == null ){
    echo "<script>";
    echo "alert('กรุณากรอกข้อมูลในแบบform');";
    echo "window.location='home.php';";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('อัปเดตข้อมูลสำเร็จ');";
    echo "window.location='home.php';";
    echo "</script>";
}
?>