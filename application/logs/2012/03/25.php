<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-25 17:50:33 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-03-25 17:50:33 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/oleg/domains/betsmaster/betsmaster.ru/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/oleg/domains/betsmaster/betsmaster.ru/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /home/oleg/domains/betsmaster/betsmaster.ru/application/bootstrap.php(112): Kohana_Database_Query->execute()
#3 /home/oleg/domains/betsmaster/betsmaster.ru/index.php(102): require('/home/oleg/doma...')
#4 {main}