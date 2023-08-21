<?php
    // set page title
    $pageTitle = "Giỏ hàng - LeoPard";

    // header
    require_once './utils/header.php';
?>

<body>
        <div class="container">
            <?php 
                require_once './utils/navbar.php' 
            ?>
        </div>
    
    <!-- body -->
    
        
        <!------------------------------ cart items details------------------------------>

        <div class="small-container cart-page">
        <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>giá: 50.00đ</small><br>
                            <a href="">Xoá</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>50.00đ</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>giá: 50.00đ</small><br>
                            <a href="">Xoá</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>50.00đ</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>giá: 50.00đ</small><br>
                            <a href="">Xoá</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>50.00đ</td>
            </tr>
            </table>
            
            <div class="total-price">
                <table>
                    <tr>
                        <td>Tổng số</td>
                        <td>150.000đ</td>
                    </tr>
                </table>
            </div>
        </div>
    <?php
    // footer
    require_once './utils/footer.php';
    ?>
</body>