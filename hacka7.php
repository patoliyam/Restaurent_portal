<html>
<title>Members only Page</title>
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
h2
{
color:red;
}
</style>
<?php
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];
$gross=0;

	$hostname="localhost";
	$username="root";
	$password="";

	$dbh3=new PDO("mysql:host=$hostname;dbname=test", $username, $password);
if($user_name=="Shubz" && $user_password=="root")
{
echo "<h3>LOGIN SUCCESSFUL</h3><br>";
echo 'All sales till now is<br>';

 $sql = "SELECT * FROM cust";
    foreach ($dbh3->query($sql) as $row)
        {
        print $row['S.No'].')'.$row['Date'].' - '.$row['Customer_name'] .' - '. $row['Total'].'<br>';
        $gross+=$row['Total'];
        }
        echo "<hr>";
	echo '<h2> THE TOTAL SALES TILL NOW IS RS. '.$gross.'<br>';
}
else
{echo "Wrong combination of user name and password";
}


        






?>
<hr>
<a href="hacka1.html"><h3>Go To HOME PAGE</a>
</body>
</html>
