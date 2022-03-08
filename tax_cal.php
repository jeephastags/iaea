<?php
session_start();
$U_r =$_SESSION['username'];
$t1=$_POST['ti1'];
$t2=$_POST['ti2'];
$t3=$_POST['ti3'];
$t4=(int)$t3;
include('../condata.php');
$t01=date("d");
$t02=date("m");
$t03=date("Y");
$ex=$t1-$t2-$t4;
// echo $ex;
if($ex<=150000){
    $q1=($ex*0)/100;
    $sqle="INSERT INTO `tax`( `u_id`, `d_t`, `m_t`, `y_t`, `t_in`, `t_out`, `t_lod`, `t_total`) VALUES ('$U_r','$t01','$t02','$t03','$t1','$t2','$t3','$q1')";
    $result45=$mysqli->query($sqle);
    if($result45 == null ){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลในแบบform');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }else{
        echo "<script>";
        echo "alert('ไม่ต้องชำระภาษี');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }

}elseif($ex>=150001 and $ex<=300000){
    $q2=$ex-150000;
    $d1=($q2*5)/100;
    $sqlq="INSERT INTO `tax`( `u_id`, `d_t`, `m_t`, `y_t`, `t_in`, `t_out`, `t_lod`, `t_total`) VALUES ('$U_r','$t01','$t02','$t03','$t1','$t2','$t3','$d1')";
    $result45=$mysqli->query($sqlq);
    if($result45 == null ){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลในแบบform');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }else{
        echo "<script>";
        echo "alert('ต้องชำระภาษี');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }



}elseif($ex>=300001 and $ex<=500000){
    $egr=7500;
    $q2=$ex-300000;
    $d1=($q2*10)/100;
    $as=$egr+$d1;
    $sqle="INSERT INTO `tax`( `u_id`, `d_t`, `m_t`, `y_t`, `t_in`, `t_out`, `t_lod`, `t_total`) VALUES ('$U_r','$t01','$t02','$t03','$t1','$t2','$t3','$as')";
    $result45=$mysqli->query($sqle);
    if($result45 == null ){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลในแบบform');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }else{
        echo "<script>";
        echo "alert('ต้องชำระภาษี10%');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }

}elseif($ex>=500001 and $ex<=750000){
    $egr=7500;
    $gsr=20000;
    $as=$egr+$gsr+$d1;
    $q2=$ex-500000;
    $d1=($q2*15)/100;    
    $sqle="INSERT INTO `tax`( `u_id`, `d_t`, `m_t`, `y_t`, `t_in`, `t_out`, `t_lod`, `t_total`) VALUES ('$U_r','$t01','$t02','$t03','$t1','$t2','$t3','$g')";
    $result45=$mysqli->query($sqle);
    if($result45 == null ){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลในแบบform');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }else{
        echo "<script>";
        echo "alert('ต้องชำระภาษี15%');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }
   
    
}elseif($ex>=750001 and $ex<=1000000){
    $egr=7500;
    $gsr=20000;
    $ets=37500;
    $q2=$ex-750000;
    $d1=($q2*20)/100;
    $as=$ets+$egr+$gsr+$d1;
    $sqle="INSERT INTO `tax`( `u_id`, `d_t`, `m_t`, `y_t`, `t_in`, `t_out`, `t_lod`, `t_total`) VALUES ('$U_r','$t01','$t02','$t03','$t1','$t2','$t3','$g')";
    $result45=$mysqli->query($sqle);
    if($result45 == null ){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลในแบบform');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }else{
        echo "<script>";
        echo "alert('ต้องชำระภาษี20%');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }   
    
    
}elseif($ex>=1000001 and $ex<=2000000){
    $egr=7500;
    $gsr=20000;
    $ets=37500;
    $rx7=50000;
    $as=$ets+$egr+$gsr+$d1+$rx7;
    $q2=$ex-1000000;
    $d1=($q2*25)/100;
    $sqle="INSERT INTO `tax`( `u_id`, `d_t`, `m_t`, `y_t`, `t_in`, `t_out`, `t_lod`, `t_total`) VALUES ('$U_r','$t01','$t02','$t03','$t1','$t2','$t3','$g')";
    $result45=$mysqli->query($sqle);
    if($result45 == null ){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลในแบบform');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }else{
        echo "<script>";
        echo "alert('ต้องชำระภาษี25%');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }   
    
}elseif($ex>=2000001 and $ex<=5000000){
    $egr=7500;
    $gsr=20000;
    $ets=37500;
    $rx7=50000;
    $wrx=250000;
    $as=$wrx+$ets+$egr+$gsr+$d1+$rx7;
    $q2=$ex-2000000;
    $d1=($q2*30)/100;
    $sqle="INSERT INTO `tax`( `u_id`, `d_t`, `m_t`, `y_t`, `t_in`, `t_out`, `t_lod`, `t_total`) VALUES ('$U_r','$t01','$t02','$t03','$t1','$t2','$t3','$g')";
    $result45=$mysqli->query($sqle);
    if($result45 == null ){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลในแบบform');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }else{
        echo "<script>";
        echo "alert('ต้องชำระภาษี30%');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }   
    
}else{
    $egr=7500;
    $gsr=20000;
    $ets=37500;
    $rx7=50000;
    $wrx=250000;
    $gkk=900000;
    $as=$gkk+$wrx+$ets+$egr+$gsr+$d1+$rx7;
    $q2=$ex-5000000;
    $d1=($q2*35)/100;
    $sqle="INSERT INTO `tax`( `u_id`, `d_t`, `m_t`, `y_t`, `t_in`, `t_out`, `t_lod`, `t_total`) VALUES ('$U_r','$t01','$t02','$t03','$t1','$t2','$t3','$g')";
    $result45=$mysqli->query($sqle);
    if($result45 == null ){
        echo "<script>";
        echo "alert('กรุณากรอกข้อมูลในแบบform');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }else{
        echo "<script>";
        echo "alert('ต้องชำระภาษี30%');";
        echo "window.location='home.php';";
        echo "</script>";
    
    }   


}


?>