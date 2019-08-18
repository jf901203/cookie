<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php  
 // 判断本地临时cookie是否存在

 if(isset($_COOKIE['username'])){
  echo "<a href='index.php'>ssss</a>";
 }else{

echo'<form action="login.php" method="post">
 
 <p><input type="text" name="name"></p>
 <p><input type="password" name="pwd"></p>
 <input type="submit">
</form>';

 }

?>


</body>
</html>