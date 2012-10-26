<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-21 02:43:12 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/controller/contact.php [ 2 ]
2012-09-21 02:43:12 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/controller/contact.php [ 2 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(2): Kohana_Core::error_handler(2, 'include(): File...', '/Applications/M...', 2, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(2): include()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/core.php(504): require('/Applications/M...')
#3 [internal function]: Kohana_Core::auto_load('controller_cont...')
#4 [internal function]: spl_autoload_call('controller_cont...')
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(85): class_exists('controller_cont...')
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-21 02:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:43:35 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/controller/contact.php [ 2 ]
2012-09-21 02:43:35 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/controller/contact.php [ 2 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(2): Kohana_Core::error_handler(2, 'include(): File...', '/Applications/M...', 2, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(2): include()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/core.php(504): require('/Applications/M...')
#3 [internal function]: Kohana_Core::auto_load('controller_cont...')
#4 [internal function]: spl_autoload_call('controller_cont...')
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(85): class_exists('controller_cont...')
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-21 02:44:37 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/controller/contact.php [ 2 ]
2012-09-21 02:44:37 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/controller/contact.php [ 2 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(2): Kohana_Core::error_handler(2, 'include(): File...', '/Applications/M...', 2, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(2): include()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/core.php(504): require('/Applications/M...')
#3 [internal function]: Kohana_Core::auto_load('controller_cont...')
#4 [internal function]: spl_autoload_call('controller_cont...')
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(85): class_exists('controller_cont...')
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-21 02:44:38 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/controller/contact.php [ 2 ]
2012-09-21 02:44:38 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/controller/contact.php [ 2 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(2): Kohana_Core::error_handler(2, 'include(): File...', '/Applications/M...', 2, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(2): include()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/core.php(504): require('/Applications/M...')
#3 [internal function]: Kohana_Core::auto_load('controller_cont...')
#4 [internal function]: spl_autoload_call('controller_cont...')
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(85): class_exists('controller_cont...')
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-21 02:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:45:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 424 ]
2012-09-21 02:45:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 424 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:45:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 424 ]
2012-09-21 02:45:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 424 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:51:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 438 ]
2012-09-21 02:51:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 438 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:51:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 438 ]
2012-09-21 02:51:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 438 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:52:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 447 ]
2012-09-21 02:52:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 447 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:52:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 522 ]
2012-09-21 02:52:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 522 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:52:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 752 ]
2012-09-21 02:52:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 752 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:52:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 880 ]
2012-09-21 02:52:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 880 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:52:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 889 ]
2012-09-21 02:52:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 889 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:54:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 890 ]
2012-09-21 02:54:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 890 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:54:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 890 ]
2012-09-21 02:54:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/vendor/phpmailer/class.phpmailer.php [ 890 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 02:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 02:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 02:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 03:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 03:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 03:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 03:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 03:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:09:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/email.php [ 34 ]
2012-09-21 03:09:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 03:11:55 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'driver' ~ APPPATH/classes/email.php [ 36 ]
2012-09-21 03:11:55 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'driver' ~ APPPATH/classes/email.php [ 36 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/email.php(36): Kohana_Core::error_handler(2, 'Illegal string ...', '/Applications/M...', 36, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(9): Email::connect()
#2 [internal function]: Controller_Contact->action_index()
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-21 03:12:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/contact.php [ 13 ]
2012-09-21 03:12:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/contact.php [ 13 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/contact.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 13, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#6 {main}