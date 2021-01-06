<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db_url = getenv('CLEARDB_DATABASE_URL');
$db_login = getenv('CLEARDB_DATABASE_LOGIN');
$db_pass = getenv('CLEARDB_DATABASE_PASS');
$db_host = getenv('CLEARDB_DATABASE_HOSTNAME');
$db_db = getenv('CLEARDB_DATABASE_DB');
$con=mysqli_connect($db_host, $db_login, $db_pass, $db_db);


?>