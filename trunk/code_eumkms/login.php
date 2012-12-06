<?php include "konek.php";?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
		<link rel="apple-touch-icon" href="https://www.pagelines.com/images/touch-pagelines.png" />

 	<title>E-UMKMS Login</title>
	<link rel="stylesheet" type="text/css" href="https://www.pagelines.com/launchpad/templates/css/launchpad.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-6282814-1']);
		_gaq.push(['_trackPageview']);
		_gaq.push(['_trackPageLoadTime']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script>
</head>

<body>

	<div id="header">
		<div id="header_glare">
			<div class="content">
				<div class="logo">					
						<h1>E-UMKMS</h1>			
				</div>
				
				<div id="navi">
					<ul>
						<li><a href="home.php" target="">Home E-UMKMS&rarr;</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div id="main" class="contrast">
		<div class="content" class="fix">
<div id="control_panel" class="login_panel">
	<div class="panel_pad">
		
		
		<div class="header-series">
			<span class="h1">Login</span>
			<span class="sl-indent">atau </span>
			<input class="sl-input" type="button" value="Daftar" />
		</div>
		
		<form name="login" method="post" action="/launchpad/member.php">

			<table class="vedit" >
			    <tr>
			        <td>
						<label class="ilabel">Username</label>
						<input class="ilogin itext" placeholder="masukkan username" type="text" name="amember_login"  value="" />
					</td>
			    </tr>
			    <tr>
			        <td>
						<label class="ilabel">Password</label>
			        	<input class="ilogin itext" placeholder="******" type="password" name="amember_pass" />
					</td>
			    </tr>
			    			</table>
			<input type="hidden" name="login_attempt_id" value="1354773911" />
			

			<input class="sl-input" type="submit" value="Login" />

		</form>
		<form name="sendpass" method="post" action="https://www.pagelines.com/launchpad/sendpass.php">
			<table align="center" class="vedit" >
			    <tr>
			        <td>
						<label class="ilabel">Lupa Password? <small></small></label> 
			        	<input  class="ilogin itext" placeholder="masukkan email atau username" type="text" name="login" placeholder="" />
					</td>
			    </tr>
			</table>
			<input type="submit" value="Get Password" />
		</form>

	
		
	</div>
</div>



	<div class="clear"></div>

	</div> <!-- end content -->
</div>


<div id="footer">
	<div class="content">
		<a href="http://www.pagelines.com/"><img src="https://www.pagelines.com/launchpad/templates/img/footer-pagelines.png" /></a>
	</div>
</div>
<div class="clear"></div>

</body>
</html>