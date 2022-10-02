<?php

function getConnection(): PDO{
   $database = "catat_terlambat";
   $host = "localhost";
   $port = 3306;
   $username = "root";
   $password = "";

   return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
