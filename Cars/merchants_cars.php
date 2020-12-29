<?php
//connection Dataase
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbname";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//request Edit Merchants Cars
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
if (isset($_POST["edit"])) {
//
if (!empty($_POST["id"]) && !empty($_POST["manufacturer"]) && !empty($_POST["model"]) && !empty($_POST["price"]) && !empty($_POST["image"])) {
//
$id = $_POST["id"];
$manufacturer = $_POST["manufacturer"];  
$model = $_POST["model"];
$price = $_POST["price"];
$image = $_POST["image"];
//
$_SESSION['id'] = $id;
$_SESSION['manufacturer'] = $manufacturer;
$_SESSION['model'] = $model;
$_SESSION['price'] = $price;
$_SESSION['image'] = $image;
header("Location: update_cars.php");
} else {
//
}
//request Delete Merchants Cars
} else if (isset($_POST["delete"])) {
//
if (!empty($_POST["id"])) {
//
$id = $_POST["id"];
$sql = "DELETE FROM cars WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
//
} else {
//
}
} else {
//
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merchants Cars</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">

        <!-- Merchants Cars form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Merchants Cars</h2>
                        <!-- -->
                        <?php
                        //
                        $sql = "SELECT * FROM cars";
                        if ($result = mysqli_query($conn, $sql)) {
                        //
                        if(mysqli_num_rows($result) > 0) {
                        //    
                        while($row = mysqli_fetch_array($result)) {
                        //    
                        $id = $row["id"];
                        $manufacturer = $row["manufacturer"];  
                        $model = $row["model"];
                        $price = $row["price"];
                        $image = $row["image"];
                        ?>
                        <!-- -->
                        <form method="POST" class="register-form" id="account-form" action="">
                            <p><!-- -->
                            <?php
                            //
                            echo $manufacturer;
                            ?>
                            <!-- --></p>
                            <p><!-- -->
                            <?php
                            //
                            echo $model;
                            ?>
                            <!-- --></p>
                            <p><!-- -->
                            <?php
                            //
                            echo $price;
                            ?>
                            <!-- --></p>
                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                            <input type="hidden" name="manufacturer" id="manufacturer" value="<?php echo $manufacturer; ?>"/>
                            <input type="hidden" name="model" id="model" value="<?php echo $model; ?>"/>
                            <input type="hidden" name="price" id="price" value="<?php echo $price; ?>"/>
                            <input type="hidden" name="image" id="image" value="<?php echo $image; ?>"/>
                            <div class="form-group form-button">
                                <input type="submit" name="edit" id="edit" class="form-submit" value="Edit"/>
                                <input type="submit" name="delete" id="delete" class="form-submit" value="Delete"/>
                            </div>
                        </form>
                        <!-- -->
                        <?php
                        //
                        }                        
                        } else {
                        //    
                        echo "0 results";
                        }
                        } else {
                        //    
                        }
                        ?>
                        <!-- -->
                        
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="accounts.php" class="signup-image-link">Accounts</a>
                        <a href="insert_cars.php" class="signup-image-link">Insert Cars</a>
                        <a href="sign_in.php" class="signup-image-link">Sign Out</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>