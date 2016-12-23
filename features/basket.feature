Feature: basket
  In order to purchase products
  As a customer
  I must add products to my basket

  Scenario: I add a product to my basket
    When I add 1 product to my basket
    Then I have 1 product in my basket

  Scenario: I add 2 products to my basket
    When I add 1 product to my basket
    And I add 1 more product to my basket
    Then I have 2 products in my basket