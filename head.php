<?php 
include ('conf.php');
include ('include/db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Hope Charities | <?php echo $title; ?></title>
<script type="text/javascript" src="js/lib_func.js"></script>
<script type="text/javascript" src="js/dom.js"></script>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- EMPIEZA EL CONTENIDO DE CABEZA -->
<div id="header">
	<div id="logo"><a href="index.php"><img src="img/layout/logo.gif" title="logo"  alt="logo"/></a></div>
    
    <div id="nav">
    	<div id="letter"><form name="n_email" action="newsletter_monthl_sign-up.php" method="post"><input type="text" name="newletter" value="" /></form><a href="#" id="a_letter">send</a>
        </div>
        
     <div id="menu">
    <?php 
	 include ('include/menu.php');
	?>

 </div>
     
     
     
</div>



<?php
include('include/submenu.php');
?>




    
    <p style="clear:both;"></p>
</div>
<!-- TERMINA LA CABEZA -->