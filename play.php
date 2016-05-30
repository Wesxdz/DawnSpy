<!doctype html>
<html>
<head>

	<?php include 'config.php' ?>
	
	<?php

	$url = $_GET['url'];

	$sql = "SELECT * FROM clickcounter1 WHERE url='$url'";

	$result = mysql_query($sql);

	$row = mysql_fetch_array($result);
	$id=$row['id'];
	$url=$row['url'];
	$count=$row['count'];
	$name=$row['name'];
	$desc=$row['desc'];
	$date=$row['date'];
	$cnts=$row['cnts'];
	$yt=$row['yt'];
	$dev=$row['dev'];

	?>

<meta charset="utf-8">
<title><?php echo $name ?></title>

<link rel="icon" type="image/ico" href="/favicon.ico"/>

<link rel="stylesheet" type="text/css" href="/main_css.css">

<style>

.adspace {
	width: 728px;
	height: 90px;
	background-color: #070707;
	margin-left:auto;
	margin-right:auto;
	margin-top:10px;
	margin-bottom:10px;
}	

.area {
	border-radius:5px;
	width: 800px;
	height: 600px;
	background-color: #070707;
	margin-left:auto;
	margin-right:auto;
	position:relative;
}

.area_left {
	top: 10px; 
	left: 10px; 
	position:absolute;
	width:380px
}

.area_right {
	top: 10px; 
	left: 410px; 
	position:absolute;
	width:380px
}

.area_rating {
	position:relative;
}

</style>

</head>

<!--Start Container-->

<main class="container"> 
	
<!--Start Header-->

	<?php include 'header.php'; ?>

<!-- End Header -->

<!--Start Navigation-->

	<?php include 'navigation.php'; ?>
	
<!--End Navigation-->

<!--Start Content-->

<body>

<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"tIEti1asyr00El", domain:"dawnspy.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=tIEti1asyr00El" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->

<article class="content">

	<div class="adspace"></div>
	
<!--Start swf-->

	<div class="area">
		<a href="">
		<img src="/Images/btn_fullscreen.png"></a>

	<?php

	list($width, $height, $type, $attr) = getimagesize("Games/$url.swf");

	?>

	<div style="position:absolute; bottom:<?php echo (600-$height)/2 ?>px; left:<?php echo (800-$width)/2 ?>px;">
	
	<?php

	"<object width='$width' height='$height'>";

	echo
"<embed src='/Games/".$url.".swf' width='$width' height='$height'/>";
	
	"</object>";

	?>

	</div>
	</div>
		
<!--End swf-->

	<div class="adspace"></div>

	<div class="area">

	<div class="area_left">

	<?php if (!empty($dev)) { ?>

		<img src="/Images/user_icon.png">
	<span style="position:absolute; top:-20px; left:70px;">
		<h1 class="d2">By <span style="color:#00a0e3">Geckosplash</span></h1>
		<p class="d2"><?php echo "$date"; ?></p>
		<p class="d1">More games by this developer</p>
	</span>
	
	<?php } ?>

		<h1 class="d1">Description</h1>
		<p class="d2"><?php echo "$desc"; ?></p>

		<h1 class="d1">Controls</h1>
		<p class="d2"><?php echo "$cnts"; ?></p>

	<div class="area_rating">

		<!--<h1 class="d1">Game Rating</h1>
		<p class="d2">Average:</p>
	<span style="position:absolute; top:30px; left:72px;">
		<img src="/Images/rating_average.png">
	</span>
		<p class="d2">Your Rating:</p>
	<span style="position:absolute; top:50px; left:72px;">
		<img src="/Images/rating_your.png">
	</span>
		<p class="d2">"The coolest thing since ice cream."</p>-->
		<p class="d2">Plays: <span style="color:#00a0e3"><?php echo "$count"; ?></p>
	</div>
	</div>
		
<!--Start Video-->

	<div class="area_right">
	
	<?php

	if (!empty($yt)) {

	echo
	"<iframe title='YouTube video player' class='youtube-player' type='text/html' 
		width='380' height='254' src='http://www.youtube.com/embed/".$yt."'
		frameborder='0' allowFullScreen></iframe>"
?>
	<?php } ?>

	</div>
		
<!--End Video-->
	
	</div>
	<div style="padding:5px"></div>	
	
</article>
</body>

<!--End Content-->

<!--Start Footer-->

<?php include 'footer.php'; ?>

<!-- End Footer-->

</main>

<!--End Container-->

</html>
