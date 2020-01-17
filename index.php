<?php

phpinfo();

echo '<pre>';

$db = new mysqli($db_host, $db_uname, $db_password, $db_name);
$db->set_charset("utf8");

print_r($db);
