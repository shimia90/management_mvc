<?php
/********* PATH *********/
define('DS'                     , DIRECTORY_SEPARATOR);
define('ROOT_PATH'               , dirname(__FILE__));
define('LIBRARY_PATH'           , ROOT_PATH . DS . 'libs' . DS  );
define('CONTROLLER_PATH'        , ROOT_PATH . DS . 'controllers' . DS);
define('MODEL_PATH'             , ROOT_PATH . DS . 'models' . DS);
define('VIEW_PATH'              , ROOT_PATH . DS . 'views' . DS);
define('PUBLIC_PATH'            , ROOT_PATH . DS . 'public' . DS);

/********* URL *********/
define('ROOT_URL'               , './' );
define('PUBLIC_URL'             , ROOT_URL . 'public/');
define('CSS_URL'                , ROOT_URL . 'css/');
define('JS_URL'                 , ROOT_URL . 'js/');
define('IMAGES_URL'             , ROOT_URL . 'images/');
define	('VIEW_URL'			, ROOT_URL . 'views/');

/********* DATABASE *********/
define('DB_HOST'                , 'localhost');
define('DB_USER'                , 'root');
define('DB_PASS'                , '');
define('DB_NAME'                , 'management');
define('DB_TABLE'               , 'user');