<!DOCTYPE html>
<html>
<body>
  <body bgcolor="#F0F3F4" align="center">
    <img src="images/logo.png" height="200px" width="200px">
    <h1 class="elegant elegantshadow" align="center" style="font-family:Verdana, Tahoma, sans-serif;font-style:inherit;font-weight:200;"><u>We appreciate that you’ve taken the time to write us.<br> We’ll get back to you very soon.</u></h1>
    <br><br>
    <a href="index.html">Back to main page</a>
  <?php
  $element1 = $_POST['name'];
  $element8 = $_POST['email'];
  $element6 = $_POST['message'];

  $formcontent="From: $element1 \n Message: Is this about a $element8, Where is this Business Located? element6, blah blah blah";
  $recipient = "debasihpothal@gmail.com";
  $subject = "Contact Form";
  $mailheader = "From: $element1 \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "<script type='text/javascript'>alert('Mail sent successfully!')</script>";
  ?>

</body>
</html>
