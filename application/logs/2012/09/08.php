<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-08 17:00:12 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-09-08 17:00:12 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2012-09-08 17:00:29 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-09-08 17:00:29 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/eleventh_house/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/eleventh_house/kohana/index.php(108): Kohana_Request::factory()
#3 {main}