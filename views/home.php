<?php
    // set page title
    $pageTitle = "LeoPard Store | Ecommerce website";

    // header
    require_once './utils/header.php';
?>
<body>
<div class="header">
    <div class="container">
          <!-- START: navbar -->
          <?php require_once './utils/navbar.php'; ?>
            <!-- END: navbar -->
            <div class="row">
                <div class="col-2">
                    <h1>Give your Workout <br>A New Style!</h1>
                    <p>Success isn't always about greatness. It's about consistency. Consistent<br>hard work gains success. Greatness will come.</p>
                    <a href="index.php?action=sanpham" class="btn">Khám phá ngay &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
    </div>
</div>
  <!------------------------------ featured categories------------------------------>
  <div class="categories">
            <div class="small-container">
                <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3 (2).jpg">
                </div>
            </div>
            </div>
        </div>
        
        <!------------------------------ featured Products------------------------------>
        <div class="small-container">
            <h2 class="title" >Sản phẩm nổi bật</h2>
                <div class="row">
                    <?php 
                        if($spnoibat==0){
                                echo "Đang cập nhật";
                            }else{
                                foreach ($spnoibat as $value) {
                                ?>
                                        <div class="col-4 product-shadow__hover">
                                        <div class="products-item" style="overflow: unset">
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

                                            <!-- Overlay -->
                                            <div class="home-product-item__favorite">
                                                    <i class="fa fa-check"></i>
                                                    <span>Yêu thích</span>
                                            </div>
                                            <div class="home-product-item__discount">
                                                <span class="home-product-item__discount-label"
                                                    >NEW</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                    ?> 
                </div>
            
            
             <h2 class="title" >Sản phẩm mới nhất</h2>
                <div class="row"><?php 
                        if($spmoinhat==0){
                                echo "Đang cập nhật";
                            }else{
                                foreach ($spmoinhat as $value) {

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
            <!--new row for the latest product-->
            </div>
        
        <!--------------------------`   offer   --------------------------------->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/image1.png" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Độc quyền có sẵn trên LeoPard</p>
                        <h1>Sports Shoes</h1>
                        <small> Mua trực tuyến các bộ sưu tập giày thể thao mới nhất trên Redstore với giá tốt nhất từ các thương hiệu hàng đầu như Adidas, Nike, Puma, Asics và Sparx khi rảnh rỗi với giá tốt nhất. </small><br>
                        <a href="index.php?action=sanpham" class="btn">Mua ngay &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!------------------------------Testimonial---------------------------------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3 testimonial__card">
                        <i class="fa fa-quote-left" ></i>
                        <p>LeoPard Store là điểm đến cho những người yêu thời trang và đam mê giày dép. Với danh mục sản phẩm đa dạng, bao gồm các thương hiệu hàng đầu như Nike, Adidas, Peak, Jordan và Puma, cửa hàng đảm bảo chất lượng tốt nhất từ những người chuyên sản xuất giày uy tín trên toàn thế giới. Đây thực sự là nơi để bạn tìm thấy những đôi giày ưng ý với thiết kế đa dạng và độ bền cao từ những hãng danh tiếng.</p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/user-1.png">
                        <h3>Ngoc Anh</h3>
                    </div>
                    <div class="col-3 testimonial__card">
                        <i class="fa fa-quote-left" ></i>
                        <p>Tôi đã có cơ hội trải nghiệm mua sắm tại LeoPard Store và sử dụng sản phẩm của họ, và tôi thực sự rất ấn tượng. Từ lúc đặt chân vào cửa hàng, tôi đã được đón tiếp nồng hậu bởi nhân viên thân thiện, sẵn sàng tư vấn và giúp đỡ. Họ không chỉ giúp tôi tìm ra đôi giày phù hợp với phong cách của mình mà còn giải thích chi tiết về các dòng sản phẩm và chất liệu.</p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                        </div>
                        <img src="images/user-namhai.png">
                        <h3>Nam Hai</h3>
                    </div>
                    <div class="col-3 testimonial__card">
                        <i class="fa fa-quote-left" ></i>
                        <p>Như một người đam mê thời trang và giày dép, tôi đã có cơ hội trải nghiệm mua sắm tại LeoPard Store và sử dụng những sản phẩm từ cửa hàng này. Tôi thực sự ấn tượng bởi sự đa dạng về mẫu mã và chất lượng của các đôi giày tại đây. Từ những đôi giày thể thao của Nike cho đến những thiết kế phong cách từ Jordan, mọi lựa chọn đều thể hiện sự tỉ mỉ trong từng chi tiết.</p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/user-3.png">
                        <h3>Thuy Linh</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <!----------------------------------Brands------------------------------------>
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-godrej.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-oppo.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-coca-cola.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-paypal.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-philips.png" alt="">
                    </div>
                </div>
            </div>
        </div>
<?php 
    // footer
    require_once './utils/footer.php';
?>
</body>
</html>