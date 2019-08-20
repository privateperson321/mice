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
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	 <?php 
		
		
		
		if (isset($_POST['submit'])) { 
		
		$url = 'https://api.coinpaprika.com/v1/ticker/qbc-quebecoin';
								$data = json_decode(file_get_contents($url), true);
								
								 
								 $price = $data['price_usd'];
								
          $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$amount = $_POST['amount'];
		$address = $_POST['address'];
		$address1 = $_POST['address1'];
		$email = $_POST['email'];
		$secret = $_POST['secret'];
		$fee = 1.1;
		
		
		

		
		$finalamount = $amount * $price * $fee;
		
		$link =  round($finalamount,2);
		
		$intro = "Welcome   $fname  I'm glad you want to buy some Quebecoins, So if you want  $amount   Quebecoins you'll have to send $finalamount$  to this  <a href='http://paypal.me/QBCtoBTC/$link'  target='_blank'> Link </a>, send it as Friends and Family (the reason for this is less fees for the buyer and seller and also protects the seller from people who chargeback) in the notes section please paste the following information that has been generated below, between the hours 7:00 AM to 7:00 PM EST you will get your QBC in 30 to an hour , before or past the specified time please wait up to 6 hours.  If you don't get your QBC in 24 hours please email me with proof of payment and your information that was provided below thank you and long live QBC
";
		$info = "  $fname $lname <br> $amount QBC thats $finalamount$ USD <br> $address (make sure it is correct, any mistake on your part will not be given a refund) <br> $email <br> $secret ";
		
		if ($address !=$address1) {
			echo "Your wallet adresses are not the same";
		}
		echo '<body style="background-color:#00ff00">';
		
		
		}
			
		else {
			echo '<body style="background-color:red">';
		}
		
		
	
	?>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header" style="background-image:url('images/qbc1.jpg');">
				<div class="inner" style="font-weight:900;">
					
					<h1> Do you want to buy Quebecoin with <strong>Paypal</strong> , Its easy <br />
					</h1>
					<p>Just click here and follow the instructions</p>
					<ul class="actions special">
						<li><a href="almost.php" class="button scrolly">Buy With Paypal</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<div class="row gtr-150">
						<div class="col-6 col-12-medium">
							<header class="major">
							
							
								<h1>Fill out the form please!<br />
								</h1>
								
								<h2  >
								<?php 
								$url = 'https://api.coinpaprika.com/v1/ticker/qbc-quebecoin';
								$data = json_decode(file_get_contents($url), true);
								 echo "One QBC is worth ", $data['price_usd'];
								 
								 $price = $data['price_usd'];
								
								
								?>
								</h2>
							</header>
							<p>
							<?php 
							echo $intro;
							?>
							
</p>

<header class="major">

</header>

<p style="font-weight:500; ">
<?php 
echo $info;

?>
</p>
						</div>
						<div class="col-6 col-12-medium imp-medium">
						
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
							
							<div class="login-form">
    <form action="almost.php" method="post">
	
	
        <h2 class="text-center">Paying With Paypal</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="First name" name="fname" required="required">
			<br>
			<input type="text" class="form-control" placeholder= "Last name" name="lname"  required="required">
			
	  <br>
	 <input type="text" class="form-control"  name="amount" placeholder="Amount of QBC" required="required">
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