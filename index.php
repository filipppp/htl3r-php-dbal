<?php
require "UserCredentialsDB.php";
echo 'Hello World';

$config = new \Doctrine\DBAL\Configuration();
//..

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
