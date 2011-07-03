Feature: Hello
  As a developer 
  I want a headless browser 
  To test the full Drupal stack in cucumber
  
  Scenario: Hello
    Given I bootstrap Drupal
    When I visit the home page
    Then I should see the website title
    
  Scenario: Log in
    Given I am on the login page
    When I submit the login form
    Then I should be logged in