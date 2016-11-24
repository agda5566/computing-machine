<?php
header("Content-type:text/html; charset=utf-8");
$dsn = "sqlsrv:server=10.21.10.113;Database=test1";
$user ="sa";
$password="root5566";
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
