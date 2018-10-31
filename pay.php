<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
if(isset($_POST['btnsubmit'])){
		$data= array('number' => $_POST['cardnumber'],
					'exp_month' => $_POST['exp_month'],
					'exp_year' => $_POST['exp_year'],
					'amount'=> ($_POST['amount']*100));
		$result=  $myStripe ->checkout($data);
		echo "<pree>"; print_r($result);
		
}
?>