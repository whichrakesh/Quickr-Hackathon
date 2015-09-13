<?php
    include 'functions.php';
    include 'quikr.php';

    $category = $_GET['category'];
    $price_range = $_GET['price_range'];
    $city = $_GET['city'];
    $locality = $_GET['locality'];
    $categories = array("Divorce","Property","Family","Criminal",
        "Matrimonial","HighCourt","Civil","ConsumerCourt","LabourLaw", 
        "CooperativeSociety","LeaveLicenseAgreement","Notary","Corporate","Will","Trademark","Rent");
    $subcategory_id = array_search($_GET['category'], $categories);
    $lawyers_list = getLawyers($subcategory_id, $city, $locality, $price_range);
    $lawyers_listQ = getLawyersQ($_GET['category'], $city, $locality);
    print_r($lawyers_list);
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Catalogue - Mimity</title>
    <link href="./files/bootstrap.css" rel="stylesheet">
    <link href="./files/font-awesome.min.css" rel="stylesheet">
    <link href="./files/style.css" rel="stylesheet">
<style type="text/css"></style>
<!--Start of Zopim Live Chat Script-->
// <script type="text/javascript">
// window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
// d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
// _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
// $.src="//v2.zopim.com/?3JZTQhap0NApOOlmRqR4MrdYdIjwTfwu";z.t=+new Date;$.
// type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
// </script>
<!--End of Zopim Live Chat Script-->

