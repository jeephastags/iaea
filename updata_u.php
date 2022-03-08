<?php
session_start();
$t10=$_POST['p0'];
$b=$_POST['p1'];
$e=$_POST['p2'];
$n=$_POST['p3'];
$r=$_SESSION['userlevel'];

include('../condata.php');
if($r==U){
    $sql89="UPDATE `user_iaea` SET `u_name`='$b',`pass`='$e'WHERE u_id='$t10'";
    $result=$mysqli->query($sql89);
    if($result == null ){
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

}else{
    $sql="UPDATE `user_iaea` SET `u_name`='$b',`pass`='$e',`user_lv`='$n' WHERE u_id='$t10'";
    $result=$mysqli->query($sql);
    if($result == null ){
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
    


}

?>