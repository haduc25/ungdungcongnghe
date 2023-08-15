<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/customStyle.css" />
</head>
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
                    <a href="products.html" class="btn">Khám phá ngay &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
    </div>
</div>
