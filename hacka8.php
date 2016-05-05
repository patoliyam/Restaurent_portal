
<html>
<title>Bill for Your Order</title>
<body>
<style>
body
{
background-color:#ecffb3;
color:#660033;

}
h3
{
color:#333399;
}

</style>
<?php
	$hostname="localhost";
	$username="root";
	$password="";
		
	$table=$_POST['var1'];
	
	$l1=$_POST['qty1'];
	$l2=$_POST['qty2'];
	$l3=$_POST['qty3'];
	$l4=$_POST['qty4'];
	$l5=$_POST['qty5'];
	$l6=$_POST['qty6'];
	$sum1=$sum2=$sum3=$sum4=$sum5=$sum6=0;
	try
	{
	$dbh2=new PDO("mysql:host=$hostname;dbname=test", $username, $password);
	echo '<h3>Thank you Mr./Ms. '.$_POST['cust_name'].'. You have ordered</h3>' ;
	
	
	
	if($l1>0)
	{
		$sql1= 'SELECT * FROM '.$table.' WHERE ID = 1';
		
		foreach ($dbh2->query($sql1) as $row)
 	       {
 	       print $row['Items'] .' -  Rs.'. $row['Price per item'] .'  *  '.$l1. '<br />';
  		$sum1 = $row['Price per item'] * $l1;
  		
 	 	}
  		
  	}
  	
  	
  	if($l2>0)
	{
		$sql2 = 'SELECT * FROM '.$table.' WHERE ID = 2';
		foreach ($dbh2->query($sql2) as $row)
      		{
        	print $row['Items'] .' -  Rs.'. $row['Price per item'].'  *  ' .$l2. '<br />';
  		$sum2 = $row['Price per item'] * $l2;
  		}
  	}
  	if($l3>0)
	{
		$sql3 = 'SELECT * FROM '.$table.' WHERE ID = 3';
		foreach ($dbh2->query($sql3) as $row)
        	{
       	 	print $row['Items'] .' -  Rs.'. $row['Price per item'] .'  *  '.$l3. '<br />';
  		$sum3 = $row['Price per item'] * $l3;
  		}
  	}
  	
  	if($l4>0)
	{
		$sql4 = 'SELECT * FROM '.$table.' WHERE ID = 4';
		foreach ($dbh2->query($sql4) as $row)
        	{
        	print $row['Items'] .' -  Rs.'. $row['Price per item'] .'  *  '.$l4. '<br />';
  		$sum4 = $row['Price per item'] * $l4;
  		}
	}

	if($l5>0)
	{
		$sql5 = 'SELECT * FROM '.$table.' WHERE ID = 5';
		foreach ($dbh2->query($sql5) as $row)
        	{
        	print $row['Items'] .' -  Rs.'. $row['Price per item'] .'  *  '.$l5. '<br />';
  		$sum5 = $row['Price per item'] * $l5;
  		}
	}
	
	if($l6>0)
	{
		$sql6 = 'SELECT * FROM '.$table.' WHERE ID = 6';
	
		foreach ($dbh2->query($sql6) as $row)
        	{
        	print $row['Items'] .' -  Rs.'. $row['Price per item'].'  *  '.$l6. '<br />';
  		$sum6 = $row['Price per item'] * $l6;
  		}
  	}
  	
  	
  	$total = $sum1 + $sum2 + $sum3 +  $sum4 + $sum5 + $sum6 ;
  	echo '<br><hr><br><h3>Your total is Rs. '.$total.'</h3>'.'<br>';
 $dbh2->exec("INSERT INTO cust(Customer_name,Total) VALUES ('{$_POST['cust_name']}','$total')");
  	
		
		
		$dbh2 = null;
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	

?>
<hr>
<a href="hacka1.html"><h3>Go To HOME PAGE</a>
</body>
</html>
