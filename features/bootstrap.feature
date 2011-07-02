Feature: Bootstrap Drupal
  As a developer
  I want to bootstrap Drupal in cucumber
  So I can run acceptance tests
  
    Scenario: Bootstrap
      Given I bootstrap Drupal
      When I write "hello world" to watchdog
      Then I should see "hello world" in the watchdog table