<?php

if (!empty($_FILES['file'])){
	foreach ($_FILES['file']['name'] as $key => $name){
		$_FILES[]
	}
}



?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11/dtd">
<html version="-//W3C//DTD XHTML 1.1//EN" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript"	src="upload.js"></script>
	<style type="text/css">
		#upload_progress { display: none; }
	</style>
	<title>File Upload</title>
</head>
<body>
	<div id="uploaded">
		<?php




		?>
	</div>
	<div id="upload_proress"></div>
	<div>
		<form action="" method="post" enctype="multipart/form-data">
			<div>
				<input type="file" name="file[]" mutiple="multitple">
				<input type="submit" value="Upload">
			</div>
		</form>
	</div>
</body>
</html>