<?php
require "inc/functions.inc.php";
require "inc/Mustache.php";

check_lang();

$m = new Mustache();

$obj = new stdClass();
$obj->TITLE   = TITLE;
$obj->BLOG    = BLOG;
$obj->VERSION = VERSION;
$obj->VERSION_LINK   = VERSION_LINK;

$obj->NEW_TASK       = NEW_TASK;
$obj->NEW_COLUMN     = NEW_COLUMN;
$obj->DELETE_COLUMN  = DELETE_COLUMN;


$obj->COLUMN_1    = COLUMN_1;
$obj->COLUMN_2    = COLUMN_2;
$obj->COLUMN_3    = COLUMN_3;
$obj->COLUMN_NAME = COLUMN_NAME;
$obj->COLUMN_WIP  = COLUMN_WIP;
$obj->UNLIMITED   = UNLIMITED;

$obj->WHAT_IS_TEXT= WHAT_IS_TEXT;
$obj->BUTTON_TEXT = BUTTON_TEXT;

$obj->JOIN    = JOIN;
$obj->COPY    = COPY;

$template = file_get_contents('html/index.html');
echo $m->render($template, $obj);
