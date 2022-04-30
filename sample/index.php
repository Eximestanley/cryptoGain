<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>TOLOCRYPTO-P2P</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>

  <?php

    // Leave only for debuging purposes
    ini_set('display_errors', 1);

    require_once '../vendor/autoload.php';
    use DGCGroup\MonCashPHPSDK\Credentials;
    use DGCGroup\MonCashPHPSDK\Configuration;
    use DGCGroup\MonCashPHPSDK\PaymentMaker;
    use DGCGroup\MonCashPHPSDK\Order;
    use DGCGroup\MonCashPHPSDK\TransactionCaller;
    use DGCGroup\MonCashPHPSDK\TransactionDetails;
    use DGCGroup\MonCashPHPSDK\TransactionPayment;

    // Instanciation of the payment class
    $client = "f370d1740d04249328b440420005c549";
    $secret = "oHrr4tbnB1PH0uz6VQNUvdLZJ69qH70Sgav-57y0mA_7B89ZDoa-3veEJ4dy784O";
    $configArray = Configuration::getSandboxConfigs();

    $test = new Credentials($client, $secret, $configArray);
    if(!isset($_GET['paymentDetails'])){

    // Call to the payment request
// $amount= isset($_POST['q55_facturation']) ? $_POST['q55_facturation'] : $_POST['q55_facturation'];
 //$amount= isset($_POST['facturation']) ? $_POST['facturation'] : $_POST['facturation'];
    //$amount = $_POST["amount"];
  $amount = 500;
 $orderId = 9876543210;
 //$orderId = $_REQUEST["orderId"];
    $theOrder = new Order( $orderId, $amount );

    $paymentObj = PaymentMaker::makePaymentRequest( $theOrder, $test, $configArray );
    }
    

  ?>

  <body>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5"> Payment is Safe & Secure.</h1>
      <p class="lead"></p>
	        <hr />
	  
	  <p>&nbsp;</p>
<table class="email-container body-bg" style="width: 600px; text-align: center;" border="0" width="100" cellspacing="0" cellpadding="0" bgcolor="#F3F3FE">
<tbody>
<tr>
<td height="36">&nbsp;</td>
</tr>
<tr>
<td class="mobile-padding-fix" style="padding: 0 40px;" align="center">
<table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
<tbody>
<tr>
<td style="line-height: 0; font-size: 0; border-radius: 4px 4px 0 0;" colspan="3" bgcolor="#FF6100" height="8">&nbsp;</td>
</tr>
<tr>
<td width="36">&nbsp;</td>
<td>
<table style="width: 100%; border-bottom: 1px solid #ECEDF2;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
<tbody>
<tr>
<td style="line-height: 0; font-size: 0;" colspan="2" height="16">&nbsp;</td>
</tr>
<tr>
<td align="left" valign="top" width="40"><img style="display: block; height: 40px;" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo@144x144.png" alt="Jotform Logo" height="40" /></td>
<span id='datetime'></span>
<td align="left" valign="middle">
<h3 style="display: inline-block; vertical-align: middle; margin: 0 0 0 8px; font-size: 18px; font-weight: bold; color: #0a1551; font-family: Helvetica, sans-serif;">FACTURATION TOLOCRYPTO-P2P</h3>
</td>
</tr>
<tr>
<td style="line-height: 0; font-size: 0;" colspan="2" height="16">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
<td width="36">&nbsp;</td>
</tr>
</tbody>
</table>
<table style="width: 100%; border-radius: 0 0 4px 4px;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
<tbody>
<tr>
<td colspan="3" height="24">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr>
<tr>
<td width="36">&nbsp;</td>
<td align="center">
<table id="emailFieldsTable" class="mceNonEditable" style="font-size: 14px; font-family: Helvetica, sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="5">
<tbody id="emailFieldsTableBody">
<tr id="row_58" class="questionRow">
<td id="question_58" class="questionColumn" style="padding: 12px 8px 12px 0; color: #6f76a7;" valign="top" width="30%">IDENTIFIANT</td>
<td id="value_58" class="valueColumn" style="padding: 12px 0; color: #0a1551; font-weight: 500;" valign="top" width="70%"><?php ECHO $identifiant = $_POST["identifiant"] ?></td>
</tr>

  <?php
          if(!isset($_GET['paymentDetails'])){
      ?>
      <p>
        <br />
        <ul>
        
        </ul>
      </p>
      <p><a href='<?php echo $paymentObj->getRedirect();?>' target='_blank'><img style="width:100%;" src='https://moncashbutton.digicelgroup.com/Moncash-middleware/resources/assets/images/MC_button.png' ></a></p>
      <p><a class="btn btn-primary btn-lg" style="width:100%;" style="height:100%;" href='./?paymentDetails=1' ></a></p>
          <?php }?>
