
<?php
echo "hello";
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
$query="SELECT id,email,first_name from users";
$result=mysqli_query($con,$query or die(mysqli_error($con)));
$fetch=mysqli_fetch_array($result);
echo "$fetch[0]"." $fetch[1]"." $fetch[2]";
?>

$email=mysqli