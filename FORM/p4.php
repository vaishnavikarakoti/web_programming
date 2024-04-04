<html>
<form method="post">
FIRST NAME:
<input type="text" name="firstnm" id="name"><br>
LAST NAME: 
<input type="text" name="lastnm" id="name"><br>

Agree To Terms and Services: 
<input type="checkbox" name="check">
<br>
<input type="submit" name="sub" value="Submit">
</form>
</html>

<?php
error_reporting();

if(isset($_REQUEST['sub']))
{
	if(empty($_REQUEST['check']))
	{
		echo"ERROR: Agree terms and condition";
	}
	else
	{
		header("location:process4.php");
		exit();
	}
}
?>