<html>
<?php 
    session_start();	
 include "headerfile.php"; ?>
<body>
<table>
<tr>
<td>Order ID<td>
<td><?php echo $_SESSION["sessionid"]; ?></td>
</tr>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";
 $total=0.0;
 $flag;
$ses=$_SESSION["sessionid"];
// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "select productid,prodname,price from orders where sessionid=$ses";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>productid</th>";
                echo "<th>prod desc</th>";
                echo "<th>price</th>";
				
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['productid'] . "</td>";
                echo "<td>" . $row['prodname'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }
        //echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo"<tr>";
echo "<td>total</td>";
echo "<td></td>";
$sql1 = "select sum(price) sp from orders where sessionid=$ses";
if($result = mysqli_query($link, $sql1)){
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			echo "<td>". $row['sp'] ."</td>";
			echo "</tr>";
		}
		echo "</table>";
 mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}
 
 
mysqli_close($link);
?>
<br>
<a href="\bakerytst\checkout.php">checkout</a>