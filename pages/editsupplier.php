<?php
  $stmt = $con->prepare("SELECT * FROM supplier");
        $stmt->execute();
        $result = $stmt->get_result();
      $data = "";
        $r=$result->fetch_assoc();

            



?>
    
    <div class="container" style="margin:auto;width:60%">
    <div class="breadcrumb">UPDATE SUPPLIER</div>
    <form method="POST" id="registerform" action="brain/controller.php">
       <input type="hidden" value="updatesupplier" name="request">
        <input type="hidden" name="id" value="<?= $_GET['id']?>">
         <div id="response"></div>
        <div class="form-group">
            <label for="exampleInputPassword1">COMPANY NAME:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter company name" autocomplete="off" value="<?= $r['name']?>" require>
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">ADDRESS:</label>
            <input type="text" class="form-control" value="<?= $r['address']?>" name="address"  placeholder="Enter address " required>
        </div>
           <div class="form-group">
            <label for="quantity">BRAND ADVERTISE:</label>
            <input type="text" class="form-control" value="<?= $r['brand']?>" name="brand" placeholder="Enter brand advertise">
        </div>
        <button type="submit" class="btn btn-success btn-block">UPDATE</button>
    </form>
     
    </div>