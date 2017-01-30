<?php

$env = [
	'DATABASE_1_PORT_3306_TCP_ADDR',
	'DATABASE_1_PORT_3306_TCP_PORT',
	'DATABASE_1_ENV_MYSQL_DATABASE',
	'DATABASE_1_ENV_MYSQL_USER',
	'DATABASE_1_ENV_MYSQL_PASSWORD',
	'REDIS_1_PORT_6379_TCP_ADDR',
	'REDIS_1_PORT_6379_TCP_PORT',
];

foreach ($env as $key) {
	echo sprintf("%s: %s<br>", $key, getenv($key));
}