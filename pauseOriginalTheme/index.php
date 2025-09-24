<!DOCTYPE html>
<head>
<?php require "commonMetaInfo.php"; ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo file_date(get_template_directory() . '/style.css'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css?<?php echo file_date(get_template_directory() . '/css/main.css'); ?>" type="text/css" />

<?php require "common.php"; ?> 																	<!-- Call common.php ---->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<script>
$(window).scroll(function() {

	// 現在のビューポートの高さを取得 (100vhに相当)
	const windowHeight = $(window).height();
	
	// 現在のスクロール位置を上から取得
	const scrollTop = $(window).scrollTop();

	scrollResidue = scrollTop%windowHeight;

	nowSlideNumber = Math.floor(scrollTop/windowHeight)+1;
	prevSlideNumber = Math.floor(scrollTop/windowHeight);
	nextSlideNumber = nowSlideNumber+1;


	nowSlideNumberID = "#slide"+nowSlideNumber;
	prevSlideNumberID = "#slide"+prevSlideNumber;
	nextSlideNumberID = "#slide"+nextSlideNumber;


	ScrollPercentage = (scrollTop%windowHeight)/windowHeight;

	nowSlideNumberIDtoImg= nowSlideNumberID + " > .captionArea";
	prevSlideNumberIDtoImg= prevSlideNumberID + " > .captionArea";
	nextSlideNumberIDtoImg= nextSlideNumberID + " > .captionArea";

	nowSlideNumberIDtoCaptionWrapper= nowSlideNumberIDtoImg + " > .captionWrapper";
	prevSlideNumberIDtoCaptionWrapper= prevSlideNumberIDtoImg + " > .captionWrapper";
	nextSlideNumberIDtoCaptionWrapper= nextSlideNumberIDtoImg + " > .captionWrapper";

	$(nowSlideNumberID).css("height",windowHeight - scrollResidue);
	$(prevSlideNumberID).css("height",0);
	$(nextSlideNumberID).css("height","100%");

	$(nowSlideNumberIDtoImg).css("opacity",(1 - ScrollPercentage));
	$(nextSlideNumberIDtoImg).css("opacity",(ScrollPercentage));
	$(prevSlideNumberIDtoImg).css("opacity",(0));
});
</script>

<body>

<div class="pageWrapper">
	<div class="contentsWrapper">
		<div class="slideContents">
			<div class="contents" id="slide4">
				<div class="imageBgColor"></div>
				<img src="<?php echo get_template_directory_uri(); ?>/image/main/sample1.jpg">
				<div class="captionArea">
					<div class="captionWrapper">
						<div class="title">
							ウェディングを飾る <div class="EnTxt">for wedding.</div>
						</div><!-- title -->
						<div class="text">
							ハレの日をお飾りします。
						</div><!-- text -->
					</div><!-- captionWrapper -->
				</div><!-- captionArea -->
			</div><!-- contents -->
			<div class="contents" id="slide3">
				<div class="imageBgColor"></div>
				<img src="<?php echo get_template_directory_uri(); ?>/image/main/sample2.jpg">
				<div class="captionArea">
					<div class="captionWrapper">
						<div class="title">ウェディングを飾る
							 <div class="EnTxt">for wedding.</div>
						</div><!-- title -->
						<div class="text">
							ハレの日をお飾りします。
						</div><!-- text -->
					</div><!-- captionWrapper -->
				</div><!-- captionArea -->
			</div><!-- contents -->
			<div class="contents" id="slide2">
				<div class="imageBgColor"></div>
				<img src="<?php echo get_template_directory_uri(); ?>/image/main/sample3.jpg">
				<div class="captionArea">
					<div class="captionWrapper">
						<div class="title">
							花農家さんに会いに行こう <div class="EnTxt">To the flower farmers</div>
						</div><!-- title -->
						<div class="text">
							農家さんの畑から直接お花をお届けします。
						</div><!-- text -->
					</div><!-- captionWrapper -->
				</div><!-- captionArea -->
			</div><!-- contents -->
			<div class="contents" id="slide1">
				<div class="imageBgColor"></div>
				<img src="<?php echo get_template_directory_uri(); ?>/image/main/sample4.jpg">
				<div class="captionArea">
					<div class="captionWrapper">
						<div class="title">
							季節の定期便<div class="EnTxt">Seasonal Flower Subscription</div>
						</div><!-- title -->
						<div class="text">
							季節に合わせた花束を定期便としてお送りいたします。
						</div><!-- text -->
					</div><!-- captionWrapper -->
				</div><!-- captionArea -->
			</div><!-- contents -->
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/image/common/logo/PAUSE_logo_wh.png">
			</div>
		</div><!-- slideContents -->
	</div><!-- contentsWrapper -->
	<div class="contentsWrapper" id="textContents" >
		<div class="contents">
			<div class="title">event</div>
			
		</div><!-- contents -->
		<div class="contents">
			<div class="title">profile</div>
			<div class="body">
				<div class="text">
					<div class="title">
						吉原友美　｜フラワースタイリスト
					</div>
	
					「日々の暮らしの中にひと休み出来る時間を」
					縁あって繋がる人達と共に、花を束ねる時間を楽しみながら暮らしに寄り添う花の提案。
					
					オンラインショップにて全国へお花の配送、出張花屋、空間装花や全国でワークショップを開催してる。
					
					[WORKS]
					東急ロイヤルクラブメンバーズマガジン「Fino」表紙担当/2021.4ー2023.4
				</div><!-- text -->
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/image/profile/profile1.jpg">
				</div>
			</div>
		</div><!-- contents -->
		<div class="contents">
			<div class="title">news</div>
			
		</div><!-- contents -->
		<div class="contents">
			<div class="title">blog</div>
			
		</div><!-- contents -->
		<div class="contents">
			<div class="title">contact</div>
			
		</div><!-- contents -->
	</div><!-- contentsWrapper -->

</div><!-- pageWrapper -->
</body>
</html>