<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Comanda IF </title>
</head>
<body>

<div style="margin: 30px 10%;">
<?php
if($_SERVER['REQUEST_METHOD'] != 'POST') { 
?>
<h3>My form</h3>
<form action="" method="post" id="myform" name="myform">

    <label>Com et dius?</label> <input type="text" value="" size="30" maxlength="100" name="nom" id="" /><br /><br />

    <button id="mysubmit" type="submit">Submit</button><br /><br />

</form>
<?php
} else {
?>
<h3>My results</h3>
<p>El teu nom és <?php echo( $_POST['nom']); ?> </p>
<?php
}
?>
</div>
</body>
</html>