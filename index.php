<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Form</title>
<link rel="stylesheet" href="./style/bootstrap.css" type="text/css" media="screen"/>
</head>
<body class="jumbotron">
<h1>Quadratic equation</h1>
          <p class="large">Solution of quadratic equation (ax<sup>2</sup> + bx + c = 0)</p>
            <?php
            require_once("./tridy/rovnice.php");
            if (isset($_GET['c'])) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            $krov = new kvadrRovnice();
			      $krov->diskrimi($a, $b, $c);
			      $krov->vypocKoren($a, $b);
            $krov->vyTiskni();
            }          
	    ?> 
<div id="footer"><a href='index.html'>Nové zadání</a></div>
</body>
</html>
