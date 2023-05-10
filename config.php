<?php
//conexão com o banco de dados
define('HOST', 'aws.connect.psdb.cloud');
define('USER', '3g7awxkjdji8qfdi231r');
define('PASS', 'pscale_pw_SwU69h9VyZXMycUL58mbzEMjQRXwcko2kB248l06I3V');
define('BASE', 'planetscale');

$conn = new MySQLi(HOST, USER, PASS, BASE);