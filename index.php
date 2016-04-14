<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payu webcheckout</title>
</head>
<body>
  <?php 
    $merchantId = "500238";
    $ApiKey = "6u39nqhq8ftd0hlvnjfs66eh8c";
    $referenceCode = "TestPayU";
    $amount = 31231.12;
    $currency = "USD";
    $accountId = "500537";
    $buyerEmail = "test@test.com";
    $signature = "$ApiKey~$merchantId~$referenceCode~$amount~$currency";
   ?>
  <form method="post" action="https://stg.gateway.payulatam.com/ppp-web-gateway/">
    <input name="merchantId"    type="hidden"  value="<?php echo $merchantId ?>"   >
    <input name="accountId"     type="hidden"  value="<?php echo $accountId ?>" >
    <label for="">Descripcion del producto</label><br>
    <input name="description"   type="text"  value="Test PAYU"  ><br>
    <input name="referenceCode" type="hidden"  value="TestPayU" >
    <label for="">Monto</label><br>
    <input name="amount"        type="text"  value="<?php echo $amount ?>"   ><br>
    <input name="tax"           type="hidden"  value="0"  >
    <input name="taxReturnBase" type="hidden"  value="0" >
    <input name="currency"      type="hidden"  value="<?php echo $currency ?>" >
    <input name="signature"     type="hidden"  value="<?php echo $signature ?>"  >
    <input name="test"          type="hidden"  value="1" >
    <input name="buyerEmail"    type="hidden"  value="test@test.com" >
    <input name="responseUrl"    type="hidden"  value="http://localhost/pruebas/payu_webcheckout/response.php" >
    <input name="confirmationUrl"    type="hidden"  value="http://localhost/pruebas/payu_webcheckout/confirmation.php" >
    <input name="Submit"        type="submit"  value="Enviar" >
  </form>
</body>
</html>