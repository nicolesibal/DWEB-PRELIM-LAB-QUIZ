<?php
$user = "Nicole";
$pagbati = "Welcome back, ";
$offer = ["Chocolate", 5, 25, 20];
$reg_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $offer_price - $reg_price;

?>


<!DOCTYPE html>
<html>
  <head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <br>
    <h2>MULTI-BUY OFFER</h2>
    <?=$pagbati. $user; ?>
    <p>Buy <?= $offer[1]?> packs of <?=$offer[0]?> for $<?=$offer[3]?></p>
    <p>(usual price $<?=$offer[2]?>)</p>
  
    <!--<nav>
      <a href="index.php">Home</a> | 
      <a href="candy.php">Candy</a> | 
      <a href="about.php">About</a> | 
      <a href="contact.php">Contact</a>
    </nav>-->
    <?php include 'footer.php';?>

    
