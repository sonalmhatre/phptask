<?php
@ini_set('session.cookie_httponly',1);
@ini_set('session.use_only_cookies',1);
require_once __DIR__."/../config.php";
$xu           = array();
// Connect to SQL Server
$sqlConnect   = $xu["sqlConnect"] = new mysqli($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name, 3306);

if ($sqlConnect->connect_errno) {
    echo "Failed to connect to MySQL: " . $sqlConnect -> connect_error;
    exit();
  }
date_default_timezone_set('UTC');

require_once('functions_one.php');

