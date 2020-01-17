<?php

phpinfo();

echo '<pre>';

$db = new mysqli('172.16.24.22', 'root', 'root', 'test');
$db->set_charset("utf8");

print_r($db);
