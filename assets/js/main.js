/*
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body'),
		$nav = $('#nav');

	// Breakpoints.
		breakpoints({
			wide:      [ '961px',  '1880px' ],
			normal:    [ '961px',  '1620px' ],
			narrow:    [ '961px',  '1320px' ],
			narrower:  [ '737px',  '960px'  ],
			mobile:    [ null,     '736px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Nav.
		var $nav_a = $nav.find('a');

		$nav_a
			.addClass('scrolly')
			.on('click', function(e) {

				var $this = $(this);

				// External link? Bail.
					if ($this.attr('href').charAt(0) != '#')
						return;

				// Prevent default.
					e.preventDefault();

				// Deactivate all links.
					$nav_a.removeClass('active');

				// Activate link *and* lock it (so Scrollex doesn't try to activate other links as we're scrolling to this one's section).
					$this
						.addClass('active')
						.addClass('active-locked');

			})
			.each(function() {

				var	$this = $(this),
					id = $this.attr('href'),
					$section = $(id);

				// No section for this link? Bail.
					if ($section.length < 1)
						return;

				// Scrollex.
					$section.scrollex({
						mode: 'middle',
						top: '-10vh',
						bottom: '-10vh',
						initialize: function() {

							// Deactivate section.
								$section.addClass('inactive');

						},
						enter: function() {

							// Activate section.
								$section.removeClass('inactive');

							// No locked links? Deactivate all links and activate this section's one.
								if ($nav_a.filter('.active-locked').length == 0) {

									$nav_a.removeClass('active');
									$this.addClass('active');

								}

							// Otherwise, if this section's link is the one that's locked, unlock it.
								else if ($this.hasClass('active-locked'))
									$this.removeClass('active-locked');

						}
					});

			});

	// Scrolly.
		$('.scrolly').scrolly();

	// Header (narrower + mobile).

		// Toggle.
			$(
				'<div id="headerToggle">' +
					'<a href="#header" class="toggle"></a>' +
				'</div>'
			)
				.appendTo($body);

		// Header.
			$('#header')
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'header-visible'
				});

})(jQuery);

// Swiper.
var mySwiper = new Swiper ('.swiper-container', {
	loop: true, // 繰り返し
	autoplay: 4000, // 自動再生
	autoplayStopOnLast: true, // 自動再生のオプション
	slidesPerView: 2,
		spaceBetween: 10,
		centeredSlides : true,
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	breakpoints: {
		767: {
			slidesPerView: 1,
			spaceBetween: 0
		}
	}
})

// Textyle
$(window).on('load',function(){
	//simple use
	$('.ex1').textyle();
	$('.desc').textyle();
	//you can select options or add callback
	$('.ex2').textyle({
						duration : 400,
						delay : 100,
						easing : 'swing',
						callback : function(){
							$(this).css({
								color : 'coral',
								transition : '1s',
							});
							$('.desc').css('opacity',1);
						}
					});
});


// scrollreveal.
// ScrollReveal().reveal('.container', { 
// 	duration: 800, // アニメーションの完了にかかる時間
// 	viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
// 	reset: true   // 何回もアニメーション表示するか
// });

// フェードアニメーション
$(function(){
	$(window).scroll(function (){
			$('.fadein').each(function(){
					var position = $(this).offset().top;
					var scroll = $(window).scrollTop();
					var windowHeight = $(window).height();
					if (scroll > position - windowHeight + 200){
						$(this).addClass('active');
					}
			});
	});
});

// iframeの処理
// 子画面の要素を取得
var elm = document.getElementById("parentframe");
 
// 子画面のコンテンツサイズに合わせてサイズを変更する関数
function changeParentHeight(){
  elm.style.height = elm.contentWindow.document.body.scrollHeight + "px";
}
 
// 親画面 iframe の高さを変更するイベント
// 1. 子画面の読み込み完了時点で処理を行う
elm.contentWindow.onload = function(){ changeParentHeight(); };
 
// 2. 子画面のウィンドウサイズ変更が完了した時点で処理を行う
var timer = 0;
elm.contentWindow.onresize = function () {
  if (timer > 0) {
    clearTimeout(timer);
  }
  timer = setTimeout(function () {
    changeParentHeight();
  }, 100);
};
