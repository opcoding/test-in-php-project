Feature: Search pictures
  In order to see pictures
  As a user of Google
  I need to be able to search pictures

  Scenario: Try to search pictures
    Given I am an user of Google
    When I search the term "lolcatz"
    Then I should see pictures of "lolcatz"
