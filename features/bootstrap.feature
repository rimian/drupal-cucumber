Feature: Bootstrap Drupal
  As a developer
  I want to bootstrap Drupal in cucumber
  So I can run acceptance tests
  
    Scenario: Bootstrap
      Given I bootstrap Drupal
      When I write a string to var_set
      Then I should see the string in the variables table