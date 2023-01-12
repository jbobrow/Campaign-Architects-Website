<?
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$body .= "Email: " . $email . "\n";
$body .= "Name: " . $name . "\n";
$body .= "Phone" . $phone . "\n";
$body .= "Message: " . $message . "\n";
//replace with your email
mail("jbobrow+crowdpun@gmail.com","[New Inquiry] Crowdfund Pundits Site",$body);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your email has been sent. Thank You!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">
</head>