<?php
// set page title
$pageTitle = "Đặt hàng - LeoPard";

// header
require_once './utils/header_cart.php';
?>

<body>
    <div class="container">
        <?php
        require_once './utils/navbar.php'
        ?>
    </div>

    <div class="row wrapper__thanhtoan">
        <div class="col-lg-6 wrapper__item">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold" style="margin-top: 40px; text-align: center;">Chi tiết đơn hàng</div>
            <div class="p-4">
                <h2 class="font-weight-bold mb-4">Đặt hàng thành công</h2>
                <p class="font-weight-bold mb-4">Cửa hàng giầy LeoPard</p>
                <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Mã đơn hàng </strong><strong>#511406</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Cảm ơn bạn đã mua hàng!</strong><strong>—</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Thông tin chi tiết đơn hàng đã được gửi đến email</strong><strong>trangtrangxinhgai@mail.com</strong></li>
                </ul>
                <p class="font-weight-bold mb-4">Thông tin đơn hàng</p>
                <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Họ và Tên</strong><strong>Nguyen Trang</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Số điện thoại</strong><strong>0976799263</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Địa chỉ</strong><strong>Ha Noi - Vietnam</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Ghi chú</strong><strong>...</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng cộng</strong>
                    <h5 class="font-weight-bold"><?= number_format(100000, 0, ",", ".") ?> đ</h5>
                </li>
                </ul>
                <p class="font-weight-bold mb-4">Phương thức thanh toán</p>
                <p>Thanh toán khi nhận hàng (COD)</p>

                <!-- <div class="wrapper__btn">
                        <a href="index.php?action=thanhtoan" class="btn btn-dark rounded-pill py-2 btn-block btn__has-sp">Đặt hàng và đến phương thức thanh toán</a>
                    </div> -->
                <div class="wrapper__btn">
                    <input class="btn btn-dark px-4 rounded-pill btn__has-sp" type="submit" name="order_click" value="Tiếp tục mua hàng">
                </div>

            </div>
        </div>
    </div>

    <!-- END: body -->
    <!-- START: body2 -->
    <?php
    // // Kiểm tra nếu các giá trị đã được lưu trong session
    // if (isset($_SESSION['tennn'], $_SESSION['emailnn'], $_SESSION['sdtnn'], $_SESSION['diachinn'], $_SESSION['ghichunn'])) {
    //     // Lấy các giá trị từ session
    //     $tennn = $_SESSION['tennn'];
    //     $emailnn = $_SESSION['emailnn'];
    //     $sdtnn = $_SESSION['sdtnn'];
    //     $diachinn = $_SESSION['diachinn'];
    //     $ghichunn = $_SESSION['ghichunn'];

    //     // xoa session
    //     // unset($_SESSION['tennn']);
    //     // unset($_SESSION['emailnn']);
    //     // unset($_SESSION['sdtnn']);
    //     // unset($_SESSION['diachinn']);
    //     // unset($_SESSION['ghichunn']);



    //     echo "Đặt hàng" . $tennn. $emailnn. $sdtnn. $diachinn. $ghichunn;

    // } else {
    //     // Nếu không có các giá trị trong session, xử lý một cách phù hợp, ví dụ:
    //     echo "Không có thông tin địa chỉ giao hàng.";
    // }



    // new version
    // unset($_SESSION);
    // exit;

    // Kiểm tra nếu các giá trị đã được lưu trong session
    if (isset($_SESSION['ma_don_hang'])) {
        // Lấy mã đơn hàng từ session
        $ma_don_hang = $_SESSION['ma_don_hang'];
        
        // Kiểm tra nếu các giá trị đã được lưu trong session
        if (isset($_SESSION[$ma_don_hang]['tennn'], $_SESSION[$ma_don_hang]['emailnn'], $_SESSION[$ma_don_hang]['sdtnn'], $_SESSION[$ma_don_hang]['diachinn'], $_SESSION[$ma_don_hang]['ghichunn'])) {
            // Lấy các giá trị từ session
            $tennn = $_SESSION[$ma_don_hang]['tennn'];
            $emailnn = $_SESSION[$ma_don_hang]['emailnn'];
            $sdtnn = $_SESSION[$ma_don_hang]['sdtnn'];
            $diachinn = $_SESSION[$ma_don_hang]['diachinn'];
            $ghichunn = $_SESSION[$ma_don_hang]['ghichunn'];

            // Hiển thị thông tin đặt hàng
            echo "Thông tin đặt hàng:<br>";
            echo "Mã đơn hàng: " . $ma_don_hang . "<br>";
            echo "Tên người nhận: " . $tennn . "<br>";
            echo "Email người nhận: " . $emailnn . "<br>";
            echo "Số điện thoại người nhận: " . $sdtnn . "<br>";
            echo "Địa chỉ giao hàng: " . $diachinn . "<br>";
            echo "Ghi chú: " . $ghichunn . "<br>";

        } else {
            // Nếu không có các giá trị trong session, xử lý một cách phù hợp, ví dụ:
            echo "Không có thông tin địa chỉ giao hàng cho mã đơn hàng: " . $ma_don_hang . ".";
        }
    } else {
        // Nếu không có mã đơn hàng trong session, xử lý một cách phù hợp, ví dụ:
        echo "Không có thông tin đơn hàng.";
    }

    ?>
    <!-- END: body -->
    <?php
    // footer
    require_once './utils/footer.php';
    ?>
</body>

</html>