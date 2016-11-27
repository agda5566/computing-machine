<?php
header("Content-type:text/html; charset=utf-8");
$dsn = "sqlsrv:server=;Database=test1";
$user ="sa";
$password="";
try{
  $dbh = new PDO($dsn, $user, $password);
  if($dbh==null){
    echo '1122';
  }
  else{
    echo '@@';
  }
} catch(PDOException $e){
  echo 'error' .$e->getMessage();
}
