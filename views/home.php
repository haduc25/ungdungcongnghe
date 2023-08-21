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
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-11.jpg"></a>
                        <a href="products-details.html"><h4>Giày thể thao Downshifter</h4></a>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$50.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-2.jpg"></a>
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
                        <a href="products-details.html"><img src="images/product-3.jpg"></a>
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
                        <a href="products-details.html"><img src="images/product-10.jpg"></a>
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
            
            
             <h2 class="title" >Sản phẩm mới nhất</h2>
                <div class="row"><?php 
                        if (isset($_GET['idloai'])) {
							if($data2==0){
									echo "Đang cập nhật";
								}else{
									foreach ($data2 as $value) {
										
									?>
                                        <div class="col-4">
                                            <a href="index.php?action=chitietsanpham"><img src="<?php echo $value['hinhanh_sp'];?>" alt="..."></a>
                                            <a href="index.php?action=chitietsanpham"><h4><?php echo $value['ten_sp'];?></h4></a>
                                            <div class="rating">
                                                
                                                <i class="fa fa-star" ></i>
                                                <i class="fa fa-star" ></i>
                                                <i class="fa fa-star" ></i>
                                                <i class="fa fa-star-half-o" ></i>
                                                <i class="fa fa-star-o" ></i>
                                            </div>
                                            <p><?php echo $value['gia_sp'];?> VND</p>
                                            <a href="#" class="btn btn-primary">Mua hàng</a>
                                        </div>
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
										 <!-- <div class="col-4 products-item"> -->
										 <div class="col-4 product-shadow__hover">
                                            <div class="products-item">
                                                <a href="index.php?action=chitietsanpham"><img src="<?php echo $value['hinhanh_sp'];?>" alt="..."></a>
                                                <div class="product-item__info">
                                                    <a href="index.php?action=chitietsanpham"><h4 class="product-item__title"><?php echo $value['ten_sp'];?></h4></a>
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
                        <a href="products.html" class="btn">Mua ngay &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!------------------------------Testimonial---------------------------------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/user-1.png">
                        <h3>Sean Parkar</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/user-2.png">
                        <h3>Mike Smith</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/user-3.png">
                        <h3>Mabel Joe</h3>
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