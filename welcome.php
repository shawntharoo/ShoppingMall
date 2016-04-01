<?php
	session_start();
	/*$_SESSION['txtuname']=$name;  */
	echo 'Hi welcome :' .$_SESSION['txtuname'];
	echo '<br>';
	echo'<a href="signout.php">signout</a>';
?>