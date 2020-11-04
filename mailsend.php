<?php
 session_start();
// いずれかがカラなら送信しない
if( empty($_SESSION['post']['username']) || empty($_SESSION['post']['usermail']) || empty($_SESSION['post']['usercomment']) ){
	echo '<p>送信出来ませんでした｡戻って入力し直してください｡';	
	exit;
}

$body=$_SESSION['post']['username']."\n";
// 代入(初期化)
$body.=$_SESSION['post']['usermail'].PHP_EOL;
// 文字連結(くっつけて代入)
$body.=$_SESSION['post']['usercomment']."\n";

$header="From: {$_SESSION['post']['usermail']}";
// $header.="\n";
// $header.="Bcc: foo@example.com";
$admin = 'sakihan324@gmail.com';
// mb_send_mail('宛先','件名','本文',送信元 );
$success = mb_send_mail( $admin ,'お問合せ',$body,$header);

//お客へ返信
$header="From: $admin";
$success = mb_send_mail($_SESSION['post']['usermail'],'メッセージありがとうございます',$body,$header);

	// メールサーバーに届いたら $successには trueが代入されるので
	if( $success ){ 
		$_SESSION = array(); //空の配列を代入し、すべてのセッション変数を消去
		session_destroy(); //セッションを破棄
	}else{
		//送信失敗時（もしあれば）
	}

	$_SESSION['post']=null;
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
			<?php if ( $success ): ?>
				<div class="confirmlabel">送信完了</div>
				<p>メッセージありがとうございます。</p>
				<p>送信完了いたしました。</p>
			<?php else: ?>
			<p>申し訳ございませんが、送信に失敗しました。</p>
			<p>しばらくしてもう一度お試しになるか、メールにてご連絡ください。</p>
			<p>ご迷惑をおかけして誠に申し訳ございません。</p>
			<?php endif; ?>
			</div>
		</div>

	</div>


