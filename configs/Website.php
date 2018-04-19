<?php
define('BASEPATH',dirname(dirname(__FILE__)));
define('APP',BASEPATH.'/app');
define('CTRL',BASEPATH.'/app/Controllers');
define('CTRLNAMESPACE','app\Controllers\\');
define('SHOWPAGE',5);	//显示页数
define('PAGENUM',12);	//每页显示多少条数据
define('CACHE',FALSE);
define('LOG',FALSE);
define('REDIS',FALSE);
define('DEBUG',TRUE);