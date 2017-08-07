
<?php 
    session_start();

echo $_SESSION["sessionid"];
 

$ses=$_SESSION["sessionid"];
echo $ses;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";
$cake= $_GET['cake'];
$prodid;
$prodname;
$price;
// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "select rcakename,rprice from rcake where rcakeid='$cake';";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			
			$prodid=$cake;
			$prodname= $row['rcakename'] ;
			$price= $row['rprice'];			
		}
	mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	
echo $ses;
$sql1 = "insert into orders values('$ses','$prodid','$prodname','$price')";

if(mysqli_query($link, $sql1))
{
    echo "Records added successfully.";
} 
else
{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
header('Location: /bakerytest/bag.php');
?>