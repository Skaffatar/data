<?php

$handle = new PDO("mysql:host=localhost;port=3306;dbname=test", 'root', 'Day##n@786');

$data = $handle->query("SELECT * FROM mytable LIMIT 100");
if(!$data) {
    die("error: " . $handle->errorInfo());
}

$theads = $handle->query("DESCRIBE mytable");
