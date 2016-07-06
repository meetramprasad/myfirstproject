<?php include('database.php'); ?>
<?php
$sql = "SELECT * FROM quote_serial_no WHERE status = 1";
$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $quote_serial_nos[] = $row;
}
$sql = "SELECT * FROM quote_include WHERE status = 1";
$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $quote_includes[] = $row;
}
$sql = "SELECT * FROM quote_fault WHERE status = 1";
$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $quote_faults[] = $row;
}
$sql = "SELECT * FROM quote_collection WHERE status = 1";
$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $quote_collections[] = $row;
}
$sql = "SELECT * FROM quote_accessories WHERE status = 1";
$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $quote_accessories[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Trade your mac</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css"/>
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
     $('.flexslider').flexslider({
        animation: "slide"
      });
  });
</script>
</head>
<body>
<a id="home"></a>
<div class="jumbotron masthead">
	<div class="navbar navbar-fixed-top navbar-absolute">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
				<a class="brand" href="#"> <img src="img/logo.png" alt="logo"></a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li class="active"><a href="#home">HOME</a></li>
						<li><a href="#sellyourmac">SELL YOUR MAC</a></li>
						<li><a href="#howitworks">HOW IT WORKS</a></li>
						<li><a href="#contact">CONTACT US</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="slide3">
						<p class="pull-left"><img src="img/brokenmac.jpg" alt="server"></p>
						<div class="pull-right">
							<h1>Sell Macbooks</h1>
							<div class="divider"></div>
							<h3>We will buy your old laptops</h3>
						</div>
					</div>
				</li>
				<li>
					<div class="slide3">
						<p class="pull-right"><img src="img/mac.png" alt="server"></p>
						<h1>Sell Macbooks</h1>
						<div class="divider"></div>
						<h3>We will buy your old laptops</h3>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="domain">
	<div class="container">
		<div class="row-fluid PageHead">
			<div class="span12">
				<h1>Get best price for your Macbooks</h1>
				<div class="divider1"></div>	
				<h3>100% best price for your used, old and damaged Macbooks</h3>
			</div>
		</div>
	</div>
</div>
<div class="clear mv-30"></div>
<div class="row-fluid PageHead">
	<div class="span12">
		<h1>We Offer</h1>
		<div class="divider1"></div>
	</div>
</div>
<div class="container">
	<div class="row-fluid mainFeatures">
		<div class="span4">
			<div class="thumbnail"> 
				<img src="img/mac.jpg" alt="secure">
				<div class="caption">
				<h4>We buy used and damaged Macbooks</h4>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="thumbnail"> 
				<img src="img/guarantee.jpg" alt="secure">
				<div class="caption">
				<h4>Best price for your device</h4>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="thumbnail"> 
				<img src="img/deliver.jpg" alt="secure">
				<div class="caption">
				<h4>Free collection all over Uk</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clear mv-30"></div> <a id="howitworks"></a>
<div class="domain pv-50">
	<div class="row-fluid PageHead">
		<div class="span12">
			<h1>How it works</h1>
			<div class="divider1"></div>
		</div>
	</div>
	<div class="mv-30"></div>
	<div class="container">	
		<div class="row-fluid">
			<div class="span4 features"> 
				<div class="icn">
					<img src="img/getquote.png" alt="icon">
				</div>
				<h3>Get Quotation</h3>
				<h5>Call Us, Email Us, Walk In</h5>
			</div>
			<div class="span4 features"> 
				<div class="icn">
					<img src="img/agreed.png" alt="icon">
				</div>
				<h3>Agreed</h3>
				<h5>Free Collection, Drop In, Post Us</h5>
			</div>
			<div class="span4 features"> 
				<div class="icn">
					<img src="img/payment.png" alt="icon">
				</div>
				<h3>Quick Payment</h3>
				<h5>Cash, Bank Transfer</h5>
			</div>
		</div>
	</div>
