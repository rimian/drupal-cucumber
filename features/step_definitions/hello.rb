

When /^I visit the home page$/ do
  visit "http://localhost"
end

Then /^I should see the website title$/ do
  response_body.should contain("User login")
end
