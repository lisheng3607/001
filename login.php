<!DOCTYPE html>
<html>
  <head>
    <title>登录结果</title>
  </head>
  <body>
    <?php
      $username = $_POST['username'];
      $password = $_POST['password'];

      if($username == "admin" && $password == "123456"){
        echo "<h2>登录成功！</h2>";
      }else{
        echo "<h2>登录失败！</h2>";
      }
    ?>
  </body>
</html>