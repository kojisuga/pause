<!DOCTYPE html>
<head>
<?php require "commonMetaInfo.php"; ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo file_date(get_template_directory() . '/style.css'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css?<?php echo file_date(get_template_directory() . '/css/main.css'); ?>" type="text/css" />

<?php require "common.php"; ?> 																	<!-- Call common.php ---->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
.pageWrapper{
	width:"100%";
	height:100vh;
	position:relative;
}
.caption{
	font-size:11pt;
	letter-spacing:0.2em;

	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);

}
</style>
</head>

<body>

<div class="pageWrapper">
	<div class="contentsWrapper">
		<div class="contents">
			<img src="<?php echo get_template_directory_uri(); ?>/image/main/sample1.jpg">
		</div><!-- contents -->
		<div class="contents">
			<img src="<?php echo get_template_directory_uri(); ?>/image/main/sample2.jpg">
		</div><!-- contents -->
		<div class="contents">
			<img src="<?php echo get_template_directory_uri(); ?>/image/main/sample3.jpg">
		</div><!-- contents -->
		<div class="contents">
			<img src="<?php echo get_template_directory_uri(); ?>/image/main/sample4.jpg">
		</div><!-- contents -->
	</div><!-- contentsWrapper -->
</div><!-- pageWrapper -->
</body>
</html>