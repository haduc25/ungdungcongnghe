<?php
    // set page title
    $pageTitle = "giới thiệu - LeoPard";

    // header
    require_once './utils/header.php';
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
                        <img src="images/lh1.jpg" width="100%" id="productImg">
                    </div>
                
                    <div class="col-2">
                       <h3>Địa chỉ: Z-115, Xã Quyết Thắng, TP.Thái Nguyên, Tỉnh Thái Nguyên.</h3>
                       <h3>Số ĐT: 038983165 - NTL</h3>
                       <h3>Fanpage: <a href="https://www.facebook.com/LeoPardFPS" target="_blank" style="color:blue">facebook.com/LeoPardStore</a></h3>
                       <h3>Youtube: <a href="https://www.youtube.com/@Bomman" target="_blank" style="color:blue">youtube.com/LeoPardStore</a></h3>
                    </div>
                </div>
            </div>
        
        
        <!----------------------------------Title------------------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2 >Sản phẩm tiêu biểu</h2>
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
                        <p>$50.00</p>
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
                        <p>$35.00</p>
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
                        <p>$15.00</p>
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
                        <p>$48.00</p>
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