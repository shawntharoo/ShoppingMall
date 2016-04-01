<?php
			session_start();
			if(isset($_POST['submit']))
			{
			mysql_connect("localhost","cybermart","calm") or die(mysql_error());
			mysql_select_db('php') or die(mysql_error());
			$name=$_POST['txtuname'];
			$pwd=$_POST['txtpassword'];
			if($name!='' && $pwd!='')
			{
			$query=mysql_query("select *from register where username='".$name."' and password='".$pwd."'") or die(mysql_error());
			$res=mysql_fetch_row($query);
			if($res)
			{
			$_SESSION['txtuname']=$name;
			header('location:display.php');
			}
			else
			{
			echo'<script language="javascript">' ;
			echo'alert("Invalid user Name or password")';
			echo'</script>';
			}
			}
			else
			{
			/* echo'Enter both username and password; */
			
			echo'<script language="javascript">';
			echo'alert("Enter both username and password")';
			echo'</script>';
			
			exit;
			}
			}
			
			
?>