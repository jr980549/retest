<?php
//關閉系統提示
error_reporting(0);
session_start();

// 檢査是否有登入（Session 有被設定）
if(isset($_SESSION["email"])==FALSE) {
 //如果沒有，轉址到登入頁面
 header('Location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>會員中心</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<br><br><br><br>
<div class="container">
 <div class="row jumbotron">
 <div class="col-md-6 col-md-offset-3"> 
 <h2 class="text-center">會員登入</h2>
 <!-- 在這裡請把 HTML 修改一下，讓他可以顯示出現在登入的會員姓名！ -->
 <!-- 提示：先取用 Session 中登入的人的 ID，然後再去資料庫中找出對應 ID 的姓名。 -->
 <h3>姓名：<?php echo $_SESSION["name"];?></h3>
 <a class="btn btn-primary btn-lg btn-block" href="msg.php">留言板</a>
 </div>
 </div>
</div>
</body>
</html>