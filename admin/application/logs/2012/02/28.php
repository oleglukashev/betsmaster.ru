<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-28 05:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-28 05:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-28 05:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-28 05:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-28 14:37:38 --- ERROR: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/model/categories.php [ 21 ]
2012-02-28 14:37:38 --- STRACE: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/model/categories.php [ 21 ]
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
2012-02-28 14:56:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/classes/model/categories.php [ 39 ]
2012-02-28 14:56:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/classes/model/categories.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 14:57:42 --- ERROR: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/model/categories.php [ 21 ]
2012-02-28 14:57:42 --- STRACE: ErrorException [ 8 ]: Undefined index: pid ~ APPPATH/classes/model/categories.php [ 21 ]
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
2012-02-28 15:07:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Users::addUser() ~ APPPATH/classes/controller/users.php [ 38 ]
2012-02-28 15:07:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Users::addUser() ~ APPPATH/classes/controller/users.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 15:08:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Users::addUser() ~ APPPATH/classes/controller/users.php [ 38 ]
2012-02-28 15:08:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Users::addUser() ~ APPPATH/classes/controller/users.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 15:10:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH/views/users/edit.php [ 19 ]
2012-02-28 15:10:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH/views/users/edit.php [ 19 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/users/edit.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 19, Array)
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
2012-02-28 15:13:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
2012-02-28 15:13:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 54, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(20): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:14:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
2012-02-28 15:14:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 54, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(20): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:14:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
2012-02-28 15:14:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 54, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(20): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:14:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
2012-02-28 15:14:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 54, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(20): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:14:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
2012-02-28 15:14:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 54 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 54, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(20): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:15:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
2012-02-28 15:15:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 55, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:16:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
2012-02-28 15:16:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 55, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:19:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
2012-02-28 15:19:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 55, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:26:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 56 ]
2012-02-28 15:26:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 56 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 56, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(22): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:29:08 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::url() must be an array, string given, called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php on line 21 and defined ~ SYSPATH/classes/kohana/route.php [ 190 ]
2012-02-28 15:29:08 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::url() must be an array, string given, called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php on line 21 and defined ~ SYSPATH/classes/kohana/route.php [ 190 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/route.php(190): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/oleg/doma...', 190, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Kohana_Route::url('default', 'id')
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:29:34 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::url() must be an array, string given, called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php on line 21 and defined ~ SYSPATH/classes/kohana/route.php [ 190 ]
2012-02-28 15:29:34 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::url() must be an array, string given, called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php on line 21 and defined ~ SYSPATH/classes/kohana/route.php [ 190 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/route.php(190): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/oleg/doma...', 190, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Kohana_Route::url('default', 'id')
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:29:35 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::url() must be an array, string given, called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php on line 21 and defined ~ SYSPATH/classes/kohana/route.php [ 190 ]
2012-02-28 15:29:35 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::url() must be an array, string given, called in /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php on line 21 and defined ~ SYSPATH/classes/kohana/route.php [ 190 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/route.php(190): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/oleg/doma...', 190, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Kohana_Route::url('default', 'id')
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:36:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/users.php [ 21 ]
2012-02-28 15:36:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH/classes/controller/users.php [ 21 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/oleg/doma...', 21, Array)
#1 [internal function]: Controller_Users->action_edit()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#6 {main}
2012-02-28 15:36:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$id ~ APPPATH/classes/controller/users.php [ 21 ]
2012-02-28 15:36:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$id ~ APPPATH/classes/controller/users.php [ 21 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/oleg/doma...', 21, Array)
#1 [internal function]: Controller_Users->action_edit()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#6 {main}
2012-02-28 15:37:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH/classes/controller/users.php [ 21 ]
2012-02-28 15:37:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH/classes/controller/users.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 15:38:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
2012-02-28 15:38:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 55, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:38:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
2012-02-28 15:38:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 55, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:49:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 56 ]
2012-02-28 15:49:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 56 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 56, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(22): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:50:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
2012-02-28 15:50:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 55, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:50:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
2012-02-28 15:50:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 55 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 55, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(21): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:51:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 59 ]
2012-02-28 15:51:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 59 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 59, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(25): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:51:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 59 ]
2012-02-28 15:51:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 59 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 59, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(25): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:51:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 59 ]
2012-02-28 15:51:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 59 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 59, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(25): Controller_Users->getUserInfo()
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:52:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 60 ]
2012-02-28 15:52:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/users.php [ 60 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 60, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(24): Controller_Users->getUserInfo('1')
#2 [internal function]: Controller_Users->action_edit()
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#7 {main}
2012-02-28 15:53:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH/views/users/edit.php [ 19 ]
2012-02-28 15:53:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH/views/users/edit.php [ 19 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/users/edit.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 19, Array)
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
2012-02-28 16:06:55 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/users/edit.php [ 7 ]
2012-02-28 16:06:55 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/users/edit.php [ 7 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/users/edit.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/home/oleg/doma...', 7, Array)
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
2012-02-28 16:10:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: template_namehis ~ APPPATH/classes/controller/users.php [ 22 ]
2012-02-28 16:10:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: template_namehis ~ APPPATH/classes/controller/users.php [ 22 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/users.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 22, Array)
#1 [internal function]: Controller_Users->action_edit()
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#6 {main}
2012-02-28 16:12:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/users/index.php [ 9 ]
2012-02-28 16:12:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/users/index.php [ 9 ]
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
2012-02-28 16:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-02-28 16:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-28 16:13:00 --- ERROR: ErrorException [ 1 ]: Call to a member function addUser() on a non-object ~ APPPATH/classes/controller/users.php [ 66 ]
2012-02-28 16:13:00 --- STRACE: ErrorException [ 1 ]: Call to a member function addUser() on a non-object ~ APPPATH/classes/controller/users.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:13:08 --- ERROR: ErrorException [ 1 ]: Call to a member function addUser() on a non-object ~ APPPATH/classes/controller/users.php [ 66 ]
2012-02-28 16:13:08 --- STRACE: ErrorException [ 1 ]: Call to a member function addUser() on a non-object ~ APPPATH/classes/controller/users.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:19:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Users::editUser() ~ APPPATH/classes/controller/users.php [ 33 ]
2012-02-28 16:19:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Users::editUser() ~ APPPATH/classes/controller/users.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:20:02 --- ERROR: ErrorException [ 1 ]: Call to a member function addUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
2012-02-28 16:20:02 --- STRACE: ErrorException [ 1 ]: Call to a member function addUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:20:31 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
2012-02-28 16:20:31 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:21:55 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
2012-02-28 16:21:55 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:21:58 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
2012-02-28 16:21:58 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:23:03 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
2012-02-28 16:23:03 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:26:49 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
2012-02-28 16:26:49 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:27:49 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 74 ]
2012-02-28 16:27:49 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:27:53 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 74 ]
2012-02-28 16:27:53 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:30:32 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
2012-02-28 16:30:32 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:30:35 --- ERROR: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
2012-02-28 16:30:35 --- STRACE: ErrorException [ 1 ]: Call to a member function editUser() on a non-object ~ APPPATH/classes/controller/users.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 16:32:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/users/index.php [ 9 ]
2012-02-28 16:32:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/users/index.php [ 9 ]
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