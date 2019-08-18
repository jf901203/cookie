<?php 	

// login.php是请求的地址

header("Content-type:text/html;charset=utf-8");
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$link=mysql_connect('localhost','root','root') or die(mysql_error());
$db=mysql_select_db('city',$link);
$sql="select * from user where name='$name' and pwd='$pwd'";
$res=mysql_query($sql);
$arr=mysql_fetch_assoc($res);
if($arr['name']===$name){
  // 设置cookie 键 值 生命周期 作用域
setcookie('username',$arr['name'],time()+120,'/');
setcookie('userpwd',$arr['pwd'],time()+60,'/');
  echo "<a href='index.php'>ssss</a>";

}



?>