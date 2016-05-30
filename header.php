<header>

<?php include 'login.php'; ?>


<div style="margin:10px;">

		<img src="/Images/Bookmark.png" alt="">
		&nbsp;
		<a href="http://www.dawnspy.com"><img src="/Images/DawnSpy1.png"></a>
	
	<div class="cnt_ver" style="right:16px; top:12px;">
		
<?php if(!$_SESSION['id']): ?>

<!-- Login Form -->
				
	<form method="post">
					
                    
<?php

						
	if($_SESSION['msg']['login-err']) {
		echo $_SESSION['msg']['login-err'];
		unset($_SESSION['msg']['login-err']);
						}
?>
	<input Placeholder="Username" type="text" name="username" id="username" value="" size="23" />
		<input Placeholder="Password" type="password" name="password" id="password" size="23" />
&nbsp;
		<input type="submit" name="submit" value="login_cmd" class="btn_login"/>

&nbsp;
	<span style="position:relative; top:6px;">
		<a href="create_account.php"><img src='/Images/Btn_Create_Account1.png'></a>
	</form>
	</div>
	</div>

            
	
	<?php else: ?>
            
	<span class="cnt_ver" style="right:16px; top:-8px;">	
	<div class="user">
		<h1 class="d1"> <?php echo $_SESSION['usr'] ? $_SESSION['usr']:'';?></h1>
	</span>
	<span style="position:relative; top:-6px;">
		<p class="d2">Level: 24</p>
	</span>
	<div class="option_menu">
		<a href="http://www.dawnspy.com/my_page"><p class="option">My Page</p></a>
		<p class="option">Favorites</p>
		<a href="?logoff"><p class="option">Log off</p></a>
	</div>
	</div>

	<?php endif; ?>	

	
</header>
