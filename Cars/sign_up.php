<?php
//connection Database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbname";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//request Sign Up
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
if (isset($_POST["signup"])) {
//
if (!empty($_POST["full_name"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
//
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
//
if ($specific == 0) {
//    
header("Location: merchants.php");
} else if ($specific == 1) {
//    
header("Location: clients_categories.php");
}
//
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
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form method="POST" class="register-form" id="register-form" action="">
                            <div class="form-group">
                                <label for="full_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="full_name" id="full_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Your Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Sign Up"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="sign_in.php" class="signup-image-link">You have an account?</a>                        
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>