<?php
/**
 * @file
 *
 * Step definitions for bootstrap Drupal
 */

class BootstrapSteps extends CucumberSteps {
  /**
  * Given /^I bootstrap Drupal$/
  **/
  public function stepIBootstrapDrupal() {
    chdir('drupal');
    define('DRUPAL_ROOT', getcwd());
    $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
    require_once('includes/bootstrap.inc');
    return drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
  }


  /**
  * When /^I write "([^"]*)" to watchdog$/
  **/
  public function stepIWriteParameterToWatchdog($arg1) {
      self::markPending();
  }


  /**
  * Then /^I should see "([^"]*)" in the watchdog table$/
  **/
  public function stepIShouldSeeParameterInTheWatchdogTable($arg1) {
      self::markPending();
  }
}