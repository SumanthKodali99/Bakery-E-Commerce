
<?php 
    session_start();
$_SESSION["sides"]=$_GET['sides'];
echo $_SESSION["sessionid"];
 

$ses=$_SESSION["sessionid"];
echo $ses;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";
$prodid=rand(1111,9999);
$prodname='BYOC';
$price=$_SESSION["shape"]+$_SESSION["layer"]+$_SESSION["type"]+$_SESSION["flavor"]+$_SESSION["sides"];
echo "price";
echo $price;
$link = mysqli_connect($servername, $username, $password, $dbname);
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
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

