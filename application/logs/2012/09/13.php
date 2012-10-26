<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-13 02:48:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 30 ]
2012-09-13 02:48:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 30 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:49:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ APPPATH/views/shared/base.php [ 27 ]
2012-09-13 02:49:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ APPPATH/views/shared/base.php [ 27 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 27, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:49:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/views/shared/base.php [ 27 ]
2012-09-13 02:49:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/views/shared/base.php [ 27 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 27, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:50:38 --- ERROR: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH/views/shared/base.php [ 27 ]
2012-09-13 02:50:38 --- STRACE: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH/views/shared/base.php [ 27 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 27, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:50:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH/views/shared/base.php [ 27 ]
2012-09-13 02:50:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH/views/shared/base.php [ 27 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 27, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:51:42 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/shared/base.php [ 27 ]
2012-09-13 02:51:42 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/shared/base.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:52:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 27 ]
2012-09-13 02:52:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 27 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 27, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:52:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 27 ]
2012-09-13 02:52:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 27 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 27, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:52:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 27 ]
2012-09-13 02:52:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 27 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 27, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:54:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
2012-09-13 02:54:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 29, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:54:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
2012-09-13 02:54:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 29, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 02:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 02:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 02:58:43 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/home.php [ 10 ]
2012-09-13 02:58:43 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/home.php [ 10 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/home.php(10): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Applications/M...', 10, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-13 02:58:44 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/home.php [ 10 ]
2012-09-13 02:58:44 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/home.php [ 10 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/home.php(10): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Applications/M...', 10, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-13 02:59:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/home.php [ 10 ]
2012-09-13 02:59:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/home.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:59:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ APPPATH/classes/controller/home.php [ 10 ]
2012-09-13 02:59:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ APPPATH/classes/controller/home.php [ 10 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/home.php(10): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 10, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-13 02:59:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ APPPATH/classes/controller/home.php [ 10 ]
2012-09-13 02:59:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ APPPATH/classes/controller/home.php [ 10 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/home.php(10): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 10, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-13 02:59:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ APPPATH/classes/controller/home.php [ 10 ]
2012-09-13 02:59:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ APPPATH/classes/controller/home.php [ 10 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/home.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/M...', 10, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-13 02:59:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ APPPATH/classes/controller/home.php [ 10 ]
2012-09-13 02:59:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ APPPATH/classes/controller/home.php [ 10 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/home.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/M...', 10, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-13 03:01:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
2012-09-13 03:01:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 29, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 03:02:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
2012-09-13 03:02:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 29, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 03:02:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
2012-09-13 03:02:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/shared/base.php [ 29 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 29, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Band))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-13 03:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 03:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 03:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 03:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 03:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 03:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 03:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 03:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 03:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 03:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 03:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 03:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 03:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 03:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/danny.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-13 03:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/danny.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 03:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/portraits/mike.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-13 14:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-13 14:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}