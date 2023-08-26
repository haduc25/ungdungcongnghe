<?php
    // set page title
    $pageTitle = "Giỏ hàng - LeoPard";

    // header
    require_once './utils/header.php';

    require_once './utils/connect_sql.php';
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
        <?php
            if(isset($_GET['sl']) && isset($_GET['id'])){
                $soluongsp = $_GET['sl'];
                $giasp = $proInfo['gia_sp'];
            ?>
            <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="<?=$proInfo['hinhanh_sp']?>" width="100%" id="productImg">
                        <div>
                            <p><?=$proInfo['ten_sp'];?></p>
                            <small><?= number_format($giasp, 0, ",", ".") ?></small><br>
                            <a href="">Xoá</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="<?=$soluongsp?>"></td>
                <?php $tt1 = $giasp * $soluongsp; ?>
                <td><?= number_format( $tt1 ,0, ",", ".") ?>đ</td>
            </tr>
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td>Tổng số</td>
                        <td><?= number_format( $tt1 ,0, ",", ".") ?>đ</td>
                    </tr>
                </table>
            </div>
            <?php
        }
        else{
            ?>
            <div style="min-height: 200px;">
                <h2 style="text-align: center;">Không có sản phẩm nào trong giỏ hàng của bạn.</h2>
            </div>
            <?php
        }
        ?>
            
            
        </div>
    <?php
    // footer
    require_once './utils/footer.php';
    ?>
</body>