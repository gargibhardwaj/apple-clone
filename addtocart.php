<?php session_start();

$products = array("Laptop","Tab","Mobile","battery","cable","hard disk");

$price = array(50.99,40.99,30.99,10.12,5.45,3.92);
if (!isset($_SESSION["count"]))
$_SESSION["count"]=0;

 //Reset
 //---------------------------
 //Add
 if ( isset($_GET["PID"]) )
   {
   $PID = (int)$_GET["PID"];
  $i=$_SESSION["count"]; 
  
   $_SESSION["name"][$i] = $products[$PID];
   $_SESSION["PID"] [$i]= $PID;
   $_SESSION["price"][$i] = $price[$PID];
   $_SESSION["count"]++;
   echo "<br>Product added to Cart successfully<br>";
   echo "No of products in cart ".$_SESSION["count"];
 }

  
 ?>
 <br><a href="viewcart.php">View Cart</a>



