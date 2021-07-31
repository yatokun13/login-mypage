<!doctype HTML>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>マイページの登録</title>
    <link rel="stylesheet" type="text/css" href="login_error.css">
  </head>

<body>
  <header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="login.php">ログイン</a></div>
   </header>

    <main>
      <form action="mypage.php" method="post" >
       <div class="form-contents">

           <div class="error">
               <label>メールアドレスまたはパスワードが間違っています。</div></label>
           </div> 
            
            
            <div class="mail">
                 <label>メールアドレス</label><br>
                   <input type="text" class="formbox" size="40" name="mail" >
           </div>
           <div class="password">
                 <label>パスワード</label><br>
                   <input type="password" class="formbox" size="40" name="password" >
           </div>
           
           <div class="toroku">
           <input type="submit" class="submit_button" size="35" value="ログイン">
           </div>
       <div>
      </form>
    </main>

<footer>
© 2018 InterNous.inc. All rights reserved
<footer>


</body>
</html>