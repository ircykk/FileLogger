<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once 'src/FileLogger.php';

use Ircykk\FileLogger;

$log = new FileLogger('logs/', FileLogger:: ERROR, array('extension' => 'txt'));

$log->clear();

$log->info('App works just fine!');
$log->warning('Oops there is a warning...');
$log->error('Error!', array('foo' => 'bar'));
$log->debug('Write to log in debug mode only.');