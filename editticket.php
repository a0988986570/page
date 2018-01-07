<?php
require_once("connectserver.php");
$sql="SELECT * FROM ticket";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){//擷取資料並新增
   // $_SESSION['t_name']=$row['t_name'];
     echo '<div class="update-border">';
     echo '<div class="update_image">';
     echo '<img src='.$row["t_info"].' alt="" />';
     echo '</div>';
     echo '<div class="update-form">';
     echo '<form action="edit2.php" method="post">';
     echo '<div>';
     echo '<span><label>展覽</label></span>';
     echo '<span><input name="t_name" type="text" class="textbox" value='.$row["t_name"].' readonly="readonly"></span>';
     echo '</div>';
     echo '<div>';
     echo '<span><label>票價</label></span>';
     echo '<span><input name="t_price" type="text" class="textbox" value='.$row["t_price"].'></span>';
     echo '</div>';
     echo '<div>';
     echo '<span><label>剩餘張數</label></span>';
     echo '<span><input name="t_rest" type="text" class="textbox" value='.$row["t_rest"].'></span>';
     echo '</div>';
     echo '<div>';
     echo '<span>';
     echo '<select class="modselect" name="sel" id="delect">';
     echo '<option value="1">修改</option>';
     echo '<option value="2">刪除</option>';
     echo '</span>';
     echo '</div>';
     echo '<div>';
     echo '<span><input type="submit" value="送出" class="mybutton"></span>';
     echo '</div>';  
     echo '</form>';
     echo '</div>';
     echo '</div>';
 }   

?>