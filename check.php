<?php
	session_start();
?>
<?php


$products = array("","","","","","iMac 2.3GHz Dual-Core","iMac 3.6GHz Quad-Core","MacBook Air 1.6GHz Dual-Core","MacBook Air 1.8GHz Dual-Core","iMac Pro 2.3GHz Dual-Core","iMac Pro 2.3GHz Quad-Core ");
$price = array(0,0,0,0,0,1099.00,1499.00,1099.00,1499.00,1299.00,1799.00);
if (!isset($_SESSION["count"]))
$_SESSION["count"]=0;

 if ( isset($_GET["PID"]) )
  {
   $PID = (int)$_GET["PID"];
  $i=$_SESSION["count"]; 
  if($PID<5 ) 
  {
	  $arr=array("Model"=>$_GET["model"],"Color"=>$_GET["color"],"Capacity"=>$_GET["capacity"],"Pric"=>$_GET["price"]);
		$color= $arr["Color"];
		$capacity=$arr["Capacity"];
		$pric= (int)$arr["Pric"];
		$model=ucwords($arr["Model"]);
	   $_SESSION["Model"][$i] = $model;
	   $_SESSION["PID"] [$i]= $PID;
	   $_SESSION["Price"][$i]=$pric;
	   $_SESSION["Color"][$i] = $color;
	   $_SESSION["Capacity"][$i] = $capacity;
  }
  else
  {
	   $_SESSION["Model"][$i] = $products[$PID];
	   $_SESSION["PID"] [$i]= $PID;
	   $_SESSION["Price"][$i]=$price[$PID];
	   $_SESSION["Color"][$i] = "silver";
	   $_SESSION["Capacity"][$i] = "nill";
  }
   $_SESSION["count"]++;
   header("location:viewcart.php");
 }

  
 ?>




