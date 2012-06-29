<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-27 00:27:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:27:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:27:19 --- ERROR: View_Exception [ 0 ]: The requested view avatar/welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-27 00:27:19 --- STRACE: View_Exception [ 0 ]: The requested view avatar/welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 E:\wamp\www\vimilydemo\system\classes\kohana\view.php(137): Kohana_View->set_filename('avatar/welcome')
#1 E:\wamp\www\vimilydemo\system\classes\kohana\view.php(30): Kohana_View->__construct('avatar/welcome', NULL)
#2 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_View::factory('avatar/welcome')
#3 [internal function]: Controller_Avatar->action_index()
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-27 00:27:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:27:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:30:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 00:30:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:31:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 00:31:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:32:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 00:32:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:33:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 00:33:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:34:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 00:34:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:43:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:43:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:43:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:43:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:44:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:44:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:44:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:44:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 00:47:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:47:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:47:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:47:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:47:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:47:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 00:48:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
2012-06-27 00:48:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: HTTP_POST_VARS ~ APPPATH\classes\controller\avatar.php [ 18 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 18, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 01:00:32 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\avatar.php [ 16 ]
2012-06-27 01:00:32 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\avatar.php [ 16 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 16, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 01:02:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'photoId' in 'field list' [ INSERT INTO `vimilydemo_tag` (`photoId`, `tagName`, `tagX`, `tagY`) VALUES ('public/images/ec7gmth9foxkuwrqmcsz.jpg', 'name', '173', '169') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-27 01:02:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'photoId' in 'field list' [ INSERT INTO `vimilydemo_tag` (`photoId`, `tagName`, `tagX`, `tagY`) VALUES ('public/images/ec7gmth9foxkuwrqmcsz.jpg', 'name', '173', '169') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\wamp\www\vimilydemo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `vi...', false, Array)
#1 E:\wamp\www\vimilydemo\application\classes\model\tag.php(19): Kohana_Database_Query->execute()
#2 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(34): Model_Tag->add('name', 'public/images/e...', '173', '169')
#3 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(20): Controller_Avatar->_save_tag('name', 'public/images/e...', '173', '169')
#4 [internal function]: Controller_Avatar->action_index()
#5 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#6 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-27 01:09:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: getSrc ~ APPPATH\views\avatar\index.php [ 292 ]
2012-06-27 01:09:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: getSrc ~ APPPATH\views\avatar\index.php [ 292 ]
--
#0 E:\wamp\www\vimilydemo\application\views\avatar\index.php(292): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 292, Array)
#1 E:\wamp\www\vimilydemo\system\classes\kohana\view.php(61): include('E:\wamp\www\vim...')
#2 E:\wamp\www\vimilydemo\system\classes\kohana\view.php(343): Kohana_View::capture('E:\wamp\www\vim...', Array)
#3 E:\wamp\www\vimilydemo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\wamp\www\vimilydemo\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(24): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Avatar->action_index()
#7 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#8 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-27 01:13:24 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `vimilydemo_tag` (`photoName`, `tagName`, `tagX`, `tagY`) VALUES (('public', 'images', 'ec7gmth9foxkuwrqmcsz.jpg'), 'name', '28', '93') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-27 01:13:24 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `vimilydemo_tag` (`photoName`, `tagName`, `tagX`, `tagY`) VALUES (('public', 'images', 'ec7gmth9foxkuwrqmcsz.jpg'), 'name', '28', '93') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\wamp\www\vimilydemo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `vi...', false, Array)
#1 E:\wamp\www\vimilydemo\application\classes\model\tag.php(19): Kohana_Database_Query->execute()
#2 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(34): Model_Tag->add('name', Array, '28', '93')
#3 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(20): Controller_Avatar->_save_tag('name', Array, '28', '93')
#4 [internal function]: Controller_Avatar->action_index()
#5 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#6 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-27 01:14:10 --- ERROR: ErrorException [ 8 ]: Undefined index: photoName ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 01:14:10 --- STRACE: ErrorException [ 8 ]: Undefined index: photoName ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 01:14:26 --- ERROR: ErrorException [ 8 ]: Undefined index: photoName ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 01:14:26 --- STRACE: ErrorException [ 8 ]: Undefined index: photoName ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 10:49:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function tag_json_encode() ~ APPPATH\classes\controller\tag.php [ 8 ]
2012-06-27 10:49:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function tag_json_encode() ~ APPPATH\classes\controller\tag.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 10:49:19 --- ERROR: ErrorException [ 1 ]: Call to undefined function tag_json_encode() ~ APPPATH\classes\controller\tag.php [ 8 ]
2012-06-27 10:49:19 --- STRACE: ErrorException [ 1 ]: Call to undefined function tag_json_encode() ~ APPPATH\classes\controller\tag.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 10:50:26 --- ERROR: ErrorException [ 1 ]: Call to undefined function tag_json_encode() ~ APPPATH\classes\controller\tag.php [ 8 ]
2012-06-27 10:50:26 --- STRACE: ErrorException [ 1 ]: Call to undefined function tag_json_encode() ~ APPPATH\classes\controller\tag.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 10:51:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: phparr ~ APPPATH\classes\controller\tag.php [ 9 ]
2012-06-27 10:51:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: phparr ~ APPPATH\classes\controller\tag.php [ 9 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\tag.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 9, Array)
#1 [internal function]: Controller_Tag->action_fetchtag()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tag))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 14:04:05 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 14:04:05 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 14:05:09 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 14:05:09 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 14:05:26 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 14:05:26 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 14:44:59 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 14:44:59 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 14:45:23 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 14:45:23 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 14:49:13 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 14:49:13 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 15:52:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 15:52:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 15:54:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 15:54:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 15:58:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 15:58:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 15:59:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 15:59:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:00:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:00:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:02:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:02:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:03:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:03:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:03:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:03:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:09:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:09:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL City was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-27 16:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL City was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-27 16:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL JJJJ was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-27 16:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL JJJJ was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-27 16:10:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:10:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:18:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:18:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:20:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:20:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:21:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:21:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:22:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:22:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:22:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:22:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:22:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:22:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:22:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:22:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:23:15 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 16:23:15 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:24:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:24:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:29:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:29:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:32:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:32:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:32:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:32:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:33:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:33:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:33:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
2012-06-27 16:33:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagName ~ APPPATH\classes\controller\avatar.php [ 19 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 19, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:38:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Tag::count() ~ APPPATH\classes\controller\tag.php [ 12 ]
2012-06-27 16:38:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Tag::count() ~ APPPATH\classes\controller\tag.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 16:39:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Tag::count() ~ APPPATH\classes\controller\tag.php [ 12 ]
2012-06-27 16:39:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Tag::count() ~ APPPATH\classes\controller\tag.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 16:39:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Tag::count() ~ APPPATH\classes\controller\tag.php [ 12 ]
2012-06-27 16:39:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Tag::count() ~ APPPATH\classes\controller\tag.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 16:39:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Tag::count() ~ APPPATH\classes\controller\tag.php [ 12 ]
2012-06-27 16:39:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Tag::count() ~ APPPATH\classes\controller\tag.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 16:41:54 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 16:41:54 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:42:09 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 16:42:09 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 16:43:36 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 16:43:36 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 17:03:05 --- ERROR: ErrorException [ 1 ]: Call to undefined function _fetch_tag() ~ APPPATH\classes\controller\avatar.php [ 20 ]
2012-06-27 17:03:05 --- STRACE: ErrorException [ 1 ]: Call to undefined function _fetch_tag() ~ APPPATH\classes\controller\avatar.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 17:03:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function _fetch_tag() ~ APPPATH\classes\controller\avatar.php [ 20 ]
2012-06-27 17:03:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function _fetch_tag() ~ APPPATH\classes\controller\avatar.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 17:03:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function _fetch_tag() ~ APPPATH\classes\controller\avatar.php [ 20 ]
2012-06-27 17:03:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function _fetch_tag() ~ APPPATH\classes\controller\avatar.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 17:21:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: phrase ~ APPPATH\views\avatar\index.php [ 381 ]
2012-06-27 17:21:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: phrase ~ APPPATH\views\avatar\index.php [ 381 ]
--
#0 E:\wamp\www\vimilydemo\application\views\avatar\index.php(381): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\wamp\www\vim...', 381, Array)
#1 E:\wamp\www\vimilydemo\system\classes\kohana\view.php(61): include('E:\wamp\www\vim...')
#2 E:\wamp\www\vimilydemo\system\classes\kohana\view.php(343): Kohana_View::capture('E:\wamp\www\vim...', Array)
#3 E:\wamp\www\vimilydemo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\wamp\www\vimilydemo\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(37): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Avatar->action_index()
#7 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#8 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-27 17:24:56 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 17:24:56 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 17:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:28:08 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 17:28:08 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 17:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:28:16 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
2012-06-27 17:28:16 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 17 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 17, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 17:31:08 --- ERROR: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 15 ]
2012-06-27 17:31:08 --- STRACE: ErrorException [ 8 ]: Undefined index: commd ~ APPPATH\classes\controller\avatar.php [ 15 ]
--
#0 E:\wamp\www\vimilydemo\application\classes\controller\avatar.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\wamp\www\vim...', 15, Array)
#1 [internal function]: Controller_Avatar->action_index()
#2 E:\wamp\www\vimilydemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Avatar))
#3 E:\wamp\www\vimilydemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\wamp\www\vimilydemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-27 17:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-27 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/public/css/basic.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\wamp\www\vimilydemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-27 23:36:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\controller\avatar.php [ 60 ]
2012-06-27 23:36:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\controller\avatar.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 23:36:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\controller\avatar.php [ 60 ]
2012-06-27 23:36:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\controller\avatar.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-27 23:37:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\controller\avatar.php [ 60 ]
2012-06-27 23:37:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\controller\avatar.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}