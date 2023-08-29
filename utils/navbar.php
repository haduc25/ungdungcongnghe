<?php
if (isset($_POST['nutdx'])) {
    session_unset();
}

$isLoggedIn = isset($_SESSION['tennd']);
$isAdmin = $isLoggedIn && $_SESSION['quyennd'] == 1;


    // // connect sql
    // require_once './utils/connect_db.php';

$host = "localhost";
$user = "root";
$password = "";
$database = "db_sp_mk15";
$conn = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()){
    echo "Connection Fail: ".mysqli_connect_errno();exit;
}
?>

<div class="navbar">
    <div class="logo">
        <a href="./"><img src="images/logo.png" width="185px"></a>
    </div>
    <nav>
        <ul id="MenuItems" class="menu-items">
            <li><a href="./">Trang chủ</a></li>
            <li><a href="index.php?action=sanpham">Sản phẩm</a></li>
            <li><a href="index.php?action=gioithieu">Giới thiệu</a></li>
            <li><a href="index.php?action=lienhe">Liên hệ</a></li>
            <li><a href="#" class="search-ico"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <?php if ($isLoggedIn) { ?>
                <li class="navbar__user">
                    <a class="nav-link nav-link__active <?= $isAdmin ? 'active' : ''; ?>" href="#">
                        Xin chào <?= $_SESSION['tennd']; ?>
                    </a>
                    <ul class="navbar__user-menu">
                        <li class="navbar__user-menu-item">
                            <a href="https://github.com/haduc25">Tài khoản của tôi</a>
                        </li>
                        <?php if ($isAdmin) { ?>
                            <li class="navbar__user-menu-item">
                                <a class="nav-link active" href="index.php?action=quantri">Quản trị</a>
                            </li>
                        <?php } ?>
                        <li class="navbar__user-menu-item">
                            <a href="index.php?action=giohang">Đơn mua</a>
                        </li>
                        <li class="navbar__user-menu-item navbar__user-menu-item--separate">
                            <form method="post">
                                <input class="btn-dangxuat" type="submit" name="nutdx" value="Đăng xuất">
                            </form>
                        </li>
                    </ul>
                </li>
            <?php } else { ?>
                <li><a class="nav-link" href="index.php?action=taikhoan">Đăng nhập</a></li>
            <?php } ?>
        </ul>
    </nav>
    <a href="index.php?action=giohang"><img src="images/cart.png" width="30px" height="30px"></a>
    <img src="images/menu.png" class="menu-icon" onClick="menutoggle()">
</div>

<!--search-->
<form action="index.php?action=ketquatimkiem&keyword=" method="POST" id="search-form">
    <div class="search-bar">
        <div class="search">
            <input type="text" id="search-input" placeholder="Tìm kiếm sản phẩm..." name="str" required>
            <button type="submit" name="submit" style='border: none; background-color: white;'><a href="#" class="btn__search"><i class="fa fa-search"></i></a></button>
            <a href="#" class="btn__search search-cancel">&times;</a>
        </div>
    </div>
</form>




