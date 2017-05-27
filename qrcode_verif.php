<?php

require('config.php');
require('preparation_bdd.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
</head>
<script type="text/javascript">
function myload() {
var phone = <?php echo json_encode($_POST['caissier']); ?>;
var amount = <?php echo json_encode((string)$montant); ?>;
var order_id = <?php echo json_encode((string)$order_ref); ?>;
var paymentData = <?php echo json_encode($_POST['scan']); ?>;
var vendor_token = <?php echo json_encode($token_public); ?>;

document.getElementById('phone').value = phone;
document.getElementById('amount').value = amount;
document.getElementById('order_id').value = order_id;
document.getElementById('paymentData').value = paymentData;
document.getElementById('vendor_token').value = vendor_token;
}
</script>

<body onload="myload()">
<form name="myForm" action="http://lydia.kin/qrcode_curlopt.php" method="post">
    <input type="hidden" name='phone' id='phone' value="?"/>
	<input type="hidden" name='amount' id='amount' value="?"/>
	<input type="hidden" name='order_id' id='order_id' value="?"/>
	<input type="hidden" name='paymentData' id='paymentData' value="?"/>
	<input type="hidden" name='vendor_token' id='vendor_token' value="?"/>
            <button id="sub">CONFIRMER LA TRANSACTION</button>
</form>
			<a href="http://lydia.rezal.fr/qrcode.html"></a><input type="button" onclick="document.location.href='http://lydia.rezal.fr/qrcode.html';" value="ANNULER"></a>
</body>
</html>