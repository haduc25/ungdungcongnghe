<?php
    // set page title
    $pageTitle = "Kết quả tìm kiếm - LeoPard";

    // header
    require_once './utils/header.php';
?>

<body>
        <div class="container">
            <?php 
                require_once './utils/navbar.php' 
            ?>
        </div>

    <!-- Logic -->
    <div class="container">
        <?php
            if (!empty($kw)) {
                $str = mysqli_real_escape_string($conn, $kw);
                echo "<h1 class='search-result-title'>Kết quả tìm kiếm cho '" . $str . "'</h1>";

                if (!empty($data_cart)) {
                    echo '<div class="product-container">';

                foreach ($data_cart as $row) {
        ?>
                    <div class="col-4 product-shadow__hover">
                        <div class="products-item">
                            <a href="index.php?action=chitietsanpham&id=<?= $row['id_sp']; ?>"><img src="<?php echo $row['hinhanh_sp']; ?>" alt="..."></a>
                            <div class="product-item__info product-item__info__search">
                                <a href="index.php?action=chitietsanpham&id=<?= $row['id_sp']; ?>"><h4 class="product-item__title"><?php echo $row['ten_sp']; ?></h4></a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p class="product-item__price"><?= number_format($row['gia_sp'], 0, ',', '.'); ?>đ</p>
                            </div>
                        </div>
                    </div>
            <?php
                    }
                    echo '</div>';
                } else {
            ?>
                    <p style='text-align: center; margin-top: 15px'>Sản phẩm bạn vừa tìm không có trong cửa hàng, Vui lòng kiểm tra lại chính tả và sử dụng các từ tổng quát hơn và thử lại!</p>
                    <div class="wrapper__img_not_found">
                        <div class='seacrh-not-found'></div>
                    </div>
            <?php
                }
            }
        ?>

            <!-- sp lien quan -->
            <div class="small-container">
                <h2 class="title" >Sản phẩm liên quan</h2>
                    <div class="row"><?php 
                            if($spnn==0){
                                    echo "Đang cập nhật";
                                }else{
                                    foreach ($spnn as $value) {
    
                                    ?>
                                            <!-- <div class="col-4 products-item"> -->
                                            <div class="col-4 product-shadow__hover">
                                            <div class="products-item">
                                                <a href="index.php?action=chitietsanpham&id=<?=$value['id_sp']; ?>"><img src="<?php echo $value['hinhanh_sp'];?>" alt="..."></a>
                                                <div class="product-item__info">
                                                    <a href="index.php?action=chitietsanpham&id=<?=$value['id_sp']; ?>"><h4 class="product-item__title"><?php echo $value['ten_sp'];?></h4></a>
                                                    <div class="rating">
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star" ></i>
                                                        <i class="fa fa-star-half-o" ></i>
                                                        <i class="fa fa-star-o" ></i>
                                                    </div>
                                                    <p class="product-item__price" class="product-item__price"><?php echo number_format($value['gia_sp'], 0, ',', '.');?>đ</p>
                                                </div>
                                            </div>
    
                                        </div>
                                    <?php
                                    }
                                }
                        ?> 
                    </div>
           </div>
        </div>
<?php 
    // footer
    require_once './utils/footer.php';
?>
</body>
</html>