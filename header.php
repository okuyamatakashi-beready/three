<!DOCTYPE html>
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<title>PINKVELVET</title>


		<!-- CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/slick.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/main.css" rel="stylesheet" type="text/css">

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" id="favicon">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
		<script	src="https://cdn.jsdelivr.net/npm/viewport-extra@2.0.1/dist/iife/viewport-extra.min.js"	defer></script>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var ua = navigator.userAgent
				var isSmartPhone = ua.indexOf('iPhone') > -1 ||
					(ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)
				var isTablet = !isSmartPhone && (
					ua.indexOf('iPad') > -1 ||
					(ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
					ua.indexOf('Android') > -1
				)
				if (isTablet) ViewportExtra.setContent({ minWidth: 1200 })
			})
		</script>

		<?php wp_head(); ?>

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-255931812-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-255931812-1');
		</script>

	</head>
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/locomotive-scroll.min.js"></script> -->
<body data-scroll-container >
	<div id="toggle">
		<div>
			<span></span>
			<span></span>
		</div>
	</div>
	<header id="header">
		<div class="header_wrapper">

			<div class="header_content flex">

				
				<div class="header_right bg"></div>

				<div class="header_left flex">
                    <div class="mv_logo">

                        <div>
                            <a href="/" class="logo"><span class="aleo">PINK VELVET</span></a>

                            <ul class="reserve_link flex">
                                <li>
                                    <a href="" class="flex roboto">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow.svg" alt="">
                                        <span>RESERVE</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="flex roboto">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow.svg" alt="">
                                        <span>RECRUIT</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
					<!-- //header_logo_wrap -->

					<div class="header_nav">
						<ul class="gnav">
							<li>
								<a href="/">
									TOP<span>/ トップ</span>
								</a>
							</li>

							<li>
								<a href="/about/#page_concept">
									CONCEPT<span>/ コンセプト</span>
								</a>
							</li>

							<li>
								<a href="/about">
									ABOUT<span>/ サロン紹介</span>
								</a>
							</li>

							<li>
								<a href="/style_type/hair">
									STYLE<span>/ スタイル</span>
								</a>
							</li>

							<li>
								<a href="/#menu">
									MENU<span>/ メニュー</span>
								</a>
							</li>

							<li>
								<a href="/#staff">
									STAFF<span>/ スタッフ</span>
								</a>
							</li>

							<li>
								<a href="/#info">
									SALON<span>/ サロン情報</span>
								</a>
							</li>

							<li>
								<a href="/blog">
									BLOG<span>/ ブログ</span>
								</a>
							</li>

							<li>
								<a href="/recruit">
									RECRUIT<span>/ リクルート</span>
								</a>
							</li>

							<li>
								<a href="/#footer">
									CONTACT<span>/ お問い合わせ</span>
								</a>
							</li>
						</ul>

						<a href="https://www.instagram.com/pinkvelvet.hair.salon/" class="header_insta" targetr="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/images/common/insta_icon.svg" alt="instagram"><span>pinkvelvet.hair.salon</span>
						</a>

						<div class="header_left_btn">
							<a href="https://beauty.hotpepper.jp/slnH000473798/" class="common_btn" targetr="_blank">
								RESERVE
							</a>
							<a href="/recruit" class="common_btn">
								RECRUIT
							</a>
						</div>
					</div>
					<!-- //header_nav -->
				</div>
				<!-- //header_left -->
			</div>
		</div>
		<!-- //header_wrapper -->
	</header>
	<!-- /header -->

    <div class="mv_logo">

        <div>
            <a href="/" class="logo"><span class="aleo">PINK VELVET</span></a>

            <ul class="reserve_link flex">
                <li>
                    <a href="https://beauty.hotpepper.jp/slnH000473798/" class="flex roboto" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow.svg" alt="">
                        <span>RESERVE</span>
                    </a>
                </li>
                <li>
                    <a href="/recruit" class="flex roboto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow.svg" alt="">
                        <span>RECRUIT</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

   