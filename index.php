<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN' "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
</head>
<div id="wrapper">
<body>
My name is Chip

And this is <a href="about-me.php">All About Me</a>
<form name="name" id="name" action="functions/run_name.php" method="POST">
<input name="name_input" id="name_input" type="text">
<input type="submit" name="submit" value="Who Am I?!">
</form>
</body>
</div>
<div id="push"><!--Make Sure No Content Goes into the Push Div--></div>
<div id="footer">
<?php
include 'content/footer.php';
?>
</div>
</html>
