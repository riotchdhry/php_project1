<?php

define('DB_USER','sql205.epizy.com');
define('DB_PASSWORD','AYb5iGiZXqs3');
define('DB_HOST', 'epiz_27103686');
define('DB_NAME', 'epiz_27103686_project1');


$dbc= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('could not connect to Mysqli:'.mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');

?>