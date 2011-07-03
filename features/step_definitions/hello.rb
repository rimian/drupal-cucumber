
Given /^I am on the login page$/ do
  visit "http://localhost/user"
end

When /^I visit the home page$/ do
  visit "http://localhost"
end

When /^I submit the login form$/ do
  fill_in "name", :with => "admin"
  fill_in "pass", :with => "cucumber"
  click_button
end

Then /^I should see the website title$/ do
  response_body.should contain("User login")
end

Then /^I should be logged in$/ do
  reload
  response_body.should contain("Log out")
end

