<!DOCTYPE html>

<html>
<?php
session_start();
?>
	<head>
		                      
	</head>                                           
	<body>
		<?php
		$cus=strtolower($_GET["n"]);
		$address=strtolower($_GET["n1"]);
		$price=$_SESSION["total"];
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
		$sql="INSERT INTO `order_details` (`order`, `customer`, `email`, `price`) VALUES (NULL, '$cus', '$address', '$price')";
		echo "successful";
		$conn->query($sql);
		$conn=null;
		try
		{
			$conn=new PDO($dsn, $names, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo"Connection failed:".$e->getMessage();
		}
		$sql="SELECT * from order_details where customer='$cus'  ";
		echo"<table border=0 width='30%' >";
		$rowcount=0;
		try{
			$rows=$conn->query($sql);
			foreach($rows as $row)
			{
				$rowcount++;
				echo"<tr><td>".$row["order"]."</td></tr>";
				$_SESSION["ord"]=$row["order"];
			}
		}
		catch(PDOException $e)
		{
			echo"Query failed:".$e->getMessage();
		}
		if($rowcount==0)
			echo"No data";
		echo"</table>";
		$conn=null;
		header("location:orderid.php");
	?>
	</body>
</html>