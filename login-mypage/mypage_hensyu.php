<?php
mb_internal_encoding("utf8");
session_start();

?>

<!doctype HTML>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>マイページの登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
  </head>

  <body>


  <header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="log_out.php">ログアウト</a></div>
   </header>

    <main>
      <form action="mypage_update.php" method="post" enctype="multipart/form-data">
       <div class="form-contents">
           <h2>会員情報</h2>
           <div class="hello">
             <?php echo"こんにちは!  ".$_SESSION['name']."さん" ?>
           </div>
           <div class = "profile_pic">
             <img src="<?php echo $_SESSION['picture']; ?>">
           </div>
           <div class="basic_info">
             <p>氏名 : <input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
             <p>メール : <input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"> </p>
             <p>パスワード : <input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password"> </p>
　　　　　　　</div>
　　　　　　　　<hr>
            <div class="comments">
            <textarea rows="3" cols="80" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
           </div>
           
            <div class="toroku">
              <input type="submit" class="submit_button" size="40" value="この内容に変更する"> 
            </div>
      </div>
      </form>
    </main>

<footer>
© 2018 InterNous.inc. All rights reserved
</footer>


</body>
</html>