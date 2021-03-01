<?php

/*
1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.
2. Описать свойства класса из п.1 (состояние).
3. Описать поведение класса из п.1 (методы).
4. Придумать наследников класса из п.1. Чем они будут отличаться?
*/

class NewItem
{
  protected $itemID; // ид товара
  protected $itemName; // имя товара
  protected $itemPrice; // цена товара
  protected $itemImg; // картинка товара
  protected $itemText; // описание товара

  function __construct($id, $name, $price, $img, $text)
  {
    $this->itemID = $id;
    $this->itemName = $name;
    $this->itemPrice = $price;
    $this->itemImg = $img;
    $this->itemText = $text;
  }

  function getItemID()
  {
  } // получаем ид товара из БД

  function getIemName()
  {
  } // получаем имя товара из БД

  function getItemPrice()
  {
  } // получаем цену товара из БД

  function getItemImg()
  {
  } // получаем картинку товара из БД

  function getItemText()
  {
  } // получаем описание товара из БД

  function deleteItem()
  {
  } // Удаляем товар на сайте и в БД
}

class EditItem extends NewItem
{
  function editItemName()
  {
  } // редактируем имя товара на сайте и в БД

  function editItemPrice()
  {
  } // редактируем цену товара на сайте и в БД

  function editItemImg()
  {
  } // редактируем картинку товара на сайте и в БД

  function editItemText()
  {
  } // редактируем имя товара на сайте и в БД
}