</div>
<div class="clear mv-30"></div> <a id="sellyourmac"></a>
<div class="row-fluid PageHead">
	<div class="span12">
		<h1>Tell us about what you've got</h1>
		<div class="divider1"></div>
		<h3>Free Quote</h3>
		<h5 class="text-center">Please fill in the form below for your free quote</h5>
	</div>
</div>
<form action="functions.php" method="POST">
<div class="container"> <a id="features"></a>
	<div class="row-fluid mainFeatures ContactUs">
		<div class="span6">
			<div class="form-group">
			<label>Serial Number</label>			
                        <select name="quote_serial_no" class="form-control" id="sel1" required>
                              <option value="">Select Serial Number</option>
                              <?php foreach($quote_serial_nos as $quote_serial_no){ ?>
                              <option value="<?php echo $quote_serial_no['quote_serial_no_id']; ?>"><?php echo $quote_serial_no['name']; ?></option>
                              <?php } ?>  
			  </select>
			</div>
			<div class="form-group">
				<label>Includes:</label>
                                <?php foreach($quote_includes as $quote_include){ ?>
                                <input name="quote_include" type="checkbox" value="<?php echo $quote_include['quote_include_id']; ?>"><?php echo $quote_include['name']; ?> 
                                <?php } ?>
			</div>
			<div class="form-group">
				<label>Other Accessories:</label>
				<?php foreach($quote_accessories as $quote_accessory){ ?>
                                <input name="quote_accessories" type="checkbox" value="<?php echo $quote_accessory['quote_accessories_id']; ?>"><?php echo $quote_accessory['name']; ?> 
                                <?php } ?>
			</div>
			<label>Contact Name:</label>
                        <input name="name" class="input-block-level" type="text" required="required" placeholder="Enter Name">
			<label>Email:</label>
                        <input name="email" class="input-block-level" type="email" required="required" placeholder="Email ID">
			<div class="form-group">
				<label>Preferred method of collection:</label>
                                <?php foreach($quote_collections as $quote_collection){ ?>
                                <input name="quote_collection" type="radio" value="<?php echo $quote_collection['quote_collection_id']; ?>"><?php echo $quote_collection['name']; ?> 
                                <?php } ?>
			</div>
		</div>
		<div class="span6">
			<div class="form-group">
			<label>Any Faults / Imperfections</label>			
                          <select name="quote_fault" class="form-control" id="sel1" required>
				<option value="">Select Faults / Imperfections</option>
                                <?php foreach($quote_faults as $quote_fault){ ?>
                                <option value="<?php echo $quote_fault['quote_fault_id']; ?>"><?php echo $quote_fault['name']; ?></option>
                                <?php } ?> 
			  </select>
			</div>
			<div class="form-group">
				<label>Phone No</label>
                                <input name="phone_no" class="input-block-level" type="text" required="required" placeholder="Mobile Number">
				<label>Additional Notes</label>
                                <textarea name="additional_notes" class="input-block-level" rows="10"> Your Message </textarea>
			</div>	
                    <input type="hidden" name="quote_submit" value="quote_submit" />
                    <p><input type="submit" value="Send Message" class="btn btn-success btn-large" /></p>
		</div>
	</div>
</div>
</form>    
<div class="clear mv-30"></div>
<div class="domain">
	<div class="container">		
		<a id="testimonials"></a>
		<div class="row-fluid PageHead">
			<div class="span12">
				<h1>Testimonials</h1>
				<div class="divider1"></div>
			</div>
		</div>
		<div class="row-fluid Testimonials">
			<div class="span4">
				<div class="thumbnail"> <img src="images/client1.jpg" alt="client">
					<div class="caption">
						<p>tradeyourmac servers are having high physical security and power redundancy Your data will be secure with us.</p>
						<h5>James, Envato</h5>
				</div>
			</div>
			</div>
			<div class="span4">
				<div class="thumbnail"> <img src="images/client2.jpg" alt="client">
					<div class="caption">
						<p>With our ultra mordern servers and optical cables, your data will be transfered to end user in milliseconds.</p>
						<h5>Mariya, Activeden</h5>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="thumbnail"> <img src="images/client3.jpg" alt="client">
					<div class="caption">
						<p>We have a dedicated team of support for sales and support to help you in anytime. You can also chat with us.</p>
						<h5>Steven, Microlancer</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<div class="clear mv-30"></div>
