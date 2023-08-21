<?php
    // set page title
    $pageTitle = "Quản trị - LeoPard";

    // header
    // require_once './utils/header.php';

	if (isset($_POST['nutdx'])) {
		session_unset();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản trị</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylecss.css">
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid row">
	    <a class="navbar-brand col-4" href="http://localhost/ungdungcongnghe/shoe_store">LeoPard Store</a>
	    
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-0 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
	        </li>
	        <li class="nav-item">

	          

	          <?php
					if (isset($_SESSION['tennd'])) {
						if ($_SESSION['quyennd']==1) {
							?>
							<li><a class="nav-link active" aria-current="page" href="index.php?action=quantri">Quản trị</a></li>
							<a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION['tennd']; ?> 
							</a>
							<li><form method="post"><input type="submit" name="nutdx" value="Đăng xuất"></form>
							</li>
							
							<?php
						}
						else{
							?>
							<a class="nav-link active" aria-current="page" href="#"> <?php echo $_SESSION['tennd']; ?> 
							</a>
							<li><form method="post"><input type="submit" name="nutdx" value="Đăng xuất"></form></li>

							<?php

						}
					
					
					}else {
						?>
							<a class="nav-link" href="index.php?action=dangnhap">Đăng nhập</a>
						<?php
					} ?>





	        </li>
	      </ul>
	      
	    </div>
	  </div>
	</nav>

	  <div class="row">
	    <div class="col-2">

	    	<nav class="nav flex-column">
	    		<?php
						foreach ($data as $value) {
						?>
							<a class="nav-link" href="index.php?action=quantri&idloai=<?php echo $value['id_loaisp'] ?>">

								<?php echo $value['ten_loaisp'];
								?>
							</a>
							
						<?php
						}
						?>
			  			<a href="index.php?action=themsanpham" class="nav-link">Thêm sản phẩm</a>
			</nav>
	    </div>
	    <div class="col-10">
	    	<table class="table table-striped">
	  			<thead>
				    <tr>
				      <th scope="col">STT</th>
				      <th scope="col">Tên</th>
				      <th scope="col">Hình ảnh</th>
				      <th scope="col">Giá</th>
				      <th scope="col">Ngày nhập</th>
				      <th scope="col">Loại</th>
				      <th scope="col">Mô tả sản phẩm</th>
				      <th scope="col">Xử lý</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  		$stt=1;
						if (isset($_GET['idloai'])) {
							if($data2==0){
									echo "Đang cập nhật";
								}else{
									foreach ($data2 as $value) {
										
									?>
									<tr>
								      <th scope="row"><?php echo $stt++; ?></th>
								      <td><?php echo $value['ten_sp'];?></td>
								      <td><img src="<?php echo $value['hinhanh_sp'];?>" class="card-img-top" alt="..."></td>
								      <td><?php echo $value['gia_sp'];?></td>
								      <td><?php echo $value['ngaynhap_sp'];?></td>
								      <td><?php echo $value['ten_loaisp'];?></td>
								      <td><?php echo $value['mota_sp'];?></td>
								      <td><a href="#">Sửa</a>/<a href="#">Xóa</a></td>
								    </tr>
									
									<?php
									}
								}
						}
						else{
							if($data1==0){
									echo "Đang cập nhật";
								}else{
									
								
									foreach ($data1 as $value) {

									?>
										<tr>
									      <th scope="row"><?php echo $stt++; ?></th>
									      <td><?php echo $value['ten_sp'];?></td>
									      <td><img src="<?php echo $value['hinhanh_sp'];?>" class="card-img-top" alt="..."></td>
									      <td><?php echo $value['gia_sp'];?></td>
									      
									      <td><?php echo $value['ngaynhap_sp'];?></td>
									      <td><?php echo $value['ten_loaisp'];?></td>
									      <td><?php echo $value['mota_sp'];?></td>
									      
									      <td>
											<a href="index.php?action=sua&id_sua=<?php echo $value['id_sp'];?>">Sửa</a>/<a href="index.php?action=xoasanpham&id_xoa=<?php echo $value['id_sp']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a></td>
									    </tr>
									<?php
									}
								}
						}
					?>
				    
				  </tbody>
			</table>
	    	

	    	
	    </div>
	  </div>
	  
	</div>
</body>
</html>