<?php 
/*
require_once '../bootstrap.php';
require_once '../library/template.php';
require_once '../library/view_helpers.php';

new core\DB\Dummy();
use core\Template;
*/
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
/*echo "\$_SERVER['DOCUMENT_ROOT']= ".$_SERVER['DOCUMENT_ROOT']."<br>";
echo "\$_SERVER['REQUEST_URI']= ".$_SERVER["REQUEST_URI"]."<br>";
foreach ($_GET as $key => $value) {
 	echo "\$_GET[$key] = $value <br>";
}

foreach ($_REQUEST as $key => $value) {
 	echo "\$_REQUEST[$key] = $value <br>";
}*/
if($url == '/login')
	echo 'login page';
/*
$view = new Template(null);

if($url === '/hambu'){
	if(isset($_GET['panu']))
		phpinfo();
}else if($url === '/template.test'){
	//render('template.test.php',[]); Some Error
}else if($url === '/'){
	$view->title = "Home";
	$view->msg = "Visit <a href=".SITE_ROOT."/template.test>template.test</a>";
	$view->content = $view->render('index.php');
	echo $view->render('_layout.php');
}else if ($url === '/dashboard'){
	view_not_implemented($view);
}else if ($url === '/login'){
	view_not_implemented($view);
}else if ($url === '/logout'){
	view_not_implemented($view);
}else if ($url === '/register-common'){
	view_not_implemented($view);
}else if ($url === '/register-library'){
	view_not_implemented($view);
}else if ($url === '/register-library-admins'){
	view_not_implemented($view);
}else if ($url === '/db-test'){
	$conn = \core\DB\connect_db();
	$msg = "";
	$query = "";
	if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['tbl'])){
		$table = trim($_GET['tbl']);
		$msg = ucfirst($table);
		if(strlen($table) < 2){
			http_response_code(401);
			$view->msg = "Malformed Request";
			echo $view->render('errors.php');
			return;
		}
		//$table = $conn->quote($table);
		$query = "SELECT * FROM ".$table;
	}else{
		$msg = "Books";
		$query = "SELECT * FROM [library].[Book]";
	}
	$view->title = "flafing data";
	view_flaf_query($view, $conn, $query, $msg);
}else{
	http_response_code(404);
	$view->msg = "Not Found";
	$view->explanation = "We cannot find the document yet";
	echo $view->render('errors.php');
}*/
?>