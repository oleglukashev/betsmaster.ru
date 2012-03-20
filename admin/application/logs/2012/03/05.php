<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-05 02:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL дщпшт was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-05 02:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL дщпшт was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-05 10:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-05 10:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-05 10:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-05 10:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-05 13:46:31 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-03-05 13:46:31 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(57): Kohana_Auth::instance()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-03-05 13:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-05 13:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-05 13:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-05 13:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-05 13:51:59 --- ERROR: View_Exception [ 0 ]: The requested view modules/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-03-05 13:51:59 --- STRACE: View_Exception [ 0 ]: The requested view modules/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(137): Kohana_View->set_filename('modules/index')
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(30): Kohana_View->__construct('modules/index', NULL)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/controller/template.php(33): Kohana_View::factory('modules/index')
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(39): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Main->before()
#5 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Modules))
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#9 {main}
2012-03-05 13:55:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: modules ~ APPPATH/views/modules/index.php [ 6 ]
2012-03-05 13:55:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: modules ~ APPPATH/views/modules/index.php [ 6 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/modules/index.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 6, Array)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(61): include('/home/oleg/doma...')
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/view.php(343): Kohana_View::capture('/home/oleg/doma...', Array)
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(65): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Modules))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-03-05 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-05 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-05 14:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-05 14:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-05 14:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-05 14:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-03-05 14:09:33 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-03-05 14:09:33 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(57): Kohana_Auth::instance()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Modules))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-03-05 14:17:16 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-03-05 14:17:16 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(57): Kohana_Auth::instance()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}
2012-03-05 14:17:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-03-05 14:17:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /home/oleg/domains/oleg.assoulter.com/public_html/admin/modules/auth/classes/kohana/auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/classes/controller/main.php(57): Kohana_Auth::instance()
#5 [internal function]: Controller_Main->after()
#6 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#10 {main}