<?php


class Text
{
  private $str   = '';

  /**
   * Text constructor.
   * @param string $str
   */
  public function __construct($str)
  {
    $this->str = $str;
  }

  /**
   * @return string
   */
  public function getStr()
  {
    return $this->str;
  }

  /**
   * @param string $str
   */
  public function setStr($str)
  {
    $this->str = $str;
  }



  public function show(){
    echo $this->str.'<br>';
  }
}