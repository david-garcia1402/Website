<?php
//conexão com o banco de dados
define('HOST', 'aws.connect.psdb.cloud');
define('USER', 'di6pu0nlwekir01d6hvh');
define('PASS', 'pscale_pw_RWSGsATXZECFtLH4xSiDiagPHvUApXKVrzAQZBO6Rl2');
define('BASE', 'planetscale');

$conn = new MySQLi(HOST, USER, PASS, BASE);