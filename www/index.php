<?php
$pretty = function($v='',$c="&nbsp;&nbsp;&nbsp;&nbsp;",$in=-1,$k=null)use(&$pretty){
	$r='';
	if(in_array(gettype($v),array('object','array'))){
		$r.=($in!=-1?str_repeat($c,$in):'').(is_null($k)?'':"$k: ").'<br>';
		foreach($v as $sk=>$vl){
			$r.=$pretty($vl,$c,$in+1,$sk).'<br>';
		}
	}else{
		$r.=($in!=-1?str_repeat($c,$in):'').(is_null($k)?'':"$k: ").(is_null($v)?'&lt;NULL&gt;':"<strong>$v</strong>");
	}
	return$r;
};

function check_admin_token($token){
  //FIXME: Check $token is integer in base 10
  $token = $token / 2;
  //FIXME: Introduce time and a psuedo-random sequence instead 
  //of simple congruence to prevent replay attacks
  //**Consecuence of introducing time** -> client's & server clock's diff must
    //be under time-tollarance constant, as we can never garuntee 100% sync
  return ($token % 93) === 1;
}

  $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  if(isset($_GET['admin_char']) && isset($_COOKIE['admin_token']) && check_admin_token($_COOKIE['admin_token'])){
  		echo <<<HEAD
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Server Var Inspector</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
HEAD;
  	echo "<br/><hr/><br/><center><h3>\$_SERVER</h3></center>";
		echo $pretty($_SERVER);
		echo "<br/><hr/><br/><center><h3>\$_GET</h3></center>";
		echo $pretty($_GET);
		echo "<br/><hr/><br/><center><h3>\$_POST</h3></center>";
		echo $pretty($_POST);
		echo "<br/><hr/><br/><center><h3>\$_ENV</h3></center>";
		echo $pretty($_ENV);
		echo <<<FOOTER
</body>
</html>		
FOOTER;
  return;
  	}

  	
  if($url == '/login'){
	  require('../pages/login.php');
  }else if($url === '/cns'){
    echo '<b><ol>';
    echo '<li>__FILE__ &gt;"'.__FILE__.'"</li>';
    echo '<li>__DIR__ &gt;"'.__DIR__.'"</li>';
    echo '<li>dirname(__DIR__) &gt;"'.dirname(__DIR__).'"</li>';
    echo '<li>__NAMESPACE__ &gt;"'.__NAMESPACE__.'"</li>';
    echo '</b></ol>';
  }else{
  	die('sdsdsds');
  }
?>
