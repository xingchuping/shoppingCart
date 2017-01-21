<?php
   //加入购物车操作
    require_once '../connect.php';
    //接收传递过来的post参数
    //准备写入数据库的数据
    $productid = $_POST['productId'];
    
    $sql = "select title,price,cover from shop_product where id= $productid ";
    $price = mysql_query($sql);
    if($price && mysql_num_rows($price)) {
        $row = mysql_fetch_assoc($price);
        $priceshop = $row['price'];
        $cover = $row['cover'];
        $title= $row['title'];
        //print_r($priceshop);
    }
    //写入购物车的数据库（更新或添加）
    
    //判断shop_cart是否存在要加入购物车的商品的id
    $isproductid = "select * from shop_cart where productid =$productid";
    $productidsql = mysql_query($isproductid);
    if($productidsql && mysql_num_rows($productidsql)) {
        $shopsql = "update shop_cart set num = num+1 where  productid =$productid";        
    }else{
        $shopsql = "insert into shop_cart(productid,price,cover,title) values ('$productid','$priceshop','$cover','$title')";
    }
    if(mysql_query($shopsql)) {
        $response = array(
            'errno' => 0,
            'msg'   => 'success',
            'data'  => 'true'
        );        
    }else{
        $response = array(
            'errno' => -1,
            'msg'   => 'fail',
            'data'  => 'false'
        );
    }
   
    echo json_encode($response);  

?>