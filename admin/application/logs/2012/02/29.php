<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-29 08:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-29 08:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}
2012-02-29 08:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-29 08:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/oleg/domains/oleg.assoulter.com/public_html/admin/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/oleg/domains/oleg.assoulter.com/public_html/admin/index.php(104): Kohana_Request->execute()
#3 {main}