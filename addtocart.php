<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="addtocart.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <p class="logo">LOGO</p>
            <nav>
			<ul id="MenuItems">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
			</ul>
		    </nav>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">$ 0.00</h2>
                </div>
            </div>
        </div>
        <script src="addtocart.js"></script>
    </body>
</html>