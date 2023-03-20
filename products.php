<?php include('server.php') ?>
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

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Shorting</option>
                <option>Short by Price</option>
                <option>Short by Trend</option>
                <option>Short by Rating</option>
                <option>Short by Sale</option>
            </select>
        </div>

        <div class="row">
    		<div class="col-4">
    			<a href="products detail.php"><img src="image/product-1.jpg"></a>
                <a href="products detail.php"><h4>Red Printed T-Shirt</h4></a>
    			<div class="rating">
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
    		</div>

    		<div class="col-4">
    			<img src="image/product-2.jpg">
    			<h4>HRX Sports Shoes</h4>
    			<div class="rating">
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star-half-o"></i>
    				<i class="fa fa-star-o"></i>
                </div>
                <p>$75.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
    		</div>

    		<div class="col-4">
    			<img src="image/product-3.jpg">
    			<h4>HRX Gray Trackpants</h4>
    			<div class="rating">
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star-half-o"></i>
                </div>
                <p>$75.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
    		</div>

    		<div class="col-4">
    			<img src="image/product-4.jpg">
    			<h4>Blue Printed T-Shirt</h4>
    			<div class="rating">
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star"></i>
    				<i class="fa fa-star-o"></i>
                </div>
                <p>$76.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
    		</div>

    	</div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="image/product-5.jpg">
                <h4>Puma Gray Sports Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$83.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>

            <div class="col-4">
                <img src="image/product-6.jpg">
                <h4>Black Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$60.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>

            <div class="col-4">
                <img src="image/product-7.jpg">
                <h4>HRX Set of 3 Socks</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$75.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>

            <div class="col-4">
                <img src="image/product-8.jpg">
                <h4>Black Fossil Watch</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="image/product-9.jpg">
                <h4>Black Sports Watch</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$46.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>

            <div class="col-4">
                <img src="image/product-10.jpg">
                <h4>Black HRX Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$55.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>

            <div class="col-4">
                <img src="image/product-11.jpg">
                <h4>Gray Nike Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$60.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>

            <div class="col-4">
                <img src="image/product-12.jpg">
                <h4>HRX Black Trackpants</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$75.00</p>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>
        </div>
        
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>
<!-------------------Footer------------------->
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
    		<p class="copyright">Copyright 2020 @ C.Com.......</p>
    	</div>
    </div>

<!----------------js for toogle menu----------------->

    <script>
    	var MenuItems = document.getElementById("MenuItems");

    	MenuItems.style.maxHeight = "0px"

    	function menutoggle()
        {
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