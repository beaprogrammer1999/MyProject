<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];//$_POST - It is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");// Prepare a query for execution
        $query->bindParam("username", $username, PDO::PARAM_STR);//an alternative way to pass data to the database.
        $query->execute(); // Execute the query
        $result = $query->fetch(PDO::FETCH_ASSOC);// fetch - Store the result of the query. //PDO - PHP Data Object(framework for accessing databases in php).
        //FETCH_ASSOC - Fetches one row of data from the result set and returns it as an associative array. Each subsequent call to this function will return the next row within the result set, or null if there are no more rows.
        if (!$result) 
        {
            echo '<p class="error">Username password combination is wrong!</p>';
        } 
        else 
        {
            if
            (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } 
            else 
            {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>

<!-------------------------------------HTML Page----------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products - Trendy Mall</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div class="navbar">
        <div class="logo">
           <a href="index.php"><img src="image/logo.png" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <a href="addtocart.php"><img src="image/cart.png" width="30px" height="30px"></a>
        <img src="image/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
  </div>
<!------------------------------------------------account page-------------------------------------------------------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="image/image1.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span>Login</span>
                            <hr id="Indicator">
                        </div>

                        <form method="post" action="" name="signin-form">
                        <div class="input-group">
                           <label>Username</label>
                           <input type="text" name="username" required />
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="password" required />
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn" name="login">Login</button>
                        </div>
                        <p>
                           Not yet a member? <a href="register.php">Sign up</a>
                        </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!------------------------------------------------------Footer----------------------------------------------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android amd ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="image/play-store.png">
                        <img src="image/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="image/logo-white.png">
                    <p>Our Purpose Is To Sustainably Make The Pleasure And Benefits Of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>You Tube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Easy Tutorials</p>
        </div>
    </div>

<!----------------js for toogle menu----------------->

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px"

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script> 

</body>
</html> 