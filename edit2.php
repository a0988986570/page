<?php
require_once("connectserver.php");

$price=$_POST['t_price'];
$rest=$_POST['t_rest'];
$name=$_POST['t_name'];
$del=$_POST['sel'];

$sql="UPDATE ticket SET t_price='$price',t_rest='$rest' WHERE t_name='$name'";
$sql2="DELETE FROM ticket WHERE t_name='$name'";

if($del==1){
    $result=mysqli_query($conn,$sql);
    echo'修改成功';
}
else if($del==2){
    $result=mysqli_query($conn,$sql2);
    echo '刪除成功';
}

header("Refresh:1;url=update.php");
?>