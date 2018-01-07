<?php
session_start();//session_start();//session start
?>


<?php
require_once("connectserver.php");
$account=$_SESSION['account'];

mysqli_set_charset($conn,"utf8");
//$sql = "select * from buyerticket";
//$sql2 = "DELETE *from buyerticket";
$sql = "delete from buyerticket where b_account='$account'";
$sql1="SELECT b_ticket,b_quantity FROM buyerticket WHERE b_account='$account'";
$result = mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){//每一筆資料
  $sql3="SELECT t_rest FROM ticket WHERE t_name='$row[0]'";
  $result1=mysqli_query($conn,$sql3);
  $value=mysqli_fetch_array($result1,MYSQLI_BOTH);
  $val=$value[0];
  $val-=$row[1];
  $sql2="UPDATE ticket SET t_rest='$val' WHERE t_name='$row[0]'";
  $result2=mysqli_query($conn,$sql2);
}
//$result2 = mysqli_query($conn,$sql2);

if(mysqli_query($conn,$sql)){
 
//echo '已成功刪除內容 1秒後回主選單.....';
header("Refresh: 3; url=home.php" );

}else{
  echo '結帳失敗';
  header("Refresh: 1; url=home.php" );
}

?>