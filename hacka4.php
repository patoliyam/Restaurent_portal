

<html>
<body>
<style>
body
{
background-color: #ffb3ff;
margin: 20px;
}
legend
{
padding-top: 20px;
font-family: verdana;
color: #800040;
font-size: 45px;
}

input[type=text], select {
    width: 150px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size:15px;
      
}

input[type=submit] {
    width: 300px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
    
}
p
{
font-size:25px;
}
</style>


<fieldset>
<legend>PLACE YOUR ORDER</legend>


<?php
echo "<form  method = 'post'>";
echo "<p>
What will you like to have??</p>
<input list='select1' name ='select1'>
	<datalist id='select1'>
		<option value = 'Beverages' >
		<option value = 'Breakfast'>
		<option value = 'Lunch'>
		<option value = 'Dinner'>
		<option value = 'Snacks'>
	</datalist><br><br>
<input type='submit' value = 'Submit'><br><br>";

echo "</form>";

$hostname="localhost";
$username="root";
$password="";


try {
    $dbh = new PDO("mysql:host=$hostname;dbname=test", $username, $password);
 //   echo 'Connected to database<br>';

   
   
	if(isset($_POST["select1"]))
	{
		$var1 = $_POST["select1"];
		$sql = 'SELECT * FROM '.$var1;
		
				
				$i=1;
				
				echo "<form action = 'hacka8.php' method ='post'>";
	        		//echo "<h3>$var1</h3>";
				echo "<input type= 'text' name='var1' value ='$var1'><br><br>";
				foreach ($dbh->query($sql) as $row)
        			{
				
				
				$qty = 'qty'.$i;
				
		      		
		      		//echo "<input type='checkbox' name='order' value = '$i'>";
		      		
		      		
		      		print /*'    -     '.*/$row['ID'] .'  -  '. $row['Items'].'   -   Rs. ' .$row['Price per item']/*.'<pre>......</pre>'*/ ;
		      		
		      		
		      		echo "
		     		<select name='$qty'>
		      			<option value='0'>0</option>
		      			<option value='1'>1</option>
		      			<option value='2'>2</option>
		      			<option value='3'>3</option>
		      			<option value='4'>4</option>
		      			<option value='5'>5</option>
		      		</select><br>";
	        		
	        		echo "<hr>";
	        		$i++;
	        		
	        		
	        		//echo $qty.'<br>';
        			}
        			echo "<p>What is your name ?</p> <br>
<input type='text' name = 'cust_name' placeholder = 'Name'><br><br>"; 

        			echo "<input type = 'submit' value= 'Place Order'> ";
        			echo "</form>";
        }
	

    
    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>

<br><br>


<br>

</fieldset>
<a href="hacka1.html"><h3>Go To HOME PAGE</a>
</body>
</html>
