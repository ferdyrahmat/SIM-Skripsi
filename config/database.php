<?php

$connection = new mysqli("localhost", "root", "", "sim_skripsi");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
