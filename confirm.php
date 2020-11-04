<?php 
 session_start();
// いずれかがカラかトークンが一致しなければ送信しない
if( empty($_POST['username']) || empty($_POST['usermail']) || empty($_POST['usercomment']) || empty($_POST['token']) || $_POST['token']!=$_SESSION['post']['token']){
	echo '<p>送信出来ませんでした｡戻って入力し直してください｡';	
	exit;
}

$_SESSION['post']['username']=htmlspecialchars($_POST['username'])."\n";
$_SESSION['post']['usermail']=htmlspecialchars($_POST['usermail']).PHP_EOL;
$_SESSION['post']['usercomment']=htmlspecialchars($_POST['usercomment'])."\n";

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
    
    <div class="row">
      <div class="col-12">
        <div class="confirmlabel">確認画面</div>
            【お名前】
            </div>
            <div class="col-12">
            <?=$_SESSION['post']['username']?>
            </div>
            <div class="col-12">
            【Email】
            </div>
            <div class="col-12">
            <?=$_SESSION['post']['usermail']?>
            </div>
            <div class="col-12">
            【メッセージ】
            </div>
            <div class="col-12">
            <?=$_SESSION['post']['usercomment']?>
            </div>
            <div class="col-12">
            <button style="font-size: 115%;" onclick='location.href="mailsend.php"'>この内容で送信</button>
            </div>
          </div>
      </div>
