<?php


class ItemWeight extends AbstractItem
{
  private $weight;

  public function __construct($name, $price, $weight)
  {
    parent::__construct($name, $price);
    $this->weight = $weight;
  }

  public function getTotalCost()
  {
    return parent::getTotalCost() * $this->weight; // цена умноженная на вес
  }
}