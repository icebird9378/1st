<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-23 00:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/classes/controller/welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 00:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/classes/controller/welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 00:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 00:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 00:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 00:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 00:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL avatarXDEBUG_SESSION_START=ECLIPSE_DBGP&KEY=13403759997751 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-23 00:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL avatarXDEBUG_SESSION_START=ECLIPSE_DBGP&KEY=13403759997751 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-23 00:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL avarta was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-23 00:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL avarta was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-23 11:39:39 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2012-06-23 11:39:39 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-23 11:40:53 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2012-06-23 11:40:53 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-23 11:40:55 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2012-06-23 11:40:55 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-23 11:40:58 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2012-06-23 11:40:58 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-23 11:41:02 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2012-06-23 11:41:02 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Application' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-23 11:41:17 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-06-23 11:41:17 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', 'E:\wamp\www\Vim...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 11:43:05 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-06-23 11:43:05 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', 'E:\wamp\www\Vim...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 11:43:06 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-06-23 11:43:06 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', 'E:\wamp\www\Vim...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 11:43:08 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-06-23 11:43:08 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', 'E:\wamp\www\Vim...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 11:45:33 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-06-23 11:45:34 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', 'E:\wamp\www\Vim...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 11:51:55 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-06-23 11:51:55 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', 'E:\wamp\www\Vim...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 11:53:13 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-06-23 11:53:13 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', 'E:\wamp\www\Vim...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 11:56:57 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-06-23 11:56:57 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(8, 'Array to string...', 'E:\wamp\www\Vim...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 11:59:38 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 11 ]
2012-06-23 11:59:38 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 E:\wamp\www\VimilyDemo\application\classes\controller\welcome.php(11): Kohana_Core::error_handler(2, 'Creating defaul...', 'E:\wamp\www\Vim...', 11, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-23 12:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL avatar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-23 12:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL avatar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-23 13:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.3.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.galleriffic.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.galleriffic.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.opacityrollover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.opacityrollover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 13:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 13:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:19:25 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-23 14:19:25 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 E:\wamp\www\VimilyDemo\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 E:\wamp\www\VimilyDemo\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 E:\wamp\www\VimilyDemo\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-23 14:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.galleriffic.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.opacityrollover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery-1.3.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.galleriffic.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.opacityrollover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery-1.3.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery-1.3.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.opacityrollover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.galleriffic.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.opacityrollover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery-1.3.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.galleriffic.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery-1.3.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.galleriffic.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery-1.3.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.galleriffic.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.opacityrollover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/js/jquery.opacityrollover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538171134_2f77bc00d9_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538183196_8baf9a8015_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/images/2538168854_f75e408156_s.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 14:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 14:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 20:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 20:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 20:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 20:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 20:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 20:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 20:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 20:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/js/jquery-1.4.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL avar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-23 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL avar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-23 21:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ava was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-23 21:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ava was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\wamp\www\VimilyDemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\wamp\www\VimilyDemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-23 21:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 21:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 21:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 22:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2538183196_8baf9a8015_b.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 22:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2538183196_8baf9a8015_b.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-23 22:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2538183196_8baf9a8015_b.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-23 22:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/2538183196_8baf9a8015_b.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\VimilyDemo\index.php(109): Kohana_Request->execute()
#1 {main}