<div class="container" id="dynamicApp">
    <h3 align ="center">จัดการบัญชีผู้ใช้</h3>
    <br>
    <div class="panel panel-default">
        <table class="table table-hover container" style="max-width:600px;">
        <thead>
            <tr>
                <th scope="col" style="max-width:400px;">รหัสบัญชี</th>
                <th scope="col" style="max-width:400px;">ชื่อบัญชี</th>
                <th scope="col" style="max-width:500px;">รหัสผ่าน</th>
                <th scope="col" style="max-width:50px;">สถานะ</th>
            </tr>
        </thead>
        <?php
        $ul=$_SESSION['userlevel'];
        $U_r =$_SESSION['username'];
        if($ul=='A'){
            $ol="SELECT * FROM `user_iaea`";
            $result34=$mysqli->query($ol);
        }elseif($ul=='U'){
            $rg="SELECT * FROM `user_iaea` WHERE u_name='$U_r'";
            $result34=$mysqli->query($rg);
        }else{
            echo("ต้องมีอะไรผิดพลาดแน่ๆ");
            }
            while($op=$result34-> fetch_array()){
                ?>
                <tbody>
                    
                        <td> <?php echo $op[0]; ?> </td>
                        <td> <?php echo $op[1]; ?> </td>
                        <td> <?php echo $op[2]; ?> </td>
                        <td><?php echo $op[3]; ?> </td><td>
                        <a href="u_ti.php?id=<?php echo $op[0];?>" class="btn btn-primary">แก้ไขข้อมูล</a>
                        <a href="deldata_u.php?id=<?php echo $op[0];?>" class="btn btn-secondary" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                            
                        </td>
                    
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>

    
</div>


