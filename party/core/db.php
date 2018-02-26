<?php

$dbh = new PDO("mysql:host=localhost;dbname=" . $config['db_name'] . ";port=3306;charset=utf8mb4", $config['db_user'], $config['db_password']);
