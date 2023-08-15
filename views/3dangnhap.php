<!DOCTYPE html>
<html>
<head>
        <title>All Products - LeoPard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style1.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <div class="container"></div>
        
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
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>
                            <form id="LoginForm" method="post">
                                <input type="text" placeholder="username" name="tdn">
                                <input type="password" placeholder="password" name="mk">
                                <button type="submit" class="btn" name="nutdangnhap">Login</button>
				                <!-- <input type="submit" class="btn btn-lg btn-primary" name="nutdangnhap" value="ĐĂNG NHẬP"> -->
                                <a href="">Forgot password</a>
                            </form>
                            
                            <form id="RegForm">
                                <input type="text" placeholder="username">
                                <input type="email" placeholder="email">
                                <input type="password" placeholder="password">
                                <button type="submit" class="btn">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
        
       
        <!----------------------------------footer------------------------------------->
        <div class ="footer">
    </div>
 
</body>
</html>