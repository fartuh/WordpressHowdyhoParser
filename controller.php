<?php


require('engine/HTTP.php');
require('engine/GetController.php');
require('engine/Parser.php');
require('engine/InsertController.php');
require('vendor/phpQuery.php');
require('view.php');

use engine\GetController;
use engine\Parser;
use engine\InsertController;



$html = GetController::getHTML('http://howdyho.net');
$data = Parser::parsePosts($html);

if(isset($_GET['num']) && $_GET['num'] != ''){
    $num = (int)$_GET['num'];
    InsertController::insert(['title' => $data['posts']['title'][$num], 'body' => $data['posts']['body'][$num]]);
}

View::index($data);
