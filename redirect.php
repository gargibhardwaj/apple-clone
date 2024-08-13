<!DOCTYPE html>
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
	<h1 style="font-size:50px;font-weight:bold;margin-top:50px">Order Bill.</h1>
		<?php
		$ord=$_GET["n1"];
		$cus=strtolower($_GET["n2"]);
		$dsn="mysql:dbname=web";
		$names="root";
		$password="";
		try
		{
			$conn=new PDO($dsn, $names, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo"Connection failed:".$e->getMessage();
		}
		$sql="SELECT * FROM `order_details` WHERE customer='$cus'";
		echo"<table border=0 width='30%' >";
		$rowcount=0;
		try{
			$rows=$conn->query($sql);
			foreach($rows as $row)
			{
				$rowcount++;
				echo"<tr><td>NAME:..... ".$row["customer"]."</td><td>EMAIL:..... ".$row["email"]."</td><td> TOTAL PRICE:..... ".$row["price"]."</td></tr>";
			}
		}
		catch(PDOException $e)
		{
			echo"Query failed:".$e->getMessage();
		}
		if($rowcount==0)
			echo"No match Found!!";
		echo"</table>";
		$conn=null;
	?>
	</body>
</html>