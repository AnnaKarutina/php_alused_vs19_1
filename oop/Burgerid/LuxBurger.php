<?php

require_once 'Burger.php';
class LuxBurger extends Burger
{

  /**
   * LuxBurger constructor.
   */
  public function __construct()
  {
    parent::__construct('LuxBurger', ' loomaliha ja peekon', 'valge sai', 12.85);
    parent::valiLisand1('frii-kartul', 2.75);
    parent::valiLisand2('jook', 1.50);
  }

  public function valiLisand1($lisand1, $lisand1Hind)
  {
    echo 'Lisandite juurde lisamine antud burgervalikule pole võimalik<br>';
  }

  public function valiLisand2($lisand2, $lisand2Hind)
  {
    echo 'Lisandite juurde lisamine antud burgervalikule pole võimalik<br>';
  }

  public function valiLisand3($lisand3, $lisand3Hind)
  {
    echo 'Lisandite juurde lisamine antud burgervalikule pole võimalik<br>';
  }

  public function valiLisand4($lisand4, $lisand4Hind)
  {
    echo 'Lisandite juurde lisamine antud burgervalikule pole võimalik<br>';
  }

}