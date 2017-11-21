<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="utf-8">
<title>Formulář</title>
<link rel="stylesheet" href="./style/bootstrap.css" type="text/css" media="screen"/>
</head>
<body class="jumbotron">
<div id="container">
<div id="sitename">
<h1>Kvadratická rovnice</h1>
</div>
      <div id="wrap1">
        <div id="contentalta">
          <p class="large">Řešení kvadratické rovnice (ax<sup>2</sup> + bx + c = 0)</p>
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
</div>
</div>
</div>
</body>
</html>
