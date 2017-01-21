<?php     require_once 'connect.php';    $shopSql = 'select * from shop_product';    $query = mysql_query($shopSql);    if($query && mysql_num_rows($query)) {        while ($row = mysql_fetch_assoc($query)) {           $data[] = $row;         }           }else{        $data = array();    }    //print_r($data);    ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>购物车详情页</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/amazeui.min.js" type="text/javascript"></script>
		<link href="css/amazeui.min.css" type="text/css" rel="stylesheet" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<script>
			$(function(){
				$(".share").click(function(){
					$(".yd_img").toggle();
				})
			})
		</script>
	</head>
	<body style='    max-width: 640px;margin: 0 auto;'>
		<div class="am-header-left am-header-nav return">
			<a href="javascript:history.back()" class="" style="border: 0;">
				<i class="am-icon-chevron-left"></i>
			</a>
		</div>
		<div class="share">
			<i class="am-icon-share-alt"></i>
		</div>		<?php 		  if(!empty($data)) {		      foreach ($data as $value) {		?>		          <div class="commodity">		          <div class="banner"><img src="<?php echo $value[cover] ?>"></div>		          		          <div class="detail">		          		          <span><?php echo $value[title] ?></span>		          		          <p>￥<?php echo $value[price] ?></p>		          		          <a href="javascript:;" class="shopcart" onClick = 'addCart(<?php echo $value[id] ?>)'>加入购物车</a>		          		          </div>		          </div>		<?php		      }		  }		?>				
		
		<div class="yd_img" style="display: none;">
			
		</div>
	</body>
</html><<script type="text/javascript">
//点击加入购物车function addCart(ID) {	//使用ajax添加到购物车里	$.ajax({		url:"admin/addCart.php",		data:{ 'productId' :ID },		type:'POST',		dataType:'json',		success:function(data) {			if(data.errno==0) {				alert("加入购物车成功");			}else{				alert("加入购物车失败");			} 				}	});}
</script>
