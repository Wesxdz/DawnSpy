<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>DawnSpy</title>

<link rel="icon" type="image/ico" href="favicon.ico"/>

<link rel="stylesheet" type="text/css" href="main_css.css">

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
	
	<div class="sidespace">

	<?php
	if($_SESSION['id'])
	echo "<h1 class='d2'>Hello, <span style='color:#00a0e3;'>".$_SESSION['usr']."</span>! You are registered and logged in!</h1>";
	else echo "<h1 class='d2'>Please login and come back later!</h1>";
	?>
	
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
