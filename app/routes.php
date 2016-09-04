<?php

$route->get('/', 'HomeController', 'index');
$route->get('/questions/{id}', 'QuestionController', 'show');