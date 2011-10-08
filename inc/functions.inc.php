<?php

function check_lang($lang = NULL){
  if (!$lang) $lang = $_SERVER['QUERY_STRING'];
  switch ($lang) {
    case 'en':
      require "lng/en.lng.php";
      setcookie("virtualkanban", 'en');
      break;
      
    case 'es':
      require "lng/es.lng.php";
      setcookie("virtualkanban", 'es');
      break; 
  
    default:
      if ($_COOKIE["virtualkanban"]) check_lang($_COOKIE["virtualkanban"]);
      else          check_lang('en');
      break;
  
  }
}
