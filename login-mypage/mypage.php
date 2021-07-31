<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_SESSION['id'])){

try{
    //try catch文。DBに接続できなければエラーメッセージを表示
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
}catch(PDOException $e){
die("<p>申し訳ございません。現在サーバーが込み合っており一時的にアクセス出来ません。<br>しばらくしてから再度ログインして下さい。</p>
<a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>"
);
}
$stmt = $pdo->prepare("select * from login_mypage where mail = ? && password = ?");

$stmt->bindValue(1,$_POST["mail"]);
$stmt->bindValue(2,$_POST["password"]);

$stmt->execute();

$pdo = NULL ;

while($row=$stmt->fetch()){
    $_SESSION['id'] =$row['id'];
    $_SESSION['name'] =$row['name'];
    $_SESSION['mail'] =$row['mail'];
    $_SESSION['password'] =$row['password'];
    $_SESSION['picture'] =$row['picture'];
    $_SESSION['comments'] =$row['comments'];
}

if(empty($_SESSION['id'])){
    header("Location:login_error.php");
}
if(!empty($_SESSION['id'])){
  $_SESSION['login_keep']=$_POST['login_keep'];
  }

}

setcookie('mail',$_POST['mail'],time()+60*60*24*7);
setcookie('password',$_POST['password'],time()+60*60*24*7);


?>

<!doctype HTML>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>マイページの登録</title>
    <link rel="stylesheet" type="text/css" href="mypage.css">
  </head>

  <body>


  <header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="log_out.php">ログアウト</a></div>
   </header>

    <main>
      <form action="mypage_hensyu.php" method="post" enctype="multipart/form-data">
       <div class="form-contents">
           <h2>会員情報</h2>
           <div class="hello">
             <?php echo"こんにちは!  ".$_SESSION['name']."さん" ?>
           </div>
           <div class = "profile_pic">
             <img src="<?php echo $_SESSION['picture']; ?>">
           </div>
           <div class="basic_info">
             <p>氏名 : <?php echo $_SESSION['name']; ?> </p>
             <p>メール : <?php echo $_SESSION['mail']; ?> </p>
             <p>パスワード : <?php echo $_SESSION['password']; ?> </p>
　　　　　　　</div>
            <div class="comments">
              <?php echo $_SESSION['comments']; ?>
            </div>
            <div class="toroku">
          　　 <input type="submit" class="submit_button" size="35" value="編集する">
           </div>

      </form>
    </main>

<footer>
© 2018 InterNous.inc. All rights reserved
</footer>


</body>
</html>