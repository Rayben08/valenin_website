<?php
    $title = "Valenin IT Services";
    $logo_white = "assets/images/valwhite.png";
    $logo_green = "assets/images/valgreen.png";
    $logo_gblack = "assets/images/gblack.png";
    $hero_image = "assets/images/retro.jpg";
    $carbox1 = "assets/images/career.jpg";
    $carbox2 = "assets/images/intern.jpg";
    $footer1 = "assets/images/fb.png";
    $footer2 = "assets/images/in.png";
    $footer3 = "assets/images/tk.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <?php include 'assets/include/navbar.php'; ?>
    
   <div class="hero text-center py-5">
    <div class="container">
        <h1 class="fw-bold">SERVICES</h1>

        <div class="service-container">
            <div class="service-box p-4">
                <img src="path/to/service1.jpg" class="service-img" alt="Service 1">
                <h4 class="fw-bold mt-3">SERVICES</h4>
                <button class="btn btn-success">LEARN MORE</button>
            </div>
            <div class="service-box p-4">
                <img src="path/to/service2.jpg" class="service-img" alt="Service 2">
                <h4 class="fw-bold mt-3">SERVICES</h4>
                <button class="btn btn-success">LEARN MORE</button>
            </div>
            <div class="service-box p-4">
                <img src="path/to/service3.jpg" class="service-img" alt="Service 3">
                <h4 class="fw-bold mt-3">SERVICES</h4>
                <button class="btn btn-success">LEARN MORE</button>
            </div>
            <div class="service-box p-4">
                <img src="path/to/service3.jpg" class="service-img" alt="Service 3">
                <h4 class="fw-bold mt-3">SERVICES</h4>
                <button class="btn btn-success">LEARN MORE</button>
            </div>
            <div class="service-box p-4">
                <img src="path/to/service3.jpg" class="service-img" alt="Service 3">
                <h4 class="fw-bold mt-3">SERVICES</h4>
                <button class="btn btn-success">LEARN MORE</button>
            </div>
            <div class="service-box p-4">
                <img src="path/to/service3.jpg" class="service-img" alt="Service 3">
                <h4 class="fw-bold mt-3">SERVICES</h4>
                <button class="btn btn-success">LEARN MORE</button>
            </div>
            <!-- Add more service boxes here -->
        </div>
    </div>
</div>

    <?php include 'assets/include/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
