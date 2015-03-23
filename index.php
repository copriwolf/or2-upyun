<html>
<head>
	<title>OR2-UPYUN Upload</title>
</head>
<body>
<?php
require_once('config.php');
$user = $_POST['user'];
$password = $_POST['password'];
if (!isset($user)||!isset($password)) {
	?>
	<center>
	<h1>Please Log in</h1>
	<form action="index.php" method="post">
		<label>Username</label>
		<input type="text" name="user" id="user" />
		<input type="password" name="password" id="password" />
		<input type="submit" value="Submit" />
	</form>
	</center>
<?php
}
elseif (($user == username) && ($password == password)) {
?>


	<center><h1>Please select a file to upload!</h1>
	<form action="upload.php" method="post" enctype="multipart/form-data" >
		<div>
			<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
			<label>Upload a file</label>
			<input type="file" name="upload_file" id="upload_file" />
			<input type="submit" value="Submit">
		</div>
	</form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="http://or2.in">Or2-Upyun</a></p>
    </center>
  <?php
}
else {
	echo "Login authentication failed!";
}
?>
</body>
</html>