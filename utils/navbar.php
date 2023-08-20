<?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<div class="navbar">
	<div class="logo">
		<a href="http://localhost/ungdungcongnghe/shoe_store"><img src="images/logo.png" width="185px"></a>
	</div>
	<nav>
		<ul id="MenuItems">
			<li><a href="http://localhost/ungdungcongnghe/shoe_store">Trang chủ</a></li>
			<li><a href="index.php?action=sanpham">Sản phẩm</a></li>
			<li><a href="">Giới thiệu</a></li>
			<li><a href="">Liên hệ</a></li>
			<li> <?php
					if (isset($_SESSION['tennd'])) {
						if ($_SESSION['quyennd'] == 1) {
					?>
			<li><a class="nav-link active" aria-current="page" href="index.php?action=quantri">Quản trị</a></li>
			<a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION['tennd']; ?>
			</a>
			<li>
				<form method="post"><input type="submit" name="nutdx" value="Đăng xuất"></form>
			</li>

		<?php
						} else {
		?>
			<a class="nav-link nav-link__active" aria-current="page" href="#"> <?php echo $_SESSION['tennd']; ?>
			</a>
			<li>
				<form method="post"><input type="submit" name="nutdx" value="Đăng xuất"></form>
			</li>

		<?php

						}
					} else {
		?>
		<a class="nav-link" href="index.php?action=dangnhap">Đăng nhập</a>
	<?php
					} ?>
	</li>

		</ul>
	</nav>
	<a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
	<img src="images/menu.png" class="menu-icon" onClick="menutoggle()">
</div>