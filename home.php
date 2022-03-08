<?php
session_start();
$U_r =$_SESSION['username'];

include('../condata.php');
$t1=date("d");
$t2=date("m");
$t3=date("Y");

$sql1="SELECT SUM(li_num) FROM `list_e` where u_id='$U_r' and g_name='รายจ่าย' and mm='$t2'";
$ql="SELECT SUM(li_num) FROM `list_e` where u_id='$U_r' and g_name='รายรับ' and mm='$t2'";
$sql2="SELECT SUM(li_num) FROM `list_e` where u_id='$U_r' and g_name='รายรับ'";
$sql3="SELECT SUM(li_num) FROM `list_e` where u_id='$U_r' and g_name='รายจ่าย'";
$sql30="SELECT SUM(li_num) FROM `list_e` where u_id='$U_r' and g_name='รายจ่าย' and yy='$t3'";
$ql12="SELECT SUM(li_num) FROM `list_e` where u_id='$U_r' and g_name='รายรับ' and yy='$t3'";
$result2=$mysqli->query($sql1);
$s=$result2-> fetch_array();

$result3=$mysqli->query($sql2);
$o=$result3-> fetch_array();

$result4=$mysqli->query($sql3);
$o1=$result4-> fetch_array();

$result=$mysqli->query($ql);
$s1=$result-> fetch_array();

$result34=$mysqli->query($sql30);
$s15=$result34-> fetch_array();

$result35=$mysqli->query($ql12);
$s14=$result35-> fetch_array();

$nn=(int)$s14[0];
$mm=(int)$s15[0];
$qw = (int)$s[0];
$er = (int)$s1[0];
$ty = (int)$o[0];
$tu = (int)$o1[0]; 
if($_SESSION['page'] == null){
  $home = "home";
  $_SESSION['page'] = $home;
  header('Location: ../index.php');
}

?>


<title> 
  <?php
if($_SESSION['page'] == "home"){
  echo 'home';
}elseif($_SESSION['page'] == "porn"){
  echo 'ผ่อนอยู่';
}elseif($_SESSION['page'] == "search"){
  echo 'ค้นหารายการ';
}elseif($_SESSION['page'] == "Tax"){
  echo 'คำนวนภาษี';
}elseif($_SESSION['page'] == "page"){
  echo 'จักการบัญชีผู้ใช้';
}elseif($_SESSION['page'] == "porn_fin"){
  echo 'ผ่อนเสร็จแล้ว';
}else{
  echo 'หน้าแรก';
}
    ?>
</title>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg  navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse justify-content-center nav-tabs" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a  class="nav-link <?php if ($_SESSION['page'] == "home") echo 'active'; ?>" aria-current="page" href="../action2.php?page=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_SESSION['page'] == "porn") echo 'active'; ?>" aria-current="page" href="../action2.php?page=porn">ผ่อนอยู่</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_SESSION['page'] == "search") echo 'active'; ?>" aria-current="page" href="../action2.php?page=search">ค้นหา</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_SESSION['page'] == "tax") echo 'active'; ?>" aria-current="page" href="../action2.php?page=tax">Tax</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="../images/icons/loo.png" style="max-width:30px;"><?php echo $U_r ?> </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li> <a class="nav-link <?php if ($_SESSION['page'] == "page") echo 'active'; ?>" aria-current="page" href="../action2.php?page=page">จัดการบัญชีผู้ใช้</a></li>
          <li> <a class="nav-link <?php if ($_SESSION['page'] == "porn_fin") echo 'active'; ?>" aria-current="page" href="../action2.php?page=porn_fin">ผ่อนเสร็จแล้ว</a> </li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="../out.php">ออกจากระบบ</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
<?php
if($_SESSION['page'] == "home"){
  include('home3.php');
}elseif($_SESSION['page'] == "porn"){
  include('porn.php');
}elseif($_SESSION['page'] == "search"){
  include('search.php');
}elseif($_SESSION['page'] == "tax"){
  include('Taxs.php');
}elseif($_SESSION['page'] == "page"){
  include('page.php');
}elseif($_SESSION['page'] == "porn_fin"){
  include('porn_fin.php');
}else{
  echo("ต้องมีอะไรผิดพลาดแน่ๆ");
}
?>
