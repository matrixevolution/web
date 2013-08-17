<html> 
<?php
$f1 = 1; 
$f2 = 1; 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css"> @import url(css/external.css); </style>
<title>Hector Aguilar | Fibonacci Example</title>
<link rel="Shortcut Icon" href="../icono.ico" type="image/x-icon" />
<style type="txt/css">
body{
	width:auto;
}
.container{
	width:100%;
}
</style>
</head>
<body>
<div>
<center>
<div class="container">
	<div style="width:500px;">
	  <h2>Example Fibonnacci</h2>
	  <h3>Iniciamos Fibonacci</h3>
	  <div style="width:100px">
		<div style="margin:2px; width: 100px; float:left; background:orange; border:1px black dashed;"><?php echo $f1; ?></div><br />
		<div style="clear:both;"></div>
	    <?php while ($f1 <= 500): ?>
		  <div style="margin:2px; width: 100px; float:left; background:orange; border:1px black dashed;"><?php echo $f2; ?></div><br /> 
		  <?php $f2=$f2+$f1; $f1=$f2-$f1; ?>
		  <div style="clear:both;"></div>
	    <?php endwhile; ?>
	  <div style="clear:both;"></div>
	</div>
    <p>Fin Fibonacci by Hector Aguilar</p>
  </div>
</div>
</center>
</div>
</body> 
</html>