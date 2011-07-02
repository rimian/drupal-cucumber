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
      self::markPending();
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