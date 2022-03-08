<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
      <h4 align="center"> <img src="../images/icons/loo.png" style="max-width:100px;">  จัดการบัญชีผู้ใช้ </h4>
      <hr />
      <?php
      include('../condata.php');
      $r=$_GET['id'];

      $t="SELECT * FROM `user_iaea` WHERE u_id='$r'";
      $result346=$mysqli->query($t);
      $s=$result346-> fetch_array();
      ?>
      <form action="updata_u.php" method="POST" >
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อเจ้าของบัญชี</p>
            <input type="hidden" name="p0" value="<?php echo $s[0]?>">
            <input type="text"  name="p1" class="form-control" required placeholder="ชื่อเจ้าของบัญชี" value="<?php echo $s[1] ;?>">
          </div>
        </div>
        <div class="form-group">
			<div class="col-sm-3">
            <p> รหัสผ่าน </p>
            <input type="text"  name="p2" class="form-control" required placeholder="pass" value="<?php echo $s[2] ;?>">
          </div>
         <div class="form-group">
          <div class="col-sm-3">
            <p> สถานะผู้ใช้ </p>
            <input type="text"  name="p3" class="form-control" required placeholder="status" value="<?php echo $s[3] ;?>">
            <br>
          
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" name="btnadd"> อัพเดตข้อมูล </button><br><br>
		 
          </div>
        </div>
      </form>
    </div>
  </div>
</div>