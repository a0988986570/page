<?php
require_once("connectserver.php");

?>
<?php
session_start();
?>

<!DOCTYPE HTML>
<head>
<title>管理介面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="home.php">主頁</a></li>
						<li><?php require_once("adhome.php");?></a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="register.php">註冊</a></li>
							<li><a href="#" onclick="out();"><?php require_once("logout.php");?></a></li>
							<li><?php require_once("alter.php"); ?>修改資料</a></li>
							<script type="text/javascript">
							 function out(){
								window.location="out.php";	
                       		}
							</script>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="administrator.php"><img src="images/logo.png" alt="" /></a>
					</div>
						 <div class="clear"></div>
					</div>			
                <div class="header_bottom">
					<div class="header_bottom_left">				
						<div class="categories">
						   <ul>
						  	   <h3>Categories</h3>
							      <li><a href="#" onclick="add();return false;">新增</a></li>
							      <li><a href="#" onclick="update();return false;">編輯</a></li>
							       <li><a href="#" onclick="record();return false;">銷售紀錄</a></li>
							       <li><a href="#" onclick="message();return false;">訊息</a></li>
								   <?php //var_dump($_SESSION); ?>
						  	 </ul>
						</div>					
		  	         </div>	  
                       <script type="text/javascript">
                       function add(){
                       var value=0;
                       location.href="add.php?value="+value;
                       }

                       function update(){
                        var value=1;
                       location.href="update.php?value="+value;
                       }

                       function see(){
                        var value=2;
                       location.href="see.php?value="+value;
                       }

                       function record(){
                        var value=3;
                       location.href="record.php?value="+value;
                       }

                       function message(){
                        var value=4;
                       location.href="adshow.php?value="+value;
                       }
                       </script>  
						<!------End Slider ------------>				 
			</div>
   		</div>
   </div>
   <!------------End Header ------------>
    <div class="main">
    <div class="wrap">
    <div class="content">
            <div class="record-form">
                <div>
					 <form action="record3.php" method="post"  name="record">
					 <select class="select" name="t_name" id="select">
                     <option value="">選擇你要查詢的展覽紀錄</option>
                     <?php require_once("record2.php"); ?>
                     </select>
                </div>
                <div>
                     <input type="submit" value="確定" class="recordbutton"></input><br/>
                </div>
                     <?php 
                     $t_name=$_POST['t_name'];
                     $sql="SELECT * FROM saleshistory2 WHERE ticketname='$t_name'";
                     $result=mysqli_query($conn,$sql);
                     echo '<div>';
                     echo '<table id="record-table" cellpadding = "7" width="700" border = "1">';
                     echo '<tr>';
                     echo "<th>展覽</th>";
                     echo "<th>購買數量</th>";
                     echo "<th>購買者</th>";
                     echo "<th>購買者帳戶</th>";
                     echo "</tr>";
                     while( $row=mysqli_fetch_array($result,MYSQLI_BOTH)){
                         echo "<tr>";
                         echo '<th>'.$row["ticketname"].'</th>';
                         echo '<th>'.$row["ticketquantity"].'</th>';
                         echo '<th>'.$row["buyername"].'</th>';
                         echo '<th>'.$row["buyeraccount"].'</th>';
                         echo '</tr>';
                        
                     }
                     echo"</table>";
                     echo '</div>';
                     ?>
					 </form>
			</div>
            <div class="clear"></div>
    </div>   
    </div>
    </div>

    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>

