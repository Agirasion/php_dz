<?php

namespace app\models; // расширение имени класса, в дальнейшем в проекте вызов класса выглядит как \Models\Product

class Product extends Model
{
   public $id;
   public $name;
   public $description;
   public $price;
   public $categoryId;

   public function getByCategoryId(int $categoryId)
   {
      $sql = "SELECT * FROM {$this->tablename} WHERE catID = {$categoryId}";
      return $this->db->queryOne($sql);
   }

   public function getTableName()
   {
      return 'products';
   }


}