<br>
<br>
<br>


    <div class="container" id="dynamicApp">
        <h3 align ="center">ค้นหารายการ</h3>
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
            </div>
        </form>

        
    </div>
    <div class="panel panel-default">
            
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
$U_r =$_SESSION['username'];
// $g1=$_POST['li1'];
// $g2=$_POST['li2'];
// $g3=$_POST['li3'];
// $g4=$_POST['li4'];
// $g5=$_POST['li5'];

    $sql="SELECT * FROM list_e  where u_id='$U_r' and dd='$t1'and mm='$t2'and yy='$t3'";
    $result=$mysqli->query($sql);

    // $sql="SELECT * FROM list_e  where u_id='$U_r' and dd='$g1'and mm='$g2'and yy='$g3' and list_q='$g4' and g_name='$g5'";
    // $result=$mysqli->query($sql);

while($r=$result->fetch_array()){

?>
<tbody>
                <tr v-for="data in product_Data">
                    
                    <td> <?php echo $r[2]; ?> </td>
                    <td> <?php echo $r[3]; ?> </td>
                    <td> <?php echo $r[4]; ?> </td>
                    <td> <?php echo $r[5]; ?> </td>
                    <td> <?php echo $r[6]; ?> </td>
                    <td> <?php echo $r[7]; ?> </td>
                    
                    <td> <a href="deldata_u.php?id=<?php echo $r[0];?>" class="btn btn-secondary" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a></td>
                    
                </tr>
            </tbody>
            <?php } ?>



 