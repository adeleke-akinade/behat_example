<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
  
  private $basket;
  
  /**
   * Initializes context.
   *
   * Every scenario gets its own context instance.
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
  public function __construct()
  {
    $this->basket = new Basket();
  }

  /**
   * @When I add :arg1 product to my basket
   */
  public function iAddProductToMyBasket($arg1)
  {
    $this->basket->add($arg1);
  }

  /**
   * @Then I have :arg1 product in my basket
   */
  public function iHaveProductInMyBasket($arg1)
  {
    PHPUnit_Framework_Assert::assertSame(
      intval($arg1),
      $this->basket->count()
    );
  }

  /**
   * @When I add :arg1 more product to my basket
   */
  public function iAddMoreProductToMyBasket($arg1)
  {
    $this->basket->add($arg1);
  }

  /**
   * @Then I have :arg1 products in my basket
   */
  public function iHaveProductsInMyBasket($arg1)
  {
    PHPUnit_Framework_Assert::assertSame(
      intval($arg1),
      $this->basket->count()
    );
  }
  
}
