<?php
define('host', 'localhost');
define('username', 'root');
define('password', '');
define('database', 'techart');

function dbConnect()
{
    return new mysqli(host, username, password, database);
}