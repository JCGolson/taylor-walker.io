<?php
require_once './vendor/autoload.php';

use 
vendor\gregwar\captcha\CaptchaBuilder;
session_start();

$builder = new CaptchaBuilder;
$builder->build();
$_SESSION['user_phrase'] = $builder->getPhrase();


header('Content-type: image/jpeg');
$builder->output();