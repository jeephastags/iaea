<br>
<br>
<br>
<?php
$U_r =$_SESSION['username'];
include('../condata.php');
$tgh2="SELECT SUM(t_total) FROM `tax` WHERE u_id='$U_r' and y_t='$t3'";
$rt6=$mysqli->query($tgh2);
$s17=$rt6-> fetch_array();

?>
<div class="card text-center">
  <div class="card-header">
  คำวนภาษี<?php echo $t1,"-",$t2,"-",$t3;?>
  </div>
  <form method="post" action="tax_cal.php">
    <div class="card-body">
      <p class="card-title">รายได้/ปี<input name='ti1' value="<?php  echo $nn;?>">  บาท </p> 
      <p class="card-title" >หักค่าให้จ่าย<input name='ti2' value="<?php  echo $mm; ?>">  บาท </p> 
      <p  >ค่าลดหย่อน</h3><input name='ti3'> บาท<br></p>
      <p>ภาษีที่ต้องชำระเท่ากับ<?php echo $s17[0];?>บาท</p>
      <button type="submit" class="btn btn-primary" >คำนวนภาษี</button>
    <div class="card-footer text-muted">iaea jeep</div>
  </form>

  </div>