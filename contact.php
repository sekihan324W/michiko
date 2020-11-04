<?php
 session_start();
	// トークン作成のための関数
  function token($length = 20){  	
    return substr(str_shuffle('1234567890QWERTYUIOPLKJHGFDSAZXCVBNMabcdefghijklmnopqrstuvwxyz'), 0, $length);
  }
?>
<!doctype html>
<html lang="ja">
	<head>
		<title>フリーアナウンサーさとうみちこ Official Site</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="robots" content="noindex">
		<link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/main.css?ver=1.0.1" />
    <style>
      body {
        background-color: transparent;
        text-align: center;
          }
    </style>
	</head>
	<body class="is-preload">

  <div id="main">
    
  <form method="post" action="confirm.php">
    <?php
      $_SESSION['post']['token']=token();
    ?>
    <input type="hidden" name="token" value="<?=$_SESSION['post']['token']?>">
      <div class="row">
        <div class="col-6 col-12-mobile"><label>お名前:<input type="text" name="username" placeholder="お名前" /></label></div>
        <div class="col-6 col-12-mobile"><label>Email:<input type="text" name="usermail" placeholder="Email" /></label></div>
        <div class="col-12">
        <label>メッセージ:<textarea name="usercomment" placeholder="メッセージをどうぞ"></textarea></label>
        </div>
        <div class="col-12">
            <input type="submit" value="メッセージを送る" />
        </div>
      </div>
    </form>
    </div>
