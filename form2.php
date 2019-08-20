<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Buy QBc with Paypal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header" style="background-image:url('images/qbc1.jpg');">
				<div class="inner" style="font-weight:900;">
					
					<h1> Do you want to buy Quebecoin with <strong>Paypal</strong> , Its easy <br />
					</h1>
					<p>Just click here and follow the instructions</p>
					<ul class="actions special">
						<li><a href="form.php" class="button scrolly">Buy With Paypal</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<div class="row gtr-150">
						<div class="col-6 col-12-medium">
							<header class="major">
								<h2>What is Quebec Coin?<br />
								</h2>
							</header>
							<p>Quebecoin was launched in April 2014 and has gained a reputation for resilience as cryptocurrency. Crypto overcame all obstacles and survived. Thanks to a dedicated community that has seen its potential. In 2019, Quebec made the headlines as the best place in the world to establish cryptocurrency miners, which drew attention to Quebecoin. A new generation of community members is joining our efforts to rejuvenate and promote this crypto to new cryptocurrency enthusiasts.
</p>
						</div>
						<div class="col-6 col-12-medium imp-medium">
							
							<div class="login-form">
    <form action="form.php" method="post">
	
	
        <h2 class="text-center">Paying With Paypal</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="First name" name="fname" required="required">
			<br>
			<input type="text" class="form-control" placeholder= "Last name" name="lname"  required="required">
			
	  <br>
	 <input type="number" class="form-control" id="exampleFormControlInput1" name="amount" placeholder="Amount of QBC" required="required">
	 <br>
	 
	 <input type="text" class="form-control" placeholder="Wallet Address(QBC Address)"  name="address"required="required">
	 
	 <br>
	 
	  <input type="text" class="form-control" placeholder="Wallet Address(QBC Address) Again "  name="address1" required="required">
	  <br>
	 
		 
		<input type="email" class="form-control" placeholder="Email Address (Same as paypal)" name="email" required="required">
		
		<br>
		
		
		<br>

        
	</div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Secret Phrase" name="secret" required="required"  >
			<br>
        </div>
        <div class="form-group">
		
            
			
			<input type="submit" class="form-control"  name="submit" >
			
        </div>
            <?php 
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$amount = $_POST['amount'];
		$address = $_POST['address'];
		$address1 = $_POST['address1'];
		$email = $_POST['email'];
		$secret = $_POST['secret'];
		
		if (isset($_POST['submit'])) { 

		}		
		
	?>
    </form>
   
</div>
						</div>
					</div>
				</div>
			</section>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>