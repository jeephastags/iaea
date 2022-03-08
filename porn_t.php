
<?php 
session_start();
$U_r =$_SESSION['username'];
$id=$_GET['id'];
include('../condata.php');
$sql= "SELECT * FROM porn where p_id='$id'";
$result=$mysqli->query($sql);
$r=$result-> fetch_array();
$R=(int)$r[4];
$lm=(int)$r[5];
$ok=$R+1;
$t1=date("d");
$t2=date("m");
$t3=date("Y");
$k=$r[2];
$g=$r[3];   
if($R<$lm){
    
    $gtr="UPDATE `porn` SET `m_num`='$ok'  WHERE p_id ='$id'";
    $sql12="INSERT INTO `list_e`( `u_id`, `dd`, `mm`, `yy`, `list_q`, `g_name`, `li_num`) VALUES ('$U_r','$t1','$t2','$t3','$k','รายจ่าย','$g')";
    $result22=$mysqli->query($sql12);
    $result20=$mysqli->query($gtr);
    if($result20 == null and $result22==null){
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

}elseif ($R==$lm){
    $fc="UPDATE `porn` SET`status`='Y' WHERE p_id='$id'";
    $result21=$mysqli->query($fc);
    if($result21 == null ){
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

}else{
    echo ("ต้องมีอะไรผิดพลาดแน่ๆ");
}
?>