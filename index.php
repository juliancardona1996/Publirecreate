<?php 

$view = isset($_GET['view']) ? $_GET['view'] : 'index';

if(file_exists('controllers/'.$view.'Controller.php')) {
	include('controllers/'.$view.'Controller.php');
}else{

	//Error si no existe la página
	include('controllers/indexController.php');
}

?>
