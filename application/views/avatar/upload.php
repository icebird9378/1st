<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Vimily Demo|Photo Tagging Application</title>
<link rel="stylesheet" href="public/css/basic.css" type="text/css" />
</head>

<body
	style='text-align: center; font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Helvetica, Arial, sans-serif; background-color: #eee; color: #444; font-size: 75%;'>
	<div id="page" style = 'width: 900px;
	background-color: #fff;
	margin: 0 auto;
	text-align: left;
	border-color: #ddd;
	border-style: none solid solid;
	border-width: medium 1px 1px;'>
		<div id="container" style = 'padding: 20px;'>
	<?php if ($uploaded_file): ?>
	<h1 style='padding: 0; font-size: 3em; color: #333;'>Upload success</h1>
	<p style='line-height: 1.8em;'>
		Here is your uploaded avatar: <img
			src="<?php echo URL::site("/public/images/$uploaded_file") ?>"
			alt="Uploaded avatar" />
	</p>

	<?php else: ?>
	<h1 style='padding: 0; font-size: 3em; color: #333;'>Something went
		wrong with the upload</h1>
	<p style='line-height: 1.8em;'>
		<?php echo $error_message ?>
	</p>
	<?php endif ?>
	<!-- 
*************************************************************
1.  Return to index page  
*************************************************************
-->			
			<!-- START:  Return to index page   -->
			<form  
				action="<?php echo URL::site('avatar') ?>" method="post"
				enctype="multipart/form-data">
					<input type="hidden" name = "commd" value="interal" />
					<input type="submit" name="submit" id="submit" value="Return" />
			</form>
			<!-- END:  Return to index page   -->
	</div>
	

	</div>
	

			
<!--
*************************************************************
1. Set page footer
*************************************************************
-->
	<!-- START: Page footer -->
	<div id="footer" style = 'clear: both;
	color: #777;
	margin: 0 auto;
	padding: 20px 0 40px;
	text-align: center;'>Vimily Demo Site</div>
	<!-- END: Page footer -->
</body>
</html>