<a id="contact"></a>
<div class="container"> <a id="contact"></a>
	<div class="row-fluid PageHead">
		<div class="span12">
		<h1>Contact Us</h1>
		<div class="divider1"></div>
		<h3>Keep in touch with us. we are here to help you</h3>
		</div>
	</div>
	<div class="row-fluid ContactUs">
		<div class="span6">
			<div class="row-fluid">
			<div class="span12"> <img src="http://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&amp;zoom=13&amp;size=600x300&amp;scale=2&amp;sensor=false" alt="static map"> <br>
			<br>
			</div>
			</div>
			<div class="row-fluid">
			<div class="span12">
			<h4>OPENING HOURS: </h4>
			<p>Mon – Fri 9:30AM - 06:00PM, Sat 9:30AM – 6:00PM </p>
			<h4>Address: </h4>
			<address>18 Arlington Way,London, EC1R 1UY , United Kingdom.<br>
			<h4>Phone : </h4>
			<p>020 7018 7490</p>
			<h4>Email : </h4>
			<p>contact@tradyourmac.com</p>
			</div>
			</div>
		</div>
                <form action="functions.php" method="POST">
		<div class="span6">
                        <input name="full_name" class="input-block-level" type="text" required="required" placeholder="Full Name">
                        <input name="email" class="input-block-level" type="email" required="required" placeholder="Email ID">
                        <input name="mobile" class="input-block-level" type="text" required="required" placeholder="Mobile Number">
                        <textarea name="message" class="input-block-level" rows="10"> Your Message </textarea>
                        <input type="hidden" name="contact_submit" value="contact_submit" />
			<p><input type="submit" value="Send Message" class="btn btn-success btn-large" /></p>
		</div>
                </form>    
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="row-fluid footerlinks">
			<div class="span3">
				<h3>Information</h3>
				<ul>
				<li>Home</li>
				<li>Sell your mac</li>
				<li>How it works</li>
				<li>Contact us</li>
				</ul>
			</div>
			<div class="span3">
			<h3>FOLLOW US</h3>
			<ul>
			<li><a href="#" target="_blank">Follow on Twitter</a></li>
			<li><a href="#" target="_blank">Like us on Facebook</a></li>
			<li><a href="#" target="_blank">Join on Linkedin</a> </li>
			</ul>
			</div>
			<div class="span3">
			<h3>EMAIL US</h3>
			<ul>
			<li><a href="#" target="_blank">support @tradeyourmac.com</a></li>
			<li><a href="#" target="_blank">sales @tradeyourmac.com</a></li>
			</ul>
			</div>
			<div class="span3">
			<h3>COMPANY</h3>
			<ul>
			<li> <a href="#">About us</a></li>
			<li><a href="#">Latest from Blog</a></li>
			<li><a href="#">Our Team</a></li>
			</ul>
			</div>
		</div>
		<div class="row-fluid copyright">
		<p>Copyright &copy; 2013. tradeyourmac Inc</p>
		</div>
	</div>
</div>

<script src="js/jquery.easing.1.2.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.js"></script>
<script>
            $(function() {
                $('.nav li a').bind('click',function(event){
                    var $anchor2 = $(this).parent();
				    var $anchor = $(this);
					$('.nav  li').removeClass('active');
                    $anchor2.addClass('active');
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 50
                    }, 1500,'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });
        </script>
</body>
</html>
<?php if($_REQUEST['sub'] == 'true'){
    echo "<script>alert('Successfully Submitted');</script>";
} ?>