<?php


class ItemDigital extends AbstractItem
{
  public function getTotalCost()
  {
    return parent::getTotalCost() / 2; // цена вдвое меньше штучного товара
  }
}