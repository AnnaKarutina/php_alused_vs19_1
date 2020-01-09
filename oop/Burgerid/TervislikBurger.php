<?php

require_once 'Burger.php';
class TervislikBurger extends Burger
{
  // lisandid
  private $tervislikLisand1 = '';
  private $tervislikLisand1Hind = 0.0;
  private $tervislikLisand2 = '';
  private $tervislikLisand2Hind = 0.0;

  /**
   * TervislikBurger constructor.
   */
  public function __construct($liha, $hind)
  {
    parent::__construct('Tervislik', $liha, 'must teraleib', $hind);
  }
  // lisandite valimine
  public function valiTervislikLisand1($tervislikLisand1, $tervislikLisand1Hind){
    $this->tervislikLisand1 = $tervislikLisand1;
    $this->tervislikLisand1Hind = $tervislikLisand1Hind;
  }
  public function valiTervislikLisand2($tervislikLisand2, $tervislikLisand2Hind){
    $this->tervislikLisand2 = $tervislikLisand2;
    $this->tervislikLisand2Hind = $tervislikLisand2Hind;
  }

  public function koostaBurger()
  {
    $burgeriLoppHind = parent::koostaBurger();
    if($this->tervislikLisand1 !== ''){
      $burgeriLoppHind += $this->tervislikLisand1Hind;
      echo 'Lisaks on valitud '.$this->tervislikLisand1.' , mis maksab '.$this->tervislikLisand1Hind.'&euro;<br>';
    }
    if($this->tervislikLisand2 !== ''){
      $burgeriLoppHind += $this->tervislikLisand2Hind;
      echo 'Lisaks on valitud '.$this->tervislikLisand2.' , mis maksab '.$this->tervislikLisand2Hind.'&euro;<br>';
    }
    return $burgeriLoppHind;
  }
}