<?php
session_start();//session_start();//session start
?>


<?php
$servername = "140.123.175.101";
$username = "team09";
$password = "iphone";
$database = "team09";
//create connection
$conn = mysqli_connect($servername, $username, $password,$database);

//check connection
if(!$conn){
  die ("Connection failed: " . mysqli_connect_error());       
}



mysqli_set_charset($conn,"utf8");

$b_quantity = $_POST['b_quantity'];
$b_ticket = $_POST['bticket'];
//echo $b_quantity;

$check = $_POST['checkbox'];
if(!empty($check)){
foreach($check as $value){
$sql="UPDATE buyerticket SET b_quantity='$b_quantity' WHERE id = $value";
$sql1="UPDATE saleshistory2 SET ticketquantity='$b_quantity' WHERE id = $value";
mysqli_query($conn,$sql);
mysqli_query($conn,$sql1);
}
}

//$sql="UPDATE buyerticket SET b_quantity='$b_quantity' WHERE b_ticket = '$b_ticket'";
//$sql1="UPDATE saleshistory SET ticketquantity='$b_quantity' WHERE ticketname = '$b_ticket'";


//mysqli_query($conn,$sql);
//mysqli_query($conn,$sql1);


echo "已成功修改內容";
header("Refresh: 1; url=shoppingcart.php" );


?>