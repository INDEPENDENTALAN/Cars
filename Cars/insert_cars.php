<?php
//connection Database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbname";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//request Insert Cars
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
if (isset($_POST["insert"])) {
//
if (!empty($_POST["manufacturer"]) && !empty($_POST["model"]) && !empty($_POST["price"]) && !empty($_POST["image"])) {
//
$manufacturer = $_POST["manufacturer"];
$model = $_POST["model"];
$price = $_POST["price"];
$image = $_POST["image"];
$sql = "INSERT INTO cars (manufacturer, model, price, image) VALUES ('$manufacturer', '$model', '$price', '$image')";
if (mysqli_query($conn, $sql)) {
//
header("Location: merchants_cars.php");
} else {
//
}
mysqli_close($conn);
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
    <title>Insert Cars</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">

        <!-- Insert form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Insert Cars</h2>
                        <form method="POST" class="register-form" id="register-form" action="">
                            <div class="form-group">
                                <label for="manufacturer"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="manufacturer" id="manufacturer" placeholder="Manufacturer"/>
                            </div>
                            <div class="form-group">
                                <label for="model"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="model" id="model" placeholder="Model"/>
                            </div>
                            <div class="form-group">
                                <label for="price"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="price" id="price" placeholder="Price"/>
                            </div>
                            <div class="form-group">
                                <label for="image"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="image" id="image" placeholder="Image"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="insert" id="insert" class="form-submit" value="Insert"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>