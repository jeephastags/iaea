<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <br>
<br>
<br>
<?php
$t1=date("d");
$t2=date("m");
$t3=date("Y");
?>
<div class="container" id="dynamicApp">
        <h3 align ="center"> <img src="../images/icons/lens-33206.png" style="max-width:100px;"> ค้นหารายการ</h3>
        <br>
        <center><?php echo $t1,"-",$t2,"-",$t3;?></center>
        <form method='post'action='se.php'>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">วันที่</span>
                <input type="text" class="form-control"  type="password" name="li1" placeholder="วัน" >
                <span class="input-group-text">เดือน</span>
                <input type="text" class="form-control"  type="password" name="li2" placeholder="เดือน" >
                <span class="input-group-text">ปี</span>
                <input type="text" class="form-control"  type="password" name="li3" placeholder="ปี" >
                
                <button  class="btn btn-primary"type="submit">ค้นหา</button>
                <a href="home.php" class="btn btn-success" >กลับหน้าหลัก</a>
            </div>
        </form>
            <table class="table table-hover container" style="max-width:900px;">
            <thead>
                <tr>
                    
                    
                    <th scope="col" style="max-width:500px;">วัน</th>
                    <th scope="col" style="max-width:50px;">เดือน</th>
                    <th scope="col" style="max-width:50px;">ปี</th>
                    <th scope="col" style="max-width:50px;">รายการ</th>
                    <th scope="col" style="max-width:50px;">ประเภท</th>
                    <th scope="col" style="max-width:50px;">จำนวนเงิน</th>
                    
                </tr>
            </thead>
<?php

SESSION_start();
include('../condata.php');
$U_r =$_SESSION['username'];
$g1=$_POST['li1'];
$g2=$_POST['li2'];
$g3=$_POST['li3'];
$sql12="SELECT * FROM `list_e` WHERE u_id='$U_r'and dd='$g1' and mm='$g2'and yy='$g3'";
$result45=$mysqli->query($sql12); 
while($r=$result45->fetch_array()){
?>
<tbody>
    <tr v-for="data in product_Data">
        <td> <?php echo $r[2]; ?> </td>
        <td> <?php echo $r[3]; ?> </td>
        <td> <?php echo $r[4]; ?> </td>
        <td> <?php echo $r[5]; ?> </td>\
        <td> <?php echo $r[6]; ?> </td>
        <td> <?php echo $r[7]; ?> </td>         
        <td> <a href="deldata_u.php?id1=<?php echo $r[0];?>" class="btn btn-secondary" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a></td>
    </tr>
</tbody>
<?php } ?> 

            
