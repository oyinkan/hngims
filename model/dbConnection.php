<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 09-Oct-19
 * Time: 10:42 AM
 */



$host = 'localhost';
$dbName = 'hngi';
$username = 'root';
$password = '';


$connection = mysqli_connect($host, $username, $password, $dbName);
if(!$connection){
    die('Database connection failed');
}