<?php

define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST', 'localhost:3307');
define('DB_NAME', 'bookstore');


$dbc= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('could not connect to Mysqli:'.mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');

?>