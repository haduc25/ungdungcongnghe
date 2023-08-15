<!DOCTYPE html>
<html>
<head>
	<title>Thêm sản phẩm</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Thêm sản phẩm</h5>
		    
		  </div>
		</div>
		<form method="post">
		  <div class="mb-3">
		    <label class="form-label">Tên sản phẩm</label>
		    <input type="text" class="form-control" name="tsp">
		    
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Giá sản phẩm</label>
		    <input type="text" class="form-control" name="gsp">
		    
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Mô tả sản phẩm</label>
		    <input type="text" class="form-control" name="mtsp">
		    
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label">Hình ảnh sản phẩm</label>
		    <input type="file" class="form-control" name="lha">
		    
		  </div>
		  <div class="mb-3">
		      <label class="form-label">Loại sản phẩm</label>
		      <select class="form-select form-control" aria-label="Default select example" name="idlsp">
				  <option selected>Chọn loại sản phẩm</option>
				  <?php
						foreach ($data as $value) {
						?>
				  <option value="<?php echo $value['id_loaisp'];?>"><?php echo $value['ten_loaisp']; ?></option>
				  <?php } ?>
			  </select>
		   </div>
		  
		  <input type="submit" class="btn btn-lg btn-primary" name="them" value="THÊM">
		</form>
	</div>
	
</body>
</html>