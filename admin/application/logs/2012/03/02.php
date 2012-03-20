<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-02 14:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-02 14:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-02 14:49:33 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Login::checkUser(), called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php on line 13 and defined ~ APPPATH/classes/model/login.php [ 5 ]
2012-03-02 14:49:33 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Login::checkUser(), called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php on line 13 and defined ~ APPPATH/classes/model/login.php [ 5 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/login.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/oleg/doma...', 5, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(13): Model_Login->checkUser()
#2 [internal function]: Controller_Login->action_index()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-03-02 14:51:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `admin_users` WHERE `name` = 'oleg' AND `password` = '050419902'' at line 1 [ SELECT COUNT(`id` FROM `admin_users` WHERE `name` = 'oleg' AND `password` = '050419902' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-03-02 14:51:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `admin_users` WHERE `name` = 'oleg' AND `password` = '050419902'' at line 1 [ SELECT COUNT(`id` FROM `admin_users` WHERE `name` = 'oleg' AND `password` = '050419902' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`i...', false, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/login.php(11): Kohana_Database_Query->execute()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(15): Model_Login->checkUser('oleg', '050419902')
#3 [internal function]: Controller_Login->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-03-02 14:51:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `admin_users` WHERE `name` = 'oleg' AND `password` = '050419902'' at line 1 [ SELECT COUNT(`id` FROM `admin_users` WHERE `name` = 'oleg' AND `password` = '050419902' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-03-02 14:51:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `admin_users` WHERE `name` = 'oleg' AND `password` = '050419902'' at line 1 [ SELECT COUNT(`id` FROM `admin_users` WHERE `name` = 'oleg' AND `password` = '050419902' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`i...', false, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/login.php(11): Kohana_Database_Query->execute()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(15): Model_Login->checkUser('oleg', '050419902')
#3 [internal function]: Controller_Login->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-03-02 14:52:44 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Auth::login(), called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php on line 17 and defined ~ MODPATH/auth/classes/kohana/auth.php [ 85 ]
2012-03-02 14:52:44 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Auth::login(), called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php on line 17 and defined ~ MODPATH/auth/classes/kohana/auth.php [ 85 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(85): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/oleg/doma...', 85, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(17): Kohana_Auth->login()
#2 [internal function]: Controller_Login->action_index()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-03-02 14:55:42 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-03-02 14:55:42 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth/file.php(40): Kohana_Auth->hash('050419902')
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login('oleg', '050419902', false)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(17): Kohana_Auth->login('oleg', '050419902')
#3 [internal function]: Controller_Login->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-03-02 14:58:20 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-03-02 14:58:20 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth/file.php(40): Kohana_Auth->hash('050419902')
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login('oleg', '050419902', false)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(17): Kohana_Auth->login('oleg', '050419902')
#3 [internal function]: Controller_Login->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-03-02 15:03:12 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-03-02 15:03:12 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth/file.php(40): Kohana_Auth->hash('050419902')
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login('oleg', '050419902', false)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(19): Kohana_Auth->login('oleg', '050419902')
#3 [internal function]: Controller_Login->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-03-02 15:04:59 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-03-02 15:04:59 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth/file.php(40): Kohana_Auth->hash('050419902')
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login('oleg', '050419902', false)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(19): Kohana_Auth->login('oleg', '050419902')
#3 [internal function]: Controller_Login->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-03-02 15:05:08 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-03-02 15:05:08 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth/file.php(40): Kohana_Auth->hash('050419902')
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login('oleg', '050419902', false)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(19): Kohana_Auth->login('oleg', '050419902')
#3 [internal function]: Controller_Login->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-03-02 15:13:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/kohana/database.php [ 500 ]
2012-03-02 15:13:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/kohana/database.php [ 500 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database.php(500): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/oleg/doma...', 500, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database/query/builder/select.php(352): array_map(Array, Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/login.php(11): Kohana_Database_Query->execute()
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(16): Model_Login->checkUser('oleg', '050419902')
#6 [internal function]: Controller_Login->action_index()
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#11 {main}
2012-03-02 15:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-02 15:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-02 15:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-02 15:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-02 15:16:02 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/login.php [ 11 ]
2012-03-02 15:16:02 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/login.php [ 11 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/login.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/home/oleg/doma...', 11, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(16): Model_Login->checkUser('dsfas', 'asdfasdf')
#2 [internal function]: Controller_Login->action_index()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-03-02 15:17:17 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/login.php [ 11 ]
2012-03-02 15:17:17 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/login.php [ 11 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/login.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/home/oleg/doma...', 11, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(16): Model_Login->checkUser('dsfas', 'asdfasdf')
#2 [internal function]: Controller_Login->action_index()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-03-02 15:17:35 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/login.php [ 11 ]
2012-03-02 15:17:35 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/login.php [ 11 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/login.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/home/oleg/doma...', 11, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(16): Model_Login->checkUser('dsfas', 'asdfasdf')
#2 [internal function]: Controller_Login->action_index()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-03-02 15:18:20 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/login.php [ 16 ]
2012-03-02 15:18:20 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/login.php [ 16 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(16): Kohana_Core::error_handler(4096, 'Object of class...', '/home/oleg/doma...', 16, Array)
#1 [internal function]: Controller_Login->action_index()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#6 {main}
2012-03-02 15:19:06 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/login.php [ 16 ]
2012-03-02 15:19:06 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/login.php [ 16 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/login.php(16): Kohana_Core::error_handler(4096, 'Object of class...', '/home/oleg/doma...', 16, Array)
#1 [internal function]: Controller_Login->action_index()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#6 {main}