<tr id="row_51" class="questionRow">
<td id="question_51" class="questionColumn" style="padding: 12px 8px 12px 0; color: #6f76a7;" valign="top" width="30%">Envoyer</td>
<td id="value_51" class="valueColumn" style="padding: 12px 0; color: #0a1551; font-weight: 500;" valign="top" width="70%"><?php ECHO $envoyer = $_POST["envoyer"] ?></td>
</tr>
<tr id="row_52" class="questionRow">
<td id="question_52" class="questionColumn" style="padding: 12px 8px 12px 0; color: #6f76a7;" valign="top" width="30%">QUANTIT&Eacute; </td>
<td id="value_52" class="valueColumn" style="padding: 12px 0; color: #0a1551; font-weight: 500;" valign="top" width="70%"><?php ECHO $quantite = $_POST["quantite"] ?></td>
</tr>
<tr id="row_53" class="questionRow">
<td id="question_53" class="questionColumn" style="padding: 12px 8px 12px 0; color: #6f76a7;" valign="top" width="30%">CRYPTO CHOISIR</td>
<td id="value_53" class="valueColumn" style="padding: 12px 0; color: #0a1551; font-weight: 500;" valign="top" width="70%"> <?php ECHO $cryptochoisir = $_POST["cryptochoisir"] ?></td>
</tr>
<tr id="row_54" class="questionRow">
<td id="question_54" class="questionColumn" style="padding: 12px 8px 12px 0; color: #6f76a7;" valign="top" width="30%">TOTAL RECEVOIR</td>
<td id="value_54" class="valueColumn" style="padding: 12px 0; color: #0a1551; font-weight: 500;" valign="top" width="70%"><?php ECHO $totalrecevoir = $_POST["totalrecevoir"] ?></td>
</tr>
<tr id="row_55" class="questionRow">
<td id="question_55" class="questionColumn" style="padding: 12px 8px 12px 0; color: #6f76a7;" valign="top" width="30%">FACTURATION</td>
<td id="value_55" class="valueColumn" style="padding: 12px 0; color: #0a1551; font-weight: 500;" valign="top" width="70%"> <?php ECHO $facturation = $_POST["facturation"] ?></td>
</tr>
<tr id="row_59" class="questionRow">
<td id="question_59" class="questionColumn" style="padding: 12px 8px 12px 0; color: #6f76a7;" valign="top" width="30%">Email</td>
<td id="value_59" class="valueColumn" style="padding: 12px 0; color: #0a1551; font-weight: 500;" valign="top" width="70%"><?php ECHO $email = $_POST["email"] ?></td>
</tr>
<tr id="row_60" class="questionRow">
<td id="question_60" class="questionColumn" style="padding: 12px 8px 12px 0; color: #6f76a7;" valign="top" width="30%">WALLET ADDRESS</td>
<td id="value_60" class="valueColumn" style="padding: 12px 0; color: #0a1551; font-weight: 500;" valign="top" width="70%"><?php ECHO $walletaddress = $_POST["walletaddress"] ?></td>
</tr>
</tbody>
</table>
</td>
<td width="36">&nbsp;</td>
</tr>
<tr>
<td colspan="3" height="24">&nbsp;</td>
</tr>
</tbody>
</table>
<table id="autoresponder-footer" style="font-family: Helvetica, sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td bgcolor="#F3F3FE" height="16">&nbsp;</td>
<td bgcolor="#F3F3FE">&nbsp;</td>
</tr>
<tr>


</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height="30">&nbsp;</td>
</tr>
</tbody>


</table>
	  
      <hr />
	  

    
        
           
  </body>
</html>
