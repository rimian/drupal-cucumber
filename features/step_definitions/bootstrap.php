<?php
/**
 * @file
 *
 * Step definitions for bootstrap Drupal
 *
 * Write something to Drupal's vars table then check it exists. 
 * Trash it after.
 */

class BootstrapSteps extends CucumberSteps {
  
  private $var_key = 'cucumber_bootstrap_test';
  
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
  * When /^I write a string to var_set$/
  **/
  public function stepIWriteAStringToVar_set() {
    variable_set($this->var_key, 'hello world');
  }


  /**
  * Then /^I should see the string in the variables table$/
  **/
  public function stepIShouldSeeTheStringInTheVariablesTable() {
    $this->assertEquals(variable_get($this->var_key, NULL), 'hello world');
    variable_del($this->var_key);
  }
}