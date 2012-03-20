<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-01 14:36:36 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/users/edit.php [ 7 ]
2012-03-01 14:36:36 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/users/edit.php [ 7 ]
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
2012-03-01 14:40:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: userInfo ~ APPPATH/views/users/edit.php [ 54 ]
2012-03-01 14:40:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: userInfo ~ APPPATH/views/users/edit.php [ 54 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/application/views/users/edit.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/oleg/doma...', 54, Array)
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
2012-03-01 15:03:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/users.php [ 41 ]
2012-03-01 15:03:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/users.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-01 15:53:58 --- ERROR: ErrorException [ 1 ]: Call to undefined function concatUrlWithParentCategory() ~ APPPATH/classes/model/categories.php [ 31 ]
2012-03-01 15:53:58 --- STRACE: ErrorException [ 1 ]: Call to undefined function concatUrlWithParentCategory() ~ APPPATH/classes/model/categories.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-01 15:56:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function concatUrlWithParentCategory() ~ APPPATH/classes/model/categories.php [ 31 ]
2012-03-01 15:56:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function concatUrlWithParentCategory() ~ APPPATH/classes/model/categories.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}