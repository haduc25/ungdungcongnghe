<?php
    // set page title
    $pageTitle = "Tài khoản - LeoPard";

    // header
    require_once './utils/header.php';
?>
<body>
        <div class="container">
            <?php 
                require_once './utils/navbar.php' 
            ?>
        </div>
        
        <!------------------------------ account-page details------------------------------>

        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/image1.png" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Đăng nhập</span>
                                <span onclick="register()">Đăng ký</span>
                                <hr id="Indicator">
                            </div>
                            <form id="LoginForm" method="post">
                                <input type="text" placeholder="username" name="tdn" required maxlength="10">
                                <input type="password" placeholder="password" name="mk" required maxlength="32">
                                <button type="submit" class="btn" name="nutdangnhap">Đăng nhập</button>
				                <!-- <input type="submit" class="btn btn-lg btn-primary" name="nutdangnhap" value="ĐĂNG NHẬP"> -->
                                <a href="">Quên mật khẩu?</a>
                            </form>
                            
                            <form id="RegForm" method="post">
                                <input type="text" placeholder="username" name="tendk" required maxlength="10">
                                <input type="email" placeholder="example@email.com" name="emaildk" required maxlength="32">
                                <input type="password" placeholder="password" name="mkdk" required maxlength="32">
                                <button type="submit" class="btn" name="nutdangky">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
        
       
        <!-- FOOTER -->
        <?php require_once './utils/footer.php'; ?>
        
        
        <!-----------------------------------js for toggle menu-------------------------------------->
        <script>
            ///////////////////////////// handle toggle form /////////////////////////////
            "use strict"
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
        
            var LoginForm=document.getElementById("LoginForm");
            var RegForm=document.getElementById("RegForm");
            var Indicator=document.getElementById("Indicator");
            
            function register(){
                RegForm.style.transform="translateX(0px)";
                LoginForm.style.transform="translateX(0px)";
                Indicator.style.transform="translateX(100px)"
            }
            
            function login(){
                RegForm.style.transform="translateX(300px)";
                LoginForm.style.transform="translateX(300px)";
                Indicator.style.transform="translateX(0px)";
            }
        </script>
</body>
</html>