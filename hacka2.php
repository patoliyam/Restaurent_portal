<html>
<body>
<style>
.a{
text-align: center;
width: 50%;
}
body
{
background-color:#b3d9ff;
font-family: verdana;
}
h3{
color:#800000;
text-decoration:underline;
}

</style>

<?php
$hostname="localhost";
$username="root";
$password="";
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=test", $username, $password);
//    echo 'Connected to database<br><br>';
    echo '<h3>Beverages</h3>';
    $sql1 = "SELECT * FROM Beverages";
    foreach ($dbh->query($sql1) as $row1)
        {
        print $row1['ID'] .' - '. $row1['Items'] .'-'.$row1['Price per item'].'<br>';
        }
     
       echo '<h3>Brekfast</h3>';
    $sql2 = "SELECT * FROM Breakfast";
    foreach ($dbh->query($sql2) as $row2)
        {
        print $row2['ID'] .' - '. $row2['Items'] .'-'.$row2['Price per item'].'<br>';
        }
     echo '<br>'; 
     
     
    echo '<h3>Lunch</h3>';
    $sql3 = "SELECT * FROM Lunch";
    foreach ($dbh->query($sql3) as $row3)
        {
        print $row3['ID'] .' - '. $row3['Items'] .'-'.$row3['Price per item'].'<br >';
        }
     echo '<br>'; 
     
         echo '<h3>Dinner</h3>';
    $sql4 = "SELECT * FROM Dinner";
    foreach ($dbh->query($sql4) as $row4)
        {
        print $row4['ID'] .' - '. $row4['Items'] .'-'.$row4['Price per item'].'<br >';
        }
     echo '<br>'; 
     
         echo '<h3>Snacks</h3>';
    $sql5 = "SELECT * FROM Snacks";
    foreach ($dbh->query($sql5) as $row5)
        {
        print $row5['ID'] .' - '. $row5['Items'] .'-'.$row5['Price per item'].'<br >';
        }
     echo '<br>';      
     
     
     
     
     
     
      
    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
<a href="hacka1.html"><h3>Go to Previous Page </h3></a>
</body>
</html>
