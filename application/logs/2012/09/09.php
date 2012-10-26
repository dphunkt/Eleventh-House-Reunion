<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-09 00:03:00 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-09-09 00:03:00 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2012-09-09 00:03:02 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-09-09 00:03:02 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2012-09-09 00:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eleventh_house/kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 00:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eleventh_house/kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 00:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 00:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 00:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 00:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 00:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 00:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 00:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 00:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 00:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 00:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 00:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 00:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 01:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/application/vendor/zurb/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-09 01:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/application/vendor/zurb/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:37:29 --- ERROR: View_Exception [ 0 ]: The requested view home/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-09 15:37:29 --- STRACE: View_Exception [ 0 ]: The requested view home/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('home/index')
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('home/index', NULL)
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/application/classes/controller/home.php(8): Kohana_View::factory('home/index')
#3 [internal function]: Controller_Home->action_index()
#4 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-09 15:53:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: main_content ~ APPPATH/views/shared/base.php [ 33 ]
2012-09-09 15:53:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: main_content ~ APPPATH/views/shared/base.php [ 33 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/application/views/shared/base.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 33, Array)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-09 20:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/app.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-09 20:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/app.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 23:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL im was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 23:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL im was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 23:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL imag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 23:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL imag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 23:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL imags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 23:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL imags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 23:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL imag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 23:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL imag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 23:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 23:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 23:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/crisp_paper_ruffles_@2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-09 23:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/crisp_paper_ruffles_@2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 23:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/crisp_paper_ruffles_@.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-09 23:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/crisp_paper_ruffles_@.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 23:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/crisp_paper_ruffles_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-09 23:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/crisp_paper_ruffles_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 23:47:32 --- ERROR: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/tickets.php [ 3 ]
2012-09-09 23:47:32 --- STRACE: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/tickets.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-09 23:47:34 --- ERROR: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/tickets.php [ 3 ]
2012-09-09 23:47:34 --- STRACE: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/tickets.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}