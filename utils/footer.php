<!----------------------------------footer------------------------------------->
<div class ="footer">
        <div class="container">
            
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Tải xuống ứng dụng cho điện thoại di động Android và ios.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Mục đích của chúng tôi là làm cho nhiều người có thể tiếp cận niềm vui và lợi ích của thể thao một cách bền vững.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Giới thiệu</li>
                       <li>Phiếu giảm giá</li>
                       <li>Bài viết trên blog</li>
                       <li>Chính sách đổi trả</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>Instagram</li>
                       <li>Youtube</li>
                    </ul>
                </div>
                
            </div>
            
            <hr><!--horizontal line-->
            <p class="copyright">Copyright 2023</p>
            
        </div>
</div>
        
        
<!-----------------------------------js for toggle menu----------------------------------------------->
<script>
    var menuItems=document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight="0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px"){
            MenuItems.style.maxHeight="200px";
        }
        else{
            MenuItems.style.maxHeight="0px";
        }
    }

    // seacrh
    const searchIco = document.querySelector('.search-ico');
    const searchCancel = document.querySelector('.search-cancel');
    const searchBar = document.querySelector('.search-bar');

    searchIco.addEventListener('click', () => {
        searchBar.classList.toggle('search-bar-active');
    });

    searchCancel.addEventListener('click', () => {
        searchBar.classList.remove('search-bar-active');
    });

    // const homeThumb = document.getElementById('home__thumb');
    // const searchForm = document.getElementById('search-form');
    // // console.log(homeThumb);
    // console.log('searchForm: ', searchForm);

    // searchForm.addEventListener('submit', () => {
    //     alert('meow');
    //     // console.log(homeThumb);
    // })

    document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.querySelector('#search-form');
    const searchInput = document.querySelector('#search-input');

    searchForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Ngăn chặn việc gửi biểu mẫu

        const keyword = searchInput.value; // Lấy giá trị từ trường nhập liệu

        // Chuyển hướng đến URL với tham số keyword
        window.location.href = `index.php?action=ketquatimkiem&keyword=${keyword}`;
    });
});



</script>



