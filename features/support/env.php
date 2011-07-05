<?php
/**
 * @file
 *
 * Environment settings for cuke4php
 */


require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

/**
 * Bootstrap Drupal
 */
chdir('drupal');
define('DRUPAL_ROOT', getcwd());
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
require_once('includes/bootstrap.inc');
return drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
