<?php
require_once("connectserver.php");
$b=$_POST["value"];
$name=$_POST["ticket"];
$sql1="SELECT t_rest FROM ticket where t_name='$name'";
$result=mysqli_query($conn,$sqli);
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
$rest=$row['t_rest'];
$rest-=$b;
$sql2="UPDATE ticket SET t_rest ='$rest'";
$result=mysqli_query($conn,$result);
echo 'aaaaa';
//header("Location:shop_fin.php");
?>