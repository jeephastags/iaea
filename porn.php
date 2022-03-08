<br>
<br>
<br>


    <div class="container" id="dynamicApp">
        <h3 align ="center">รายการผ่อนสินค้า</h3>
        <br>
        <div class="panel panel-default">
            <table class="table table-hover container" style="max-width:900px;">
            <thead>
                <tr>
                    <th scope="col" style="max-width:80px;">รหัสผ่อน</th>
                    <th scope="col" style="max-width:400px;">ชื่อคนผ่อน</th>
                    <th scope="col" style="max-width:500px;">รายละเอียด</th>
                    <th scope="col" style="max-width:50px;">งวดละ</th>
                    <th scope="col" style="max-width:50px;">ผ่อนไปแล้ว</th>
                    <th scope="col" style="max-width:50px;">ต้องผ่อน</th>
                    <th scope="col" style="max-width:50px;">ราคา</th>
                    <th scope="col" style="max-width:50px;">สถานะ</th>
                    
                </tr>
            </thead>
            <?php
            
            $U_r =$_SESSION['username'];
            
            include('../condata.php');
            $sql= "SELECT * FROM porn where u_id='$U_r' and status='N' ";
			$result=$mysqli->query($sql);
			while($r=$result->fetch_array()){
            ?>
            <tbody>
                <tr v-for="data in product_Data">
                    <td> <?php echo $r[0]; ?> </td>
                    <td> <?php echo $U_r;; ?> </td>
                    <td> <?php echo $r[2]; ?> </td>
                    <td> <?php echo $r[3]; ?> </td>
                    <td> <?php echo $r[4]; ?> </td>
                    <td> <?php echo $r[5]; ?> </td>
                    <td> <?php echo $r[6]; ?> </td>
                    <td> <?php echo $r[7]; ?> </td>
                    
                    <td> <a href="porn_t.php?id=<?php echo $r[0];?>" class="btn btn-secondary">ชำระงวด</a></td>
                    
                </tr>
            </tbody>
            <?php } ?>
        </table>
        
    </div>
    



 