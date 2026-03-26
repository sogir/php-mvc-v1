<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../routes/web.php';


$db = new \App\Core\Database();
if ($db->getConnection()) {
    echo "Database is connected!";
}