<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-03 08:10:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/main.php [ 30 ]
2012-03-03 08:10:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/main.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 08:10:55 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/default/header.php [ 22 ]
2012-03-03 08:10:55 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/default/header.php [ 22 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/default/header.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/oleg/doma...', 22, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(61): include('/home/oleg/doma...')
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(343): Kohana_View::capture('/home/oleg/doma...', Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(57): Kohana_View->render()
#4 [internal function]: Controller_Main->after()
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#9 {main}
2012-03-03 14:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-03 14:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-03 14:23:17 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Login_Main' not found ~ APPPATH/classes/controller/login.php [ 3 ]
2012-03-03 14:23:17 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Login_Main' not found ~ APPPATH/classes/controller/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 14:24:01 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
2012-03-03 14:24:01 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 14:24:08 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
2012-03-03 14:24:08 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 14:24:59 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
2012-03-03 14:24:59 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 14:26:45 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
2012-03-03 14:26:45 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 14:26:45 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
2012-03-03 14:26:45 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 14:26:46 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
2012-03-03 14:26:46 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 14:29:13 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
2012-03-03 14:29:13 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Main_Login' not found ~ APPPATH/classes/controller/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}