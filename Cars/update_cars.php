<?php
//connection Database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbname";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//get Cars
session_start();
$id = $_SESSION['id'];
$manufacturer = $_SESSION['manufacturer'];
$model = $_SESSION['model'];
$price = $_SESSION['price'];
$image = $_SESSION['image'];
//request Edit Cars
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
if (isset($_POST["update"])) {
//
if (!empty($_POST["manufacturer"]) && !empty($_POST["model"]) && !empty($_POST["price"]) && !empty($_POST["image"])) {
//
$manufacturer_update = $_POST["manufacturer"];
$model_update = $_POST["model"];
$price_update = $_POST["price"];
$image_update = $_POST["image"];
$sql = "UPDATE cars SET manufacturer = '$manufacturer_update', model = '$model_update', price = '$price_update', image = '$image_update' WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
//
header("Location: merchants_cars.php");
} else {
//
}
} else {
//
}
}
}
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Cars</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">

        <!-- Update form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Update Cars</h2>
                        <form method="POST" class="register-form" id="edit-form" action="">
                            <div class="form-group">
                                <label for="manufacturer"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="manufacturer" id="manufacturer" value="<?php echo $manufacturer; ?>" placeholder="Manufacturer"/>
                            </div>
                            <div class="form-group">
                                <label for="model"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="model" id="model" value="<?php echo $model; ?>" placeholder="Model"/>
                            </div>
                            <div class="form-group">
                                <label for="price"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="price" id="price" value="<?php echo $price; ?>" placeholder="Price"/>
                            </div>
                            <div class="form-group">
                                <label for="image"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="image" id="image" value="<?php echo $image; ?>" placeholder="Image"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="update" id="update" class="form-submit" value="Update"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="edit image"></figure>
                        <a href="#" class="signup-image-link"></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>