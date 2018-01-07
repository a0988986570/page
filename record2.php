<?php
require_once("connectserver.php");

$sql="SELECT DISTINCT ticketname FROM saleshistory2";
$num=0;
$result=mysqli_query($conn,$sql);
while( $row=mysqli_fetch_array($result,MYSQLI_BOTH)){
    $name=$row['ticketname'];
    echo "<option value='$name'>";
    echo $name;
    echo "</option>";
}


?>