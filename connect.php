<?php 

    require 'config.php';
//连库
    if(!($con = mysql_connect(HOST,USERNAME,PASSWORD))) {
        echo mysql_errno();
    }
//选库
    if(!(mysql_select_db('shoppingcart'))) {
        echo mysql_errno();
    }
//字符集
     if(!(mysql_query('set names utf8'))){
         echo mysql_errno();
     }
?>