<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>DawnSpy - Play free online games</title>

<link rel="icon" type="image/ico" href="favicon.ico"/>

<link rel="stylesheet" type="text/css" href="main_css.css">

	<?php include 'config.php' ?>

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

	<div class="divider">
	</div>

	<div class="sidespace">

	<?php $show = Upgrades; ?>

	<h1 class="d2"><?php echo $show ?> Games</h1>

	<?php include 'show_cat.php'?>	

	</div>

</article>
</body>

<!--End Content-->

<!--Start Footer-->

<?php include 'footer.php'; ?>

<!-- End Footer-->

</main>

<!--End Container-->

</html>

