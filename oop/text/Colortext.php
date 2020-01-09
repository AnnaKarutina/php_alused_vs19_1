<?php

require_once 'Text.php';
class Colortext extends Text
{
  private $color = '';

  /**
   * Colortext constructor.
   * @param string $color
   */
  public function __construct($str, $color = null)
  {
    parent::__construct($str);
    $this->color = $color;
  }
  public function show()
  {
    if($this->color == null) {
      parent::show();
    } else {
      echo '<p style="color: '.$this->color.'">'.$this->getStr().'</p>';
    }
  }

}