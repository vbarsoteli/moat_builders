<?php

	/*
	*
	* VINICIUS BARSOTELI
	* vbarsoteli@gmali.com
	*
	* Julho/2022
	*
	*/

	//
	//try {

		//
		ini_set('display_errors', 1);
		error_reporting('E_ERROR | E_WARNING | E_PARSE');	
		
		//
		date_default_timezone_set('Brazil/East');
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');

		//
		@session_start();
		if (isset($_GET['logout']))
			unset($_SESSION);

		//
		include('backend/model/DAO.php');
		include('backend/view/View.php');
		include('backend/controller/UserController.php');
		include('backend/controller/ArtistAlbumController.php');

		//
		include('comum/minifier.php'); // compacta os CSS e gera um único geral.min.css
		
?>
<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Music App - Moat Builders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="comum/plugin/fontawesome-free-5.14.0/css/all.css" />
<link rel="stylesheet" type="text/css" href="comum/css/geral.min.css?<?=date('YmdHi') ?>" />

<script type="text/javascript" src="comum/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="comum/plugin/jquery-mask/jquery.mask.min.js"></script>
<script type="text/javascript" src="comum/js/funcao.js?<?=date('YmdHis') ?>"></script>

</head>

<body>
<?php

	//
	View::load('header.php');
	View::load('menu.php');
	
	// routes
    include('routes.php');

	//
	View::load('alert.php', $alert);

	// echo $_SESSION['user_logged'];
	// // simple way to redirect not logget user to login form
	// if (!$_SESSION['user_logged'] and $_GET['l'] != 'user_login') {
	// 	header('location: ?l=user_login&aaaaaaa');
	// 	exit;
	// }
		
?>


</body>
</html>
<?php 

	// } catch(Error $e) {

	// 	//
	// 	$trace = $e->getTrace();
	// 	$erro = $e->getMessage().' in '.$e->getFile().' on line '.$e->getLine().' called from '.$trace[0]['file'].' on line '.$trace[0]['line'];

	// 	//
	// 	@Email(array('vbarsoteli@gmail.com'), 'Erro: '.$e->getMessage(), $erro, false, false);

	// }
