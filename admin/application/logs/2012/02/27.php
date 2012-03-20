<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-27 12:46:48 --- ERROR: Database_Exception [ 1146 ]: Table 'oleg_hardcalculator.admin_mainmenu' doesn't exist [ SELECT * FROM `admin_mainmenu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-27 12:46:48 --- STRACE: Database_Exception [ 1146 ]: Table 'oleg_hardcalculator.admin_mainmenu' doesn't exist [ SELECT * FROM `admin_mainmenu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/main.php(7): Kohana_Database_Query->execute()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(70): Model_Main->getMenu()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(30): Controller_Main->getMenu()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(58): Controller_Main->getHeaderVariables()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-02-27 12:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 12:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 12:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 12:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 12:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 12:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 12:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 12:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 12:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 12:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 12:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 12:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 12:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 12:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 12:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 12:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 12:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-27 12:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#1 {main}
2012-02-27 13:06:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/users/index.php [ 9 ]
2012-02-27 13:06:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/users/index.php [ 9 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/users/index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 9, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(61): include('/home/oleg/doma...')
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(343): Kohana_View::capture('/home/oleg/doma...', Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(61): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-02-27 13:10:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Categories::getUsers() ~ APPPATH/classes/controller/users.php [ 12 ]
2012-02-27 13:10:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Categories::getUsers() ~ APPPATH/classes/controller/users.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-27 13:11:14 --- ERROR: Database_Exception [ 1146 ]: Table 'oleg_hardcalculator.users' doesn't exist [ SELECT * FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-27 13:11:14 --- STRACE: Database_Exception [ 1146 ]: Table 'oleg_hardcalculator.users' doesn't exist [ SELECT * FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/users.php(7): Kohana_Database_Query->execute()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(12): Model_Users->getUsers()
#3 [internal function]: Controller_Users->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-02-27 13:15:37 --- ERROR: Database_Exception [ 1146 ]: Table 'oleg_hardcalculator.admin_users' doesn't exist [ SELECT * FROM `admin_users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-27 13:15:37 --- STRACE: Database_Exception [ 1146 ]: Table 'oleg_hardcalculator.admin_users' doesn't exist [ SELECT * FROM `admin_users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/users.php(7): Kohana_Database_Query->execute()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(12): Model_Users->getUsers()
#3 [internal function]: Controller_Users->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-02-27 13:15:38 --- ERROR: Database_Exception [ 1146 ]: Table 'oleg_hardcalculator.admin_users' doesn't exist [ SELECT * FROM `admin_users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-27 13:15:38 --- STRACE: Database_Exception [ 1146 ]: Table 'oleg_hardcalculator.admin_users' doesn't exist [ SELECT * FROM `admin_users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/users.php(7): Kohana_Database_Query->execute()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(12): Model_Users->getUsers()
#3 [internal function]: Controller_Users->action_index()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}
2012-02-27 13:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 13:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 13:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 13:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 13:49:53 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/categories/edit.php [ 20 ]
2012-02-27 13:49:53 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/categories/edit.php [ 20 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/categories/edit.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/home/oleg/doma...', 20, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(61): include('/home/oleg/doma...')
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(343): Kohana_View::capture('/home/oleg/doma...', Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(61): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-02-27 13:49:56 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/categories/create.php [ 22 ]
2012-02-27 13:49:56 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/categories/create.php [ 22 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/categories/create.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/home/oleg/doma...', 22, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(61): include('/home/oleg/doma...')
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(343): Kohana_View::capture('/home/oleg/doma...', Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(61): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-02-27 13:50:05 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/categories/create.php [ 22 ]
2012-02-27 13:50:05 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/categories/create.php [ 22 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/categories/create.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/home/oleg/doma...', 22, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(61): include('/home/oleg/doma...')
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(343): Kohana_View::capture('/home/oleg/doma...', Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(61): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-02-27 14:00:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH/views/categories/create.php [ 21 ]
2012-02-27 14:00:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH/views/categories/create.php [ 21 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/categories/create.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 21, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(61): include('/home/oleg/doma...')
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(343): Kohana_View::capture('/home/oleg/doma...', Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(61): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-02-27 14:00:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH/views/categories/create.php [ 21 ]
2012-02-27 14:00:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH/views/categories/create.php [ 21 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/categories/create.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 21, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(61): include('/home/oleg/doma...')
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(343): Kohana_View::capture('/home/oleg/doma...', Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(61): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-02-27 23:20:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-27 23:20:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-27 23:20:37 --- ERROR: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/model/categories.php [ 21 ]
2012-02-27 23:20:37 --- STRACE: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/model/categories.php [ 21 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/model/categories.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/home/oleg/doma...', 21, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(68): Model_Categories->addCategory(Array)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(41): Controller_Users->addCategory(Array)
#3 [internal function]: Controller_Users->action_create()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#8 {main}