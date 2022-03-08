
<br>
<br>
<br>
<div class="card text-center ">
  <div class="card-header" >
  สรุปยอด <?php echo $t1,"-",$t2,"-",$t3;?>
  </div>
  <div class="card-body">
    <h3 class="card-title">รายรับ <?php  echo $er;?> บาท </h3> 
    <h3 class="card-title">รายจ่าย <?php  echo $qw; ?> บาท </h3> 
    <h4 class="card-text">คงเหลือ <?php echo $er-$qw;?> บาท  </h4> 
    <h5 class="card-text">เงินเก็บสุทธิ <?php echo $ty-$tu;?> บาท  </h5>
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">เพิ่มรายการ</button>
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">เพิ่มรายการผ่อน</button>
    
    <div class="card-footer text-muted">iaea jeep</div>
  </div>
  <form method="post" action="addlist_e.php">
								
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">เพิ่มรายการ</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">ชื่อเจ้าของบัญชี </span>
              <input type="text" class="form-control"name="username2" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $U_r; ?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">รายการ</span>
              <input type="text" class="form-control"  name="li" placeholder="รายการ">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">วันที่</span>
              <input type="text" class="form-control"  type="password" name="li1" placeholder="รายการ" value="<?php echo $t1;  ?>">
              <span class="input-group-text">เดือน</span>
              <input type="text" class="form-control"  type="password" name="li2" placeholder="รายการ" value="<?php echo $t2;  ?>">
              <span class="input-group-text">ปี</span>
              <input type="text" class="form-control"  type="password" name="li3" placeholder="รายการ" value="<?php echo $t3;  ?>">
            </div>
            <div>
              <select class="form-select" aria-label="Default select example" name=li4>
                <option selected>เลือกประเภทรายการ</option>
                <option value="รายรับ" required >รายรับ</option>
                <option value="รายจ่าย">รายจ่าย</option>
              </select>
            </div>  
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">จำนวนเงิน</span>
              <input type="text" class="form-control"  type="password" name="li5" placeholder="จำวนวนเงิน"> บาท
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            <button  class="btn btn-primary" type="submit">เพิ่มรายการ</button>
          </div>
        </div>
      </div>
    </div>


            
        
  </form>
  <form method="post" action="addporn.php">
								
		<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">เพิ่มรายการ</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">ชื่อเจ้าของบัญชี </span>
              <input type="text" class="form-control"name="username2" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $U_r; ?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">รายการ</span>
              <input type="text" class="form-control"  name="l1" placeholder="รายการ">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">รายละเอียดการผ่อน</span>
              <input type="text" class="form-control"  type="password" name="l2" placeholder="งวดละ">
              <input type="text" class="form-control"  type="password" name="l3" placeholder="ต้องผ่อนกี่งวด" ">
              <input type="text" class="form-control"  type="password" name="l4" placeholder="ราคา" ">
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            <button  class="btn btn-primary" type="submit">เพิ่มรายการ</button>
          </div>
        </div>
      </div>
    </div>
    </form>
  
 
  <div class="modal-footer">
</div>