</head>
<body>
	<header>
	    <div class="container">
	        <div class="row">

	        	<!-- Logo -->
	            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
	            	<div class="well logo">
	            		<a href="http://demo.18maret.com/demo/mimity/v1.2/index.html">
	            			Mimity <span>Online Shop</span>
	            		</a>
	            		<div>Lorem ipsum dolor sit amet.</div>
	            	</div>
	            </div>
	            <!-- End Logo -->

				<!-- Search Form -->
	            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
	            	<div class="well">
	                    <form action="">
	                        <div class="input-group">
	                            <input type="text" class="form-control input-search" placeholder="Enter something to search">
	                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
	                            </span>
	                        </div>
	                    </form>
	                </div>
	            </div>
	            <!-- End Search Form -->

	            <!-- Shopping Cart List -->
	            <div class="col-lg-3 col-md-4 col-sm-5">
	                <div class="well">
	                    <div class="btn-group btn-group-cart">
	                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
                                <span class="pull-left">Shopping Cart: 2 item(s)</span>
                                <span class="pull-right"><i class="fa fa-caret-down"></i></span>
                            </button>
                            <ul class="dropdown-menu cart-content" role="menu">
                                <li>
                                    <a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">
                                        <b>Penn State College T-Shirt</b>
                                        <span>x1 $528.96</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">
                                        <b>Live Nation ACDC Gray T-Shirt</b>
                                        <span>x1 $428.96</span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="http://demo.18maret.com/demo/mimity/v1.2/cart.html">Total: $957.92</a></li>
                            </ul>
	                    </div>
	                </div>
	            </div>
	            <!-- End Shopping Cart List -->
	        </div>
	    </div>
    </header>

	<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="http://demo.18maret.com/demo/mimity/v1.2/index.html">Mimity Online Shop</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://demo.18maret.com/demo/mimity/v1.2/index.html">Home</a></li>
                    <li><a href="./files/search.php" class="active">Catalogue</a></li>
                    <li><a href="http://demo.18maret.com/demo/mimity/v1.2/cart.html">Shopping Cart</a></li>
                    <li><a href="http://demo.18maret.com/demo/mimity/v1.2/checkout.html">Checkout</a></li>
                    <li class="nav-dropdown">
                    	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="dropdown-toggle" data-toggle="dropdown">
							Pages <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="http://demo.18maret.com/demo/mimity/v1.2/about.html">About Us</a></li>
							<li><a href="http://demo.18maret.com/demo/mimity/v1.2/contact.html">Contact Us</a></li>
							<li><a href="http://demo.18maret.com/demo/mimity/v1.2/typography.html">Typography</a></li>
							<li><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Product Detail</a></li>
                            <li><a href="http://demo.18maret.com/demo/mimity/v1.2/compare.html">Compare</a></li>
                            <li><a href="http://demo.18maret.com/demo/mimity/v1.2/login.html">Login</a></li>
                            <li><a href="http://demo.18maret.com/demo/mimity/v1.2/register.html">Register</a></li>
						</ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <div class="container main-container">
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

        		<!-- Categories -->
        		<div class="col-lg-12 col-md-12 col-sm-6">
	        		<div class="no-padding">
	            		<span class="title">CATEGORIES</span>
	            	</div>
					<div id="main_menu">
                        <div class="list-group panel panel-cat">
                            <a href="?category=Divorce" class="list-group-item">Divorce Cases</a>
                            <a href="?category=Property" class="list-group-item">Property Cases</a>
                            <a href="?category=Family" class="list-group-item">Family Cases</a>
                            <a href="?category=Criminal" class="list-group-item">Criminal Law</a>
                            <a href="?category=Matrimonial" class="list-group-item">Matrimonial Cases</a>
                            <a href="?category=HighCourt" class="list-group-item">High Court</a>
                            <a href="?category=Civil" class="list-group-item">Civil Lawyers</a>
                            <a href="?category=ConsumerCourt" class="list-group-item">Consumer Court</a>
                            <a href="?category=LabourLaw" class="list-group-item">Labour Law</a>
                            <a href="?category=CooperativeSociety" class="list-group-item">Cooperative Society</a>
                            <a href="?category=LeaveLicenseAgreement" class="list-group-item">Leave License Agreement</a>
                            <a href="?category=Notary" class="list-group-item">Lawyers for Notary</a>
                            <a href="?category=Corporate" class="list-group-item">Corporate Law</a>
                            <a href="?category=Will" class="list-group-item">Lawyers for Will</a>
                            <a href="?category=Trademark" class="list-group-item">Lawyers for Trademark</a>
                            <a href="?category=Rent" class="list-group-item">Lawyers for Rent Matter</a>
                        </div>
                    </div>
				</div>
				<!-- End Categories -->

				<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-6">
					<div class="no-padding">
	            		<span class="title">BEST SELLER</span>
	            	</div>
		            <div class="hero-feature">
		                <div class="thumbnail text-center">
		                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
		                    	<img src="./files/product-9.jpg" alt="" style="position: absolute; width: 280px; height: auto; max-width: none; max-height: none; left: -28px; top: 0px;">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Ohio State College T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	</p><div class="btn-group">
			                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 924.25</a>
			                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        <p></p>
		                    </div>
		                </div>
		            </div>
					<div class="hero-feature hidden-sm">
		                <div class="thumbnail text-center">
		                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
		                    	<img src="./files/product-8.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -13px; top: 0px;">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Penn State College T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	</p><div class="btn-group">
			                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 528.96</a>
			                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        <p></p>
		                    </div>
		                </div>
		            </div>
				</div>
				<!-- End Best Seller -->

        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Catalogue -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">PRODUCTS CATALOGUE</span>
            	</div>
                <?php 
                    foreach($lawyers_list as $lawyer){
                        $specializationsId = explode(",", $lawyer->specialization);   
                    ?>
                    <div class="col-lg-4 col-sm-4 hero-feature text-center">
                        <div class="thumbnail">
                            <center>
                            <img src="" name="aboutme" width="140" height="140" border="0" class="img-circle">
                            <h3 class="media-heading"><?=$lawyer->name?>
                                <?php if($lawyer->verified == 1){
                                        echo "<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\" style=\"color: green;\"></span>";
                                    }
                                ?>
                            </h3>
                            <span><strong>Specialization: </strong></span>
                                <?php foreach($specializationsId as $id){
                                    echo "<span class=\"label label-success\">".$categories[$id]."</span>\n";
                                    }
                                ?>
                                <br>
                            <span><strong>Rating: </strong></span>
                                <?php 
                                    $ratI = intval($lawyer->ratings);
                                    $ratStr = "<span class=\"product-rating\">";
                                    $i = 1;
                                    for(; $i <= $ratI; $i++){
                                        $ratStr .= "<i class=\"fa fa-star\"></i>"; 
                                    }
                                    if($lawyer->ratings - $ratI != 0) {             
                                        $i ++;                         
                                        $ratStr .= "<i class=\"fa fa-star-half-o\"></i>";  
                                    }                                    
                                    for(; $i <= 5; $i++){
                                        $ratStr .= "<i class=\"fa fa-star-o\"></i>"; 
                                    }                                 
                                    $ratStr .= "</span>";
                                    echo $ratStr;
                                ?>
                                <br> 
                            <span><strong>Experience: </strong><?=$lawyer->experience?> Years</span>  
                            </center>
                        </div>
                    </div>
                    <?php
                    }
                ?>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
                    <div class="thumbnail">
                        <center>
                        <img src="" name="aboutme" width="140" height="140" border="0" class="img-circle">
                        <h3 class="media-heading"><small>USA</small></h3>
                        <span><strong>Specialization: </strong></span>
                            <span class="label label-warning"></span>
                            <span class="label label-info"></span>
                            <span class="label label-info"></span>
                            <span class="label label-success"></span>
                        </center>
                    </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="./files/product-3.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Classic Laundry Green Graphic T-Shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 628.96</a>
		                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="./files/product-4.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Disc Jockey Print T-Shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 394.64</a>
		                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="./files/product-5.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Live Nation 3 Days of Peace and Music Carbon</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 428.96</a>
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="./files/product-6.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Live Nation ACDC Gray T-Shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 428.96</a>
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="./files/product-7.jpg" alt="" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Live Nation Aerosmith Ivory T-Shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 632.15</a>
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="./files/product-10.jpg" alt="" style="position: absolute; width: 242px; height: 258px; max-width: none; max-height: none; left: 0px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Adidas Men Blue &amp; Red Striped Polo T-shirt </a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
		                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 22.22</a>
		                        	<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="./files/product-11.jpg" alt="" style="position: absolute; width: 248px; height: auto; max-width: none; max-height: none; left: -3px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Adidas Men Flame Black T-shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 15.47</a>
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html" class="link-p" style="overflow: hidden; position: relative;">
	                    	<img src="./files/product-12.jpg" alt="" style="position: absolute; width: 251px; height: auto; max-width: none; max-height: none; left: -4px; top: 0px;">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="http://demo.18maret.com/demo/mimity/v1.2/detail.html">Adidas Men Red Printed T-shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	</p><div class="btn-group">
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-default">$ 20.63</a>
	                        		<a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
				<div class="text-center">
		        	<ul class="pagination catalogue-pagination">
						<li class="disabled"><a>First</a></li>
						<li class="disabled"><a>Prev</a></li>
						<li class="active"><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">1</a></li>
						<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">2</a></li>
						<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">3</a></li>
						<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">4</a></li>
						<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">Next</a></li>
						<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">Last</a></li>
					</ul>
				</div>
        	</div>
        	<!-- End Catalogue -->


        </div>
	</div>

	<footer>
    	<div class="container">
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Information</h4>
        			<ul>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/about.html">About Us</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/typography.html">Policy Privacy</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/typography.html">Terms and Conditions</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/typography.html">Shipping Methods</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Categories</h4>
        			<ul>
        				<li><a href="./files/search.php">Cras justo odio</a></li>
        				<li><a href="./files/search.php">Dapibus ac facilisis in</a></li>
        				<li><a href="./files/search.php">Morbi leo risus</a></li>
        				<li><a href="./files/search.php">Porta ac consectetur ac</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Customer Service</h4>
        			<ul>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/contact.html">Contact Us</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">YM: cs_</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">Phone: +6281234567891</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">Email: cs.domain@domain.tld</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Follow Us</h4>
        			<ul class="social">
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">Google Plus</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">Facebook</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">Twitter</a></li>
        				<li><a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#">RSS Feed</a></li>
        			</ul>
        		</div>
        	</div>
        </div>
        <div class="navbar-inverse text-center copyright">
        	Copyright © 2015 Mimity All right reserved
        </div>
    </footer>

    <a href="http://demo.18maret.com/demo/mimity/v1.2/catalogue.html#top" class="back-top text-center" onclick="$(&#39;body,html&#39;).animate({scrollTop:0},500); return false" style="display: none;">
    	<i class="fa fa-angle-double-up"></i>
    </a>

    <script src="./files/jquery.js"></script>
    <script src="./files/bootstrap.js"></script>
    <script src="./files/jquery.blImageCenter.js"></script>
    <script src="./files/mimity.js"></script>

</body></html>