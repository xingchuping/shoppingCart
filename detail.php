<?php 
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
		</div>
		
		<div class="yd_img" style="display: none;">
			
		</div>
	</body>
</html>
//点击加入购物车
</script>