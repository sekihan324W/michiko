<?php
 session_start();
	// トークン作成のための関数
  function token($length = 20){  	
    return substr(str_shuffle('1234567890QWERTYUIOPLKJHGFDSAZXCVBNMabcdefghijklmnopqrstuvwxyz'), 0, $length);
	}
	// PHP パラメータ付与
	function optimize_uri( $resource_absolute_path=null ) {
		$docroot = $_SERVER['DOCUMENT_ROOT'];
		if ( ! empty( $resource_absolute_path ) && file_exists( $docroot . $resource_absolute_path ) ) {
			$resource_absolute_path .= '?' . filemtime( $docroot . $resource_absolute_path );
		}
		return $resource_absolute_path;
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
		<link href="<?= optimize_uri( 'assets/css/main.css' ) ?>" rel="stylesheet" type="text/css">
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<a href="./"><span class="image avatar48"><img src="<?= optimize_uri( 'images/avatar.png' ) ?>" alt="" /></span>
							<h1 id="title">SatoMichiko</h1>
							<p>Freelance Announcer</p></a>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Top</span></a></li>
								<li><a href="#information" id="information-link"><span class="icon solid fa-info">Information</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Biography</span></a></li>
								<li><a href="#about" id="about-link"><span class="icon solid fa-user">About Me</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contact</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="//www.instagram.com/satomichiko0210/" class="icon brands fa-instagram"><span class="label">Twitter</span></a></li>
							<li><a href="#contact" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">

							<div class="container">
								<header>
									<h2 class="alt ex2">SatoMichiko</h2>
									<div class="img-wrap">
										<img src="<?= optimize_uri( 'images/front-avatar.png' ) ?>" alt="">
									</div>
									<p class="ex2">Official WebSite</p>
								</header>

								<p class="wf-roundedmplus1c">秋田で活動するフリーアナウンサー<br>さとうみちこ&emsp;オフィシャルサイト</p>
								</div>
					</section>

				<!-- Information -->
				<section id="information" class="two">

					<div class="container">
						<header>
							<h2 class="alt">Information</h2>
						</header>

							<!-- Slider main container -->
							<div class="swiper-container">
								<!-- Additional required wrapper -->
								<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide">
								<div class="slide-img"><img src="<?= optimize_uri( 'images/works-img03.jpg' ) ?>" alt=""></div>
								<div class="slide-content">
								<h1>司会・講演</h1>
								<p>Moderator/Lecture</p>
								</div>
								<div class="info-sub">
									<p>各種イベントの司会・講演など</p>
								</div>
								</div><!-- end of .swiper-slide -->
								<div class="swiper-slide">
								<div class="slide-img"><img src="<?= optimize_uri( 'images/works-img02.jpg' ) ?>" alt=""></div>
								<div class="slide-content">
								<h1>メディア出演</h1>
								<p>Personality</p>
								</div>
								<div class="info-sub">
									<p>テレビ・ラジオなど</p>
								</div>
								</div><!-- end of .swiper-slide -->
								<div class="swiper-slide">
								<div class="slide-img"><img src="<?= optimize_uri( 'images/works-img01.jpg' ) ?>" alt=""></div>
								<div class="slide-content">
								<h1>イベント企画</h1>
								<p>Event</p>
								</div>
								<div class="info-sub">
									<p>各種イベントの企画</p>
								</div>
								</div><!-- end of .swiper-slide -->
								</div>
								<!-- If we need pagination -->
								<div class="swiper-pagination"></div>
								<!-- If we need navigation buttons -->
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
								</div>

							</div>
				</section>




				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container fadein">

							<header>
								<h2 class="ex1">Biography</h2>
							</header>
							<header>
								<h3 class="ex1 wf-roundedmplus1c">現在出演中</h3>
							</header>

							<div class="row">
								<div class="col-6 col-6-mobile">
									<article class="item">
										<header>
											<div class="m-radio">Radio</div>
											<a href="#" target="_blank" class="image fit"><img src="<?= optimize_uri( 'images/pic06.jpg' ) ?>" alt="" /></a>
											<p class="wf-roundedmplus1c">michikoとLaLaLa♪<br>(ABSラジオ AM/FM)</p>
											<span>土曜日 午前11時25分～</span>
											<div class="weblink">
												<div><a href="//www.akita-abs.co.jp/blog/lalala/" target="_blank">website</a><span class="icon solid fa-external-link-alt"></span>
												</div>
												<div>
													<a href="//radiko.jp/index/ABS/" target="_blank">radiko</a><span class="icon solid fa-external-link-alt"></span>
												</div>
											</div>
										</header>
									</article>
								</div>
								<div class="col-6 col-6-mobile">
									<article class="item">
										<header>
											<div class="m-radio">Radio</div>
											<a href="#" target="_blank" class="image fit"><img src="<?= optimize_uri( 'images/pic05.jpg' ) ?>" alt="" /></a>
											<p>まめだすとーく<br>(ABSラジオ AM/FM)</p>
											<span>日曜日 午前7時25分～</span>
											<div class="weblink">
												<div><a href="//www.akita-abs.co.jp/blog/mamedasu/" target="_blank">website</a><span class="icon solid fa-external-link-alt"></span>
												</div>
												<div>
													<a href="//radiko.jp/index/ABS/" target="_blank">radiko</a><span class="icon solid fa-external-link-alt"></span>
												</div>
											</div>
										</header>
									</article>
								</div>
							</div>
						</div>

						<div class="container fadein" style="margin-top: 2em;">
							<header>
								<h3 class="ex1">過去の出演番組</h3>
							</header>

							<div class="row" style="text-align: left;">

								<div id="tv" class="col-6 col-12-mobile">
									<article class="item">
									<header>
										<h2>Television</h2>

									<ul>
										<li class="icon solid fa-check">ABS「ABSニュースワイド」<br>
											キャスターを7年半務める</li>
										<li class="icon solid fa-check">日テレ「24時間テレビ」<br>
											13年間ABSパーソナリティを務める</li>
										<li class="icon solid fa-check">ABS「ABSカラオケ歌謡大賞」<br>
											司会　等</li>
										<li class="icon solid fa-check">TBS「朝のホットライン」</li>
										<li class="icon solid fa-check">TBS「ビッグモーニング」</li>
										<li class="icon solid fa-check">TBS「THE WAVE（ザ・ウェーブ）」</li>
										<li class="icon solid fa-check">テレビ朝日「ニュースステーション」<br>
											中継  等</li>
									</ul>
								</header>
								</article>
								</div>

								<div id="radio" class="col-6 col-12-mobile">
									<article class="item">
									<header>
										<h2>Radio</h2>
	
									<ul>
										<li class="icon solid fa-check">ABS「まめだす！ねんりん倶楽部」<br>
											パーソナリティ</li>
										<li class="icon solid fa-check">ABS「サンデー電話リクエスト」<br>
											パーソナリティ</li>
										<li class="icon solid fa-check">ABS「出前民謡」パーソナリティ  等</li>
									</ul>
								</header>
								</article>
								</div>
							</div>
						</div>
						
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container fadein">

							<header>
								<h2 class="ex1">さとうみちこ</h2>
								<p class="ex1">（佐藤美知子）</p>
							</header>

							<img src="<?= optimize_uri( 'images/pic08.jpg' ) ?>" alt="" class="image featured" />

							<p class="fadein">1952年2月10日生まれ　血液型はAB型<br>
								秋田県秋田市出身<br>
								日本大学芸術学部放送学科卒業<br>
								元秋田放送　アナウンサー</p>
							<p class="ab-left fadein">
								ラジオデビューは5歳（1957年・昭和32）。<br>
								県内最初の民間ラジオ放送局・ラジオ東北（秋田放送の前進）の番組に出演し<span>「子鹿のバンビ」</span>を歌った。<br>
								そして、テレビデビューは9歳（1961年・昭和36）。<br>
								秋田で行われた<span>「まごころ国体」</span>で、当時まだ返還前の沖縄県選手団が秋田駅に到着した時、秋田県民を代表して花束を贈呈した。<br>
								また、沖縄県の選手たちと遊ぶ秋田の子としても取り上げられ、その様子は全国のテレビで放送され、映画館でも上映された。
							</p>

							<p class="ab-left fadein">
								中学校、高校時代は放送部に所属し、NHK放送杯コンテストでは全国大会に出場。<br>
								大学時代はタレント活動も行っており、円谷プロダクションの<span>「ウルトラマンショーのお姉さん」</span>として全国公演に出演。<br>
							</p>

							<p class="ab-left fadein">
								1974（昭和49）年に<span>株式会社秋田放送</span>に入社後は、アナウンサーとして数々のテレビ・ラジオのニュースをはじめ、全国放送のレギュラー出演、イベントの司会等、県内各地を飛び回っている。
							</p>
							
							<p class="ab-left fadein">
								また現在は、業務の傍ら有志を募り<span>「みちこ一座」</span>として介護福祉施設へ訪問し、歌や踊りを披露するボランティア活動や、音楽好きの仲間と<span>「Michy club Band（ミッチークラブバンド）」</span>を結成し、秋田市内でグループサウンズライブを開催するなど、精力的に活躍の幅を広げている。
							</p>
							
							<p class="ab-left fadein">
								プライベートでは、音楽が大好きで、ジャンルを問わずライブへ行くことは生活の一部となっている。<br>
								また、お祭りが大好きで<span>『お祭のあるところに美知子あり！』</span>と言われていたため、ニックネームは<span>「カーニバル美知子」</span>。<br>
								秋田放送のアナウンサーブログをきっかけに、デジタルカメラで日常を撮影する<span>「カメラ女子」</span>でもある。<br>
								<span>「年をとること」</span>は素晴らしいことだと日々の暮らしの中で発見している。
							</p>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container fadein">

							<header>
								<h2 class="ex1">Contact</h2>
							</header>
							
							<p>お問い合わせ・お仕事のご依頼はこちらから</p>
							
							<iframe id="parentframe" frameborder="0" src="contact.php"></iframe>

						</div>
					</section>
			</div>


		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; SatoMichiko. All rights reserved.</li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="<?= optimize_uri( 'assets/js/jquery.min.js' ) ?>"></script>
			<script src="<?= optimize_uri( 'assets/js/jquery.scrolly.min.js' ) ?>"></script>
			<script src="<?= optimize_uri( 'assets/js/jquery.scrollex.min.js' ) ?>"></script>
			<script src="<?= optimize_uri( 'assets/js/browser.min.js' ) ?>"></script>
			<script src="<?= optimize_uri( 'assets/js/breakpoints.min.js' ) ?>"></script>
			<script src="<?= optimize_uri( 'assets/js/util.js' ) ?>"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
			<script src="<?= optimize_uri( 'assets/js/textyle.min.js' ) ?>"></script>
			<script src="<?= optimize_uri( 'assets/js/main.js' ) ?>"></script>

	</body>
</html>