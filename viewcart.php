<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<style>
a:link{text-decoration: none;}
	
		</style>
</head>
<body style="font-family:  Helvetica, Arial, sans-serif;">
<div  style="background-color:black;padding:15px;
	text-align:center;
	width:100%;
	height:30px;">
			<center><table  style="text-align:center;">
				<tr>
					<td width="20%" style="padding-right:20px"><a href="mainpage.html"><img src="images/appleicon.jpg" alt="no image" width="12%" /></a></td>
					<td ><a href="page1.html" style="color:white;font-size:17px">Mac</td>
					<td  ><a href="Project.html" style="color:white;font-size:17px">iPhone</td>
					<td ><a href="http://localhost/viewcart.php" style="color:white;font-size:17px">Bag</a></td>
					<td><a href="http://localhost/WebProject.html" style="color:white;font-size:17px">Order</a></td>

				</tr>
			</table></center>
		</div>
<h1 style="font-size:50px;font-weight:bold; margin-left:40px;margin-top:50px">Here what's in your bag.</h1>
<img src="ss1.jpg" style="float:left">
<?php

if (isset($_SESSION["count"]))
{

echo "<table border='0' cellpadding='20px' style='float:right'><tr style='color:#6262ff;font-size:20px;font-weight:bold'><td> #</td><td> Product ID</td><td>Product name</td><td> Price</td><td> Color</td><td> Capacity</td></tr>";
$sum=0;
for($i=0;$i<$_SESSION["count"];$i++)
{echo "<tr><td> $i</td>";
	echo "<td>".$_SESSION["PID"][$i]."</td>";
  echo  "<td>".$_SESSION["Model"][$i]."</td>";
  echo  "<td>".$_SESSION["Price"][$i]."</td>";
  echo  "<td>".$_SESSION["Color"][$i]."</td>";
   echo "<td>".$_SESSION["Capacity"][$i]."</td></tr>";
   $sum=$sum+$_SESSION["Price"][$i];
   
 }
   echo "</table>";
   echo "<b style='font-size:25px;font-weight:bold; color:#6262ff; margin-left:640px;margin-top:9500px'>Total amount  $".$sum."/-</div>";
   //session_destroy();
   $_SESSION["total"]=$sum;
}
   else
header("location:emptybag.html");

?>
</b>
<form action="checkout.php" method="get">
<button style="font-size: 17px;
    font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
   background-color: #6262ff;
    color: white;
    border-width: 1px;
    border-style: solid;
    border-radius: 4px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 4px;
    padding-bottom: 4px;
    text-align: center;
	width: 10%;
	margin-left:720px;
    box-sizing: border-box;
    padding: .76471rem .88235rem .82353rem;
    padding-top: 0.76471rem;
    padding-right: 0.88235rem;
    padding-bottom: 0.82353rem;
    padding-left: 0.88235rem;" type="submit" >Checkout</button><br>
</form>
<br><br>
	<div style="margin-left:1300px;text-decoration:none;font-size:20px">
	<a href="mainpage.html" ><button type="button" style=" background-color: gray;
    color: white;
	 padding-left: 15px;
    padding-right: 15px;
    padding-top: 4px;
    padding-bottom: 4px;
    text-align: center;
    border-width: 1px;
    border-style: solid;
    border-radius: 4px;" >Continue Shopping</button></a><br>
	<a href="destroy.php" style="margin-left:15px;color:blue;text-decoration:none">Empty my Bag</a>
	</div>
</body>
</html>

