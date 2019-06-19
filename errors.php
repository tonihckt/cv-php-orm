<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// error_reporting(E_ALL^E_NOTICE);//Yes you're right, not the best idea...

// //Report simple run errors 
// error_reporting(E_ERROR | E_WARNING | E_PARSE); 
// //Report E_NOTICE in addition to simple run errors 
// //(to catch uninitialized variables or variable name misspellings) 
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); 
// //Report all PHP 
// errors error_reporting(-1);
// //Report all PHP errors (see changelog)
//  error_reporting(E_ALL); 
// //Turn off all error reports
//  error_reporting(0);