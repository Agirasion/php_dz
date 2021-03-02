<?php

abstract class AbstractItem implements InterfaceIndex_l2
{
  private $name;
  private $price;

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName()
  {
    return $this->name; // возвращаем переданное в массиве имя
  }

  public function getTotalCost ()
  {
    return $this->price; // возвращаем цену без всяких условий
  }

}