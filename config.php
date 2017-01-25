<?php

define("APP_ROOT",__DIR__);

// Get with default
function getWDefault($var,$default){
	return isset($var)?$var:$default;
}

$host = getWDefault($_SERVER['OPENSHIFT_MYSQL_DB_HOST'],'localhost');
$dbname = getWDefault($_SERVER['OPENSHIFT_MYSQL_DB_NAME'],'library');
$port = getWDefault($_SERVER['OPENSHIFT_MYSQL_DB_PORT'],'3306');
$user = getWDefault($_SERVER['OPENSHIFT_MYSQL_DB_USERNAME'],$_SERVER['MYSQL_USER']);
$password = getWDefault($_SERVER['OPENSHIFT_MYSQL_DB_PASSWORD'],$_SERVER['MYSQL_PASSWD']);

return array(
	"db_url"=>"mysql:host=$host;dbname=$dbname;port=$port;charset=utf8",
	"db_user"=>$user,
	"db_secret"=>$password,
	"salt"=>'m90nds_n53xu',
	"pdo_opts"=>[
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
		],
	"sitename"=>"Library",
	"version"=>"0.0.1-DEV",
	"authors"=>[[
			"name"=>'Debajyoti Bhaumik',
			"email"=>'hello@debjyoti.in',
			"github"=>'earthdan',
			"twitter"=>'earthdan95'
		],[
			"name"=>'Pragyan Bhattarjya'
		]
	]);
