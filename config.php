<?php
//conexão com o banco de dados
define('HOST', 'aws.connect.psdb.cloud');
define('USER', 'bcmvwj0iswt93oyheypk');
define('PASS', 'pscale_pw_kEoUGJcUsRx0aEkYia8aic0ECuI8IMgV3Bv0Eql6pfr');
define('BASE', 'planetscale');

$conn = new MySQLi(HOST, USER, PASS, BASE);