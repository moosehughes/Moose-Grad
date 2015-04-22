<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("hello.php");
$form_str = "
<form id=\"form1\" name=\"form1\" method=\"post\" action=\"\">
  <input type=\"text\" name=\"member\" id=\"member\"/>
  <input type=\"hidden\" name=\"somethingthatineedfromtheuser\" value=\"thisthing\" />
  <input type=\"submit\" name=\"button\" id=\"button\" value=\"Submit\" />
</form>
";
if($_POST['member'] != NULL){
	print_r($_POST);
}else{
	print($form_str);
}
?>
</body>
</html>