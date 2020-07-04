<?php
session_start();

if(!isset($_SESSION['cus']))
{
	header("Location: index.php");
}
else if(isset($_SESSION['cus'])!="")
{
	
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['cus']);
	header("Location: index.php");
}
?>