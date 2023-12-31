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
                    <div class="col">
                        <img src="images/gt1.png" width="100%" id="productImg">
                    </div>
                
                    <div class="col">
                        <h2 style="color:orangered; margin-top: 25px">Lý do thành lập</h2>
                        <p>Giày Leopard Station ra đời dựa trên niềm yêu thích giày Nike, giày Adidas, giày Vans… của chủ shop bởi vẻ đẹp mê hoặc của các mẫu giày thời thượng này!</p>
                        <p>Phần trở ngại lớn ở đây là giá tiền của những đôi giày Nike hay Adidas chính hãng thì quá cao so với đa phần các bạn trẻ, vì thế mình đã tìm tòi và tạo ra Giày Station để nhằm đưa đến cho các bạn có niềm yêu thích những đôi giày cá tính này với một mức giá hấp dẫn kèm với chất lượng tốt nhất trong tầm giá. Với tiêu chí mức giá hợp lý, vừa túi tiền nhưng chất lượng lại tốt hơn so với những gì các bạn lại bỏ ra, Giày Station hứa sẽ luôn luôn đưa đến chân của bạn chất lượng giày đảm bảo tốt nhất.</p>
                        <h2 style="color:orangered; margin-top: 25px">Tiêu chí bán hàng</h2>
                        <p>Sản phẩm cao cấp</p>
                        <p>Chăm sóc khách hàng tốt</p>
                        <p>Giá cả hợp túi tiền</p>
                        <p>Hỗ trợ sau khi khách hàng đã mua hàng</p>
                        <p>Giao hàng nhanh chóng</p>
                        <h2 style="color:orangered; margin-top: 25px">Sản phẩm</h2>
                        <p>Tất cả sản phẩm giày, dép tại Leopard là những mẫu giày Nike Fake 1, giày Adidas Fake 1, giày Vans Fake 1… Đều được dựa trên nguyên bản gốc của các hãng giày Nike và Adidas, giày Vans…</p>
                        <p>Phần đế giày được làm bằng chất liệu cùng với chất liệu hàng chính hãng, nhẹ, êm và bền, thoải mái cho người đi. Với chất lượng gia công tốt, hoàn thiện chuẩn với hàng chính hãng nhằm giúp cho bạn thỏa đam mê các dòng giày cao cấp.

Độ bền của sản phẩm luôn được đảm bảo từ 12 – 18 tháng, thông tin được chính mình trải nghiệm và nhiều khách hàng sở hữu giày của shop gửi về cho mình.

Hãy để mình làm 1 phép tính đơn giản, bạn bỏ số tiền 1tr8 để mua 1 đôi giày Nike hàng chính hãng, trong khi cùng số tiền đó, bạn có thể sở hữu được từ 4 – 5 mẫu giày Nike khác nhau, với màu sắc và thiết kế khách nhau để bạn có thể thoải mái phối được với nhiều bộ đồ của mình mà không phải nhàm chán.</p>
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
             <?php 
                        if($spnn==0){
                                echo "Đang cập nhật";
                            }else{
                                foreach ($spnn as $value) {
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
        </div>
        <!-- END: body -->

    
    <?php 
    // footer
    require_once './utils/footer.php';
?>
</body>
</html>