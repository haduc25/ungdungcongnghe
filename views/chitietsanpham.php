<?php
    // set page title
    $pageTitle = "Chi tiết sản phẩm - LeoPard";

    // header
    require_once './utils/header.php';

    // connect sql
    require_once './utils/connect_sql.php';
?>

<body>
        <div class="container">
            <?php 
                require_once './utils/navbar.php' 
            ?>
        </div>

        <!-- START: body -->
    
        
        <!------------------------------ Single product details------------------------------>
        <div class="small-container single-product">
            
            
            <!--<h2 class="title" >Sản phẩm nổi bật</h2>-->
            <div class="row">
                    <div class="col-2">
                        <img src="<?=$proInfo['hinhanh_sp']?>" width="100%" id="productImg">
                        
                    </div>
                <?php $soluong =1 ?>
                    <div class="col-2">
                        <p>Trang chủ / Shoes</p>
                        <h1><?=$proInfo['ten_sp'];?></h1>
                        <h4><?= number_format($proInfo['gia_sp'], 0, ",", ".") ?> </h4>
                        <select>
                            <option>Select Size</option>
                            <option>6<!--Small (s)--></option>
                            <option>7<!--Medium (M)--></option>
                            <option>8<!--Large (L)--></option>
                            <option>9<!--XL--></option>
                            <option>10<!--XXL--></option>
                        </select>
                        <input type="number" value="<?=$soluong?>">
                        <a href="index.php?action=giohang&id=<?=$proInfo['id_sp']?>&sl=<?=$soluong?>" class="btn">Thêm vào giỏ hàng</a>
                        <h3>Chi tiết sản phẩm <i class="fa fa-indent" ></i></h3>
                        <br>
                        <p><?=$proInfo['mota_sp']?></p>
                    </div>
                </div>
            </div>
        
        
        <!----------------------------------Title------------------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Sản phẩm tương tự</h2>
                <a href="index.php?action=sanpham"><p>Xem thêm</p></a>
            </div>
        </div>
                
        <!----------------------------------products------------------------------------->
        <div class="small-container">
             <div class="row">
                     <div class="col-4">
                        <a href="index.php?action=chitietsanpham"><img src="images/product-11.jpg"></a>
                        <a href="index.php?action=chitietsanpham"><h4>Giày thể thao Downshifter</h4></a>
                        <div class="rating">
                            
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>50.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="index.php?action=chitietsanpham"><img src="images/product-2.jpg"></a>
                        <h4>Giày chạy bộ buộc dây</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>35.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="index.php?action=chitietsanpham"><img src="images/product-3.jpg"></a>
                        <h4>Giày buộc dây</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>15.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="index.php?action=chitietsanpham"><img src="images/product-10.jpg"></a>
                        <h4>Giày buộc dây phẳng</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>48.000đ</p>
                    </div>  
                </div>
        </div>
        <!-- END: body -->

    
    <?php 
    // footer
    require_once './utils/footer.php';
?>
</body>
</html>