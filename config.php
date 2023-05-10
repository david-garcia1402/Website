<?php
//conexão com o banco de dados
define('HOST', 'aws.connect.psdb.cloud');
define('USER', 'ykxedhp82upe4hvej0u9');
define('PASS', 'pscale_pw_aFxSjW6qW4fAEj2nEPP2LFWiTEXHvZSpZY8eXHufFaT');
define('BASE', 'planetscale');

$conn = new MySQLi(HOST, USER, PASS, BASE);