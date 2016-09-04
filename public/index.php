<?php
define('BASE_URI', '/survey/public/');
define('REQUEST_URI', $_SERVER['REQUEST_URI']);
define('ROUTE_URI', str_replace(BASE_URI, '', REQUEST_URI));

//TODO