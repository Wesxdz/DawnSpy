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

	<?php $show = $_POST["search"] ?>
	
	<h1 class="d2">You searched for: <span style="color: #00a0e3;"><?php echo $_POST["search"];?></span>
</h1>

<?php

include 'config.php';

$sql = "SELECT * FROM clickcounter1 WHERE name LIKE '%$show%' ORDER BY count DESC";

$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$id=$row['id'];
	$url=$row['url'];
	$count=$row['count'];
	$name=$row['name'];
	$desc=$row['desc'];
	$date=$row['date'];
	$cat=$row['cat'];
?>
	<div class='icon'>
	<div class='image'>

<?php echo 
	"<a href='/click.php?id=".$id."'><img src='Games/Icon/".$url.".jpg'></a>"

?>
	
	</div>
	<div class='desc'>
		<h1 class='d1'>
	<?php echo "$name"; ?></h1>
		<p class="d2">
	<?php echo "$date"; ?></p>
		<p class="d2">
	<?php echo substr($desc, 0, 80)."..."; ?></p>
	
		<p class="d2">Plays:
	<span style="color:#00a0e3">
	<?php echo "$count"; ?>
	</span>Category:
	<span style="color:#00a0e3">
	<?php echo "$cat"; ?>
		</p>
	</div>
</div>

<?php } ?>

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
