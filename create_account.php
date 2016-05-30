<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>DawnSpy</title>

<link rel="icon" type="image/ico" href="favicon.ico"/>

<link rel="stylesheet" type="text/css" href="main_css.css">

</head>	

<!--Start Container-->

<main class="container" style="background-color:black;"> 
	
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

<!-- Register Form -->

	<?php include 'register.php'; ?>

	<?php if(!$_SESSION['id']):?>
				
	<form action="" method="post">
                    
<?php
						
	if($_SESSION['msg']['reg-err'])
						{
									 			echo $_SESSION['msg']['reg-err'];
		unset($_SESSION['msg']['reg-err']);
						}
						
	if($_SESSION['msg']['reg-success'])
						{
																																	                                       			echo $_SESSION['msg']['reg-success'];
										 			unset($_SESSION['msg']['reg-success']);
						}
?>
                    		
	<label for="username"><p class="d2">Username: </p> </label>
					<input type="text" name="username" id="username" value="" size="23" />
					<label for="email"><p class="d2">Email:</p></label>
					<input type="text" name="email" id="email" size="23" />
					<label>A password will be e-mailed to you.</label>
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
            <?php else: ?>
            <p class="d1">You are already logged in. -_-</p>
            
            <?php endif; ?>
	
</article>
</body>

<!--End Content-->

<!--Start Footer-->

<?php include 'footer.php'; ?>

<!-- End Footer-->

</main>

<!--End Container-->

</html>
