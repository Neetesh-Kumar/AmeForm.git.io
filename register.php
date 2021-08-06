<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"amez");

	$query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[reenter_password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("create account successfully....You may sign in now.")
	window.location.href = "index.php";
</script>