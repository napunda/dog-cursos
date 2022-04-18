<?php
include 'header.php';
include 'footer.php';


if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'cursos': include 'views/cursos.php'; break;
	case 'sobre': include 'views/sobre.php'; break;
	case 'contato': include 'views/contato.php'; break;
	default: include 'views/home.php'; break;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Dog Cursos</title>
    <link rel="stylesheet" href="./styles/index.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./owlcarousel/dist/assets/owl.carousel.min.css">
</head>

<body>
</body>

<script src="jquery.min.js"></script>
<script src="./owlcarousel/dist/owl.carousel.min.js"></script>

</html>