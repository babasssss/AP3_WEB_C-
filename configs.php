<?php

$DB_SERVER = getenv("MVC_SERVER") ?: "192.168.139.1";
$DB_DATABASE = getenv("MVC_DB") ?: "mugiwaradev";
$DB_USER = getenv("MVC_USER") ?: "mugiwaradev-2";
$DB_PASSWORD = getenv("MVC_TOKEN") ?: "wGg2YddN";
$DEBUG = getenv("MVC_DEBUG") ?: true;

return array(
    "DB_USER" => $DB_USER,
    "DB_PASSWORD" => $DB_PASSWORD,
    "DB_DSN" => "mysql:host=$DB_SERVER;dbname=$DB_DATABASE;charset=utf8",
    "DEBUG" => $DEBUG
);




?>
