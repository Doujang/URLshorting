<?php
/*xcsoft版权所有! 博客http://blog.xsot.cn*/
/*
Nginx伪静态:
   if (!-e $request_filename) {
        rewrite ^(.*)/([0-9a-zA-Z]*)$ $1/index.php?id=$2 last;
    }
Apache伪静态
暂无!可以按照Nginx的伪静态自己去转换!
*/

/*你的网站地址*/
$url='https://xsot.tk/';

/*你的数据库地址*/
$conn=mysqli_connect(
"localhost",     //数据库地址
"db_username",          //数据库用户名
"db_passwd", //数据库密码
"db_name"           //数据库名
);

/*网站标题(网页中所显示的)*/
$title1='星辰短域|密语';

/*网站标题(网页标签所显示的）*/
$title='星辰短域|密语 - Powered by XCSOFT';

/*短网址后需要的字母或数字个数,推荐4个以上,最长20!(请填写数字)*/
$pass='4';

/*短网址包含的内容,即短网址后会出现的字符*/
$strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

/*设置access是否打开on->开启/其余字符关闭*/
$access='on'
?>
