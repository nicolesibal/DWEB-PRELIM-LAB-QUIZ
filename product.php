<?php 
$user = "Nicole";
$greet = "Welcome back, ";
$product = "Lollipop";
$cost = 10;

if ($user === "Nicole") {
    $greetuser = $greet.$user;

}
for ($i = 1; $i <= 10; $i++) {
    $total = $cost * $i;

}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <nav>
      <a href="index.php">Home</a> | 
      <a href="candy.php">Candy</a> | 
      <a href="about.php">About</a> | 
      <a href="contact.php">Contact</a>
    </nav>
    <?=$greetuser;?>
    <h2>LOLLIPOP DISCOUNTS</h2>

    <table>
        <thead>
            <tr>
                <th>Packs</th>
                <th>Price</th>
            </tr>
            <?php 
            foreach ($total as $qty => $price) {
                $packword = ($qty == 1)? "pack" : "packs";
                echo"<tr>";
                echo"<td>$qty $packword</td>";
                echo"<td>$". number_format($price, 2)."</td>";
                echo"</tr>";
            }
            ?>
        </thead>
    </table>
    
    <?php include 'footer.php';?>

    
