 <?php
$con=new mysqli('localhost','root','','form',);
if($con){
echo "Connection successfil";
}
else{
die(mysqli_error($conn);
}
?>
