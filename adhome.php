<?php
    require_once("connectserver.php");
    if(!empty($_SESSION['id']))
    $id=$_SESSION['id'];
    else{
        echo "<a href='sign.php'>聯絡我們";
        $id=-1;
        }
    
    
    if($id==1){//管理者
        echo "<a href='administrator.php'>管理頁面";
    }
    else if($id==2)
    echo "<a href='talk.php'>聯絡我們";
?>