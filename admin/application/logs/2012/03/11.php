<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-11 15:17:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH/views/modules/index.php [ 7 ]
2012-03-11 15:17:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH/views/modules/index.php [ 7 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/modules/index.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 7, Array)
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
2012-03-11 15:30:04 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-03-11 15:30:04 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2012-03-11 16:21:34 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-03-11 16:21:34 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2012-03-11 16:28:27 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/bootstrap.php [ 99 ]
2012-03-11 16:28:27 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/bootstrap.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}