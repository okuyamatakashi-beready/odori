<?php require_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<title>郡上おどり 2023.7.1-7.2開催 岐阜・名古屋</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="みんなの森,メディアコスモス,ヒサヤオオドオリパーク">
	<meta name="description" content="#昼から楽しむ#家族で楽しむ#初心者OK。">
	<meta property='og:locale' content='ja_JP'>
	<meta property='og:site_name' content='郡上おどり 2023.7.1-7.2開催 岐阜・名古屋'>
	<meta property="og:title" content="郡上おどり 2023.7.1-7.2開催 岐阜・名古屋">
	<meta property="og:description" content="#昼から楽しむ#家族で楽しむ#初心者OK。">
	<meta property="og:type" content="website">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css">
	<!--[if lt IE 9]>
	<script src="/js/html5.js"></script>
	<![endif]-->
	<script>
		(function(d) {
			var config = {
					kitId: 'wzk0eta',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
	<link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
	<script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>">

</head>

<body ontouchstart="" class="home">

	<div class="wrap01">


		<?php if (is_mobile()) { ?>
			<div class="fv">
				<div class="image01 animation animationtotop">
					<img src="images/fv04.jpg" srcset="images/fv04.jpg 1x, images/fv04@2x.jpg 2x" alt="郡上おどり2023">
				</div>

				<h1 class="animation animationtotop">
					<img src="images/header02.png" srcset="images/header02.png 1x, images/header02@2x.png 2x" alt="郡上おどり2023">
				</h1>

				<div class="logo02 animation animationtotop">
					<img src="images/logo02.png" srcset="images/logo02.png 1x, images/logo02@2x.png 2x" alt="郡上おどり2023">
				</div>

				<div class="image02 animation animationtotop">
					<img src="images/fv05.jpg" srcset="images/fv05.jpg 1x, images/fv05@2x.jpg 2x" alt="郡上おどり2023">
				</div>

				<div class="image03 animation animationtotop">
					<img src="images/fv06.jpg" srcset="images/fv06.jpg 1x, images/fv06@2x.jpg 2x" alt="郡上おどり2023">
				</div>
			</div>
			<!-- /.fv -->
			<div class="followus animation animationtotop">
				<a href="https://www.instagram.com/odol_gujoodori/" target="_blank">
					<img src="images/insta01.png" srcset="images/insta01.png 1x, images/insta01@2x.png 2x" alt="インスタグラム">
				</a>
				<a href="https://www.youtube.com/@odolkikaku" target="_blank">
						<img src="images/youtube01.png" srcset="images/youtube01.png 1x, images/youtube01@2x.png 2x" alt="youtube">
					</a>
			</div>
			<!-- /.followus -->
		<?php } else { ?>
			<h1 class="">
				<img src="images/header01.png" srcset="images/header01.png 1x, images/header01@2x.png 2x" alt="郡上おどり2023">
			</h1>
			<div class="fv">
				<div class="logo02">
					<img src="images/logo02.png" srcset="images/logo02.png 1x, images/logo02@2x.png 2x" alt="郡上おどり2023">
				</div>
				<!-- /.logo02 -->
			</div>
			<!-- /.fv -->
			<div class="followus">
			<dl>
				<dt>
					<img src="images/followus04.png" srcset="images/followus04.png 1x, images/followus04@2x.png 2x" alt="FOLLOW US">
				</dt>
				<dd>
					<a href="https://www.instagram.com/odol_gujoodori/" target="_blank">
						<img src="images/insta01.png" srcset="images/insta01.png 1x, images/insta01@2x.png 2x" alt="インスタグラム">
					</a>
				</dd>
				<dd>
					<a href="https://www.youtube.com/@odolkikaku" target="_blank">
						<img src="images/youtube01.png" srcset="images/youtube01.png 1x, images/youtube01@2x.png 2x" alt="youtube">
					</a>
				</dd>
			</dl>
			</div>
			<!-- /.followus -->
		<?php } ?>

		<div class="scroll animation animationtotop">
			<a href="#aboutheader">
				<span>SCROLL</span>
			</a>
		</div>
		<!-- /.scroll -->

		<div id="aftermovie">
			<?php if (is_mobile()) { ?>
				<div class="thanks01 animation animationtotop"">
					<img src=" images/after/thanks02.png" srcset="images/after/thanks02.png 1x, images/after/thanks02@2x.png 2x" alt="ありがとうございました！">
				</div>
				<!-- /.thanks01 -->
			<?php } else { ?>

			<?php } ?>
			<div class="inner animation animationtotop"">
				<iframe width=" 560" height="315" src="https://www.youtube.com/embed/UqoDlQfA7Zw?si=HlBVyVHEefxn0d3S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<!-- /.inner -->

			<?php if (is_mobile()) { ?>

			<?php } else { ?>
				<div class="thanks01 animation animationtotop"">
					<img src=" images/after/thanks01.png" srcset="images/after/thanks01.png 1x, images/after/thanks01@2x.png 2x" alt="ありがとうございました！">
				</div>
				<!-- /.thanks01 -->
			<?php } ?>
		</div>
		<!-- /#aftermovie -->

		<section id="gallerynav">
			<h2 class="animation animationtotop"">
				<img src=" images/after/gallery01.png" srcset="images/after/gallery01.png 1x, images/after/gallery01@2x.png 2x" alt="フォトギャラリー" />
			</h2>
			<ul>
				<li class="animation animationtotop"">
					<a href=" gifu/">
					<img src="images/after/gallerygifu01.png" srcset="
                images/after/gallerygifu01.png    1x,
                images/after/gallerygifu01@2x.png 2x
              " alt="岐阜" />
					</a>
				</li>
				<li class="animation animationtotop"">
					<a href=" nagoya/">
					<img src="images/after/gallerynagoya01.png" srcset="
                images/after/gallerynagoya01.png    1x,
                images/after/gallerynagoya01@2x.png 2x
              " alt="名古屋" />
					</a>
				</li>
			</ul>
		</section>
		<!-- /#gallery -->


		<section id="about">
			<?php if (is_mobile()) { ?>
				<h2 id="aboutheader" class="animation animationtotop">
					<img src="images/headerabout02.png" srcset="images/headerabout02.png 1x, images/headerabout02@2x.png 2x" alt="イベントについて">
				</h2>
			<?php } else { ?>
				<h2 id="aboutheader" class="animation animationtotop">
					<img src="images/headerabout01.png" srcset="images/headerabout01.png 1x, images/headerabout01@2x.png 2x" alt="イベントについて">
				</h2>
			<?php } ?>
			<div class="desc animation animationtotop">
				江戸時代から400年以上、郡上八幡の地で唄い踊り継がれ、2022年にはユネスコ無形文化遺産に登録された「郡上おどり」。夜に行われる郡上踊りになかなか参加しづらいママや子供達にも楽しんでもらいたい…そんな想いからこのイベントは生まれました。本来は一夜一会場で行われる郡上おどりを、昼間からご家族でも楽しめるのがこのイベントの魅力。会場では美味しい岐阜グルメなどを味わうこともできます。踊って、食べて、笑って、大切な人と楽しい夏の思い出を作りませんか？
			</div>
			<!-- /.desc -->
		</section>
		<!-- /#about -->

		<section id="event">
			<?php if (is_mobile()) { ?>
				<h2 class="animation animationtotop">
					<img src="images/headerevent02.png" srcset="images/headerevent02.png 1x, images/headerevent02@2x.png 2x" alt="イベント内容">
				</h2>
			<?php } else { ?>
				<h2 class="animation animationtotop">
					<img src="images/headerevent01.png" srcset="images/headerevent01.png 1x, images/headerevent01@2x.png 2x" alt="イベント内容">
				</h2>
			<?php } ?>
			<?php if (is_mobile()) { ?>
				<div class="group">
					<div class="block block01">
						<h3 class="animation animationtotop">
							郡上おどり
						</h3>
						<div class="image animation animationtotop">
							<img src="images/event01.jpg" srcset="images/event01.jpg 1x, images/event01@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="desc animation animationtotop">
							日本3大盆踊りの１つ。昨年ユネスコの無形文化遺産に登録。江戸時代から400年以上、郡上八幡の地で唄い踊り継がれてきた郡上おどりを郡上おどり保存会をお迎えし、生唄・お囃子にあわせて踊ります。
						</div>
						<!-- /.desc -->
						<div class="illust animation animationtotop">
							<img src="images/event01.png" srcset="images/event01.png 1x, images/event01@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
						<div class="link animation animationtotop">
							<h4>
								郡上八幡観光協会HP
							</h4>
							<a href="http://www.gujohachiman.com/kanko/odori.html" target="_blank">
								http://www.gujohachiman.com/kanko/odori.html
							</a>
						</div>
						<!-- /.link -->
					</div>
					<!-- /.block block01 -->
					<div class="block block02">
						<h3 class="animation animationtotop">
							郡上おどり教室
						</h3>
						<div class="image animation animationtotop">
							<img src="images/event02.jpg" srcset="images/event02.jpg 1x, images/event02@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="desc animation animationtotop">
							「郡上おどり」は、見て楽しむのではなく参加して楽しむもの！誰でも、どんな服装でも、気軽に輪の中に入って手や足を動かしているうちに、踊れるようになるのが面白さであり魅力です。郡上おどり教室で、初めての方でも安心して踊れます。
						</div>
						<!-- /.desc -->
						<div class="illust animation animationtotop">
							<img src="images/event02.png" srcset="images/event02.png 1x, images/event02@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block02 -->
					<div class="block block03">
						<h3 class="animation animationtotop">
							こども縁日
						</h3>
						<div class="image animation animationtotop">
							<img src="images/event03.jpg" srcset="images/event03.jpg 1x, images/event03@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="desc animation animationtotop">
							こどもの笑顔が溢れる大人気のこども縁日！射的、輪投げ、ボールすくい、ヨーヨー釣りなど<br>
							参加費：各ブース1回200円（現金のみ）※小学生以下のお子様限定
						</div>
						<!-- /.desc -->
						<div class="illust animation animationtotop">
							<img src="images/event03.png" srcset="images/event03.png 1x, images/event03@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block03 -->
					<div class="block block04">
						<h3 class="animation animationtotop">
							フード・キッチンカー
						</h3>
						<div class="image animation animationtotop">
							<img src="images/event04.jpg" srcset="images/event04.jpg 1x, images/event04@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="desc animation animationtotop">
							岐阜の食材や料理が楽しめるメニューを中心に美味しいキッチンカーやフードブースが大集合。郡上おどりと一緒に、美味しいフードをお楽しみ下さい。
						</div>
						<!-- /.desc -->
						<div class="illust animation animationtotop">
							<img src="images/event04.png" srcset="images/event04.png 1x, images/event04@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block04 -->
					<div class="block block05">
						<h3 class="animation animationtotop">
							企業PR
						</h3>
						<div class="image animation animationtotop">
							<img src="images/event05.jpg" srcset="images/event05.jpg 1x, images/event05@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="desc animation animationtotop">
							地元企業や団体の商品・サービスのPRを行います。
						</div>
						<!-- /.desc -->
						<div class="illust animation animationtotop">
							<img src="images/event05.png" srcset="images/event05.png 1x, images/event05@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block05 -->
				</div>
				<!-- /.group -->
			<?php } else { ?>
				<div class="group">
					<div class="block block01">
						<div class="txt">
							<h3 class="animation animationtotop">
								郡上おどり
							</h3>
							<div class="desc animation animationtotop">
								日本3大盆踊りの１つ。昨年ユネスコの無形文化遺産に登録。江戸時代から400年以上、郡上八幡の地で唄い踊り継がれてきた郡上おどりを郡上おどり保存会をお迎えし、生唄・お囃子にあわせて踊ります。
							</div>
							<!-- /.desc -->
							<div class="link animation animationtotop">
								<h4>
									郡上八幡観光協会HP
								</h4>
								<a href="http://www.gujohachiman.com/kanko/odori.html" target="_blank">
									http://www.gujohachiman.com/kanko/odori.html
								</a>
							</div>
							<!-- /.link -->
						</div>
						<!-- /.txt -->
						<div class="image animation animationtotop">
							<img src="images/event01.jpg" srcset="images/event01.jpg 1x, images/event01@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="illust animation animationtotop">
							<img src="images/event01.png" srcset="images/event01.png 1x, images/event01@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block01 -->
					<div class="block block02">
						<div class="txt">
							<h3 class="animation animationtotop">
								郡上おどり教室
							</h3>
							<div class="desc animation animationtotop">
								「郡上おどり」は、見て楽しむのではなく参加して楽しむもの！誰でも、どんな服装でも、気軽に輪の中に入って手や足を動かしているうちに、踊れるようになるのが面白さであり魅力です。郡上おどり教室で、初めての方でも安心して踊れます。
							</div>
							<!-- /.desc -->
						</div>
						<!-- /.txt -->
						<div class="image animation animationtotop">
							<img src="images/event02.jpg" srcset="images/event02.jpg 1x, images/event02@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="illust animation animationtotop">
							<img src="images/event02.png" srcset="images/event02.png 1x, images/event02@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block02 -->
					<div class="block block03">
						<div class="txt">
							<h3 class="animation animationtotop">
								こども縁日
							</h3>
							<div class="desc animation animationtotop">
								こどもの笑顔が溢れる大人気のこども縁日！射的、輪投げ、ボールすくい、ヨーヨー釣りなど<br>
								参加費：各ブース1回200円（現金のみ）※小学生以下のお子様限定
							</div>
							<!-- /.desc -->
						</div>
						<!-- /.txt -->
						<div class="image animation animationtotop">
							<img src="images/event03.jpg" srcset="images/event03.jpg 1x, images/event03@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="illust animation animationtotop">
							<img src="images/event03.png" srcset="images/event03.png 1x, images/event03@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block03 -->
					<div class="block block04">
						<div class="txt">
							<h3 class="animation animationtotop">
								フード・キッチンカー
							</h3>
							<div class="desc animation animationtotop">
								岐阜の食材や料理が楽しめるメニューを中心に美味しいキッチンカーやフードブースが大集合。郡上おどりと一緒に、美味しいフードをお楽しみ下さい。
							</div>
							<!-- /.desc -->
						</div>
						<!-- /.txt -->
						<div class="image animation animationtotop">
							<img src="images/event04.jpg" srcset="images/event04.jpg 1x, images/event04@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="illust animation animationtotop">
							<img src="images/event04.png" srcset="images/event04.png 1x, images/event04@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block04 -->
					<div class="block block05">
						<div class="txt">
							<h3 class="animation animationtotop">
								企業PR
							</h3>
							<div class="desc animation animationtotop">
								地元企業や団体の商品・サービスのPRを行います。
							</div>
							<!-- /.desc -->
						</div>
						<!-- /.txt -->
						<div class="image animation animationtotop">
							<img src="images/event05.jpg" srcset="images/event05.jpg 1x, images/event05@2x.jpg 2x" alt="">
						</div>
						<!-- /.image -->
						<div class="illust animation animationtotop">
							<img src="images/event05.png" srcset="images/event05.png 1x, images/event05@2x.png 2x" alt="">
						</div>
						<!-- /.illust -->
					</div>
					<!-- /.block block05 -->
				</div>
				<!-- /.group -->
			<?php } ?>
		</section>
		<!-- /#event -->
	</div>
	<!-- /.wrap01 -->

	<section id="schedule">
		<?php if (is_mobile()) { ?>
			<h2 class="animation animationtotop">
				<img src="images/headerschedule02.png" srcset="images/headerschedule02.png 1x, images/headerschedule02@2x.png 2x" alt="開催概要">
			</h2>
		<?php } else { ?>
			<h2 class="animation animationtotop">
				<img src="images/headerschedule01.png" srcset="images/headerschedule01.png 1x, images/headerschedule01@2x.png 2x" alt="開催概要">
			</h2>
		<?php } ?>
		<div class="hushtag animation animationtotop">
			<img src="images/hushtag01.png" srcset="images/hushtag01.png 1x, images/hushtag01@2x.png 2x" alt="#昼から #初心者OK #家族で楽しむ">
		</div>
		<!-- /.hushtag -->
		<div class="group">
			<div class="schedule01">
				<div class="block animation animationtotop">
					<a href="https://goo.gl/maps/797X4GJcmFNjUydN6" target="_blank">
						<?php if (is_mobile()) { ?>
							<img src="images/gifu02.png" srcset="images/gifu02.png 1x, images/gifu02@2x.png 2x" alt="開催概要 岐阜">
						<?php } else { ?>
							<img src="images/gifu01.png" srcset="images/gifu01.png 1x, images/gifu01@2x.png 2x" alt="開催概要 岐阜">
						<?php } ?>
					</a>
				</div>
				<!-- /.block -->
				<div class="block animation animationtotop">
					<a href="https://goo.gl/maps/vjbtf4Rhs5zbHyuz6" target="_blank">
						<?php if (is_mobile()) { ?>
							<img src="images/nagoya02.png" srcset="images/nagoya02.png 1x, images/nagoya02@2x.png 2x" alt="開催概要 名古屋">
						<?php } else { ?>
							<img src="images/nagoya01.png" srcset="images/nagoya01.png 1x, images/nagoya01@2x.png 2x" alt="開催概要 名古屋">
						<?php } ?>
					</a>
				</div>
				<!-- /.block -->
			</div>
			<!-- /.schedule01 -->
			<div class="notice animation animationtotop">
				小雨決行、荒天中止 ※当日朝9時に<a href="https://www.instagram.com/odol_gujoodori/" target="_blank">インスタグラム（odol_gujoodori）</a>にて開催の有無をご案内します。
			</div>
			<!-- /.notice -->
			<?php if (is_mobile()) { ?>
				<h5 class="animation animationtotop">
					<img src="images/headerprogram01.png" srcset="images/headerprogram01.png 1x, images/headerprogram01@2x.png 2x" alt="プログラム">
				</h5>
				<div class="program01 js-scrollable animation animationtotop">
					<img src="images/program02.png" srcset="images/program02.png 1x, images/program02@2x.png 2x" alt="プログラム">
				</div>
				<!-- /.program01 -->
			<?php } else { ?>
				<div class="program01 animation animationtotop">
					<img src="images/program01.png" srcset="images/program01.png 1x, images/program01@2x.png 2x" alt="プログラム">
				</div>
				<!-- /.program01 -->
			<?php } ?>
		</div>
		<!-- /.group -->
		<div class="link animation animationtotop">
			<a href="images/2023.pdf" target="_blank">
				チラシをダウンロード
			</a>
		</div>
		<!-- /.link -->
	</section>
	<!-- /#schedule -->

	<section id="movie">
		<?php if (is_mobile()) { ?>
			<h2 class="animation animationtotop">
				<img src="images/headermovie02.png" srcset="images/headermovie02.png 1x, images/headermovie02@2x.png 2x" alt="昨年の開催模様">
			</h2>
		<?php } else { ?>
			<h2 class="animation animationtotop">
				<img src="images/headermovie01.png" srcset="images/headermovie01.png 1x, images/headermovie01@2x.png 2x" alt="昨年の開催模様">
			</h2>
		<?php } ?>
		<div class="movie animation animationtotop">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/1ItjMsFWOUc?si=tX79V6_krJAdUpx4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
		<!-- /.movie -->
	</section>
	<!-- /#movie -->

	<footer>
		<h4>
			主催
		</h4>
		<div class="logo">
			<img src="images/logo01.png" srcset="images/logo01.png 1x, images/logo01@2x.png 2x" alt="オドルキカク">
		</div>
		<!-- /.logo -->
		<div class="followus02">
			<dl>
				<dt>
					<img src="images/followus03.png" srcset="images/followus03.png 1x, images/followus03@2x.png 2x" alt="FOLLOW US">
				</dt>
				<dd>
					<a href="https://www.instagram.com/odol_gujoodori/" target="_blank">
						<img src="images/insta01.png" srcset="images/insta01.png 1x, images/insta01@2x.png 2x" alt="インスタグラム">
					</a>
				</dd>
				<dd>
					<a href="https://www.youtube.com/@odolkikaku" target="_blank">
						<img src="images/youtube01.png" srcset="images/youtube01.png 1x, images/youtube01@2x.png 2x" alt="youtube">
					</a>
				</dd>
			</dl>
		</div>
		<!-- /.followus02 -->
	</footer>

	<div class="gototop01">
		<a href="#top">
		<img src="images/top01.png" srcset="images/top01.png 1x, images/top01@2x.png 2x" alt="GO TO TOP">
		</a>
	</div>
	<!-- /.gototop -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/style.js"></script>
</body>

</html>