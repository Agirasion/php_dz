<?php

namespace app\models;

use app\interfaces\ModelInterface;
use app\services\DB;

/**
 * из абстрактного класса нельза создавать экземпляры,
 * но можно создать наследника
 */
abstract class Model implements ModelInterface
{
   protected $db;
   protected $tablename;

   public function __construct()
   {
      $this->db = new DB();
      $this->tablename = $this->getTableName();
   }

   public function getAll()
   {
      // оптимизированный вариант
      $sql = "SELECT * FROM {$this->tablename}";
      return $this->db->queryAll($sql);
   }

   public function getById(int $id)
   {
      $sql = "SELECT * FROM {$this->tablename} WHERE id = {$id}";
      return $this->db->queryOne($sql);
   }

   public function delete(int $id)
   {
      $sql = "DELETE FROM {$this->tablename} WHERE id = {$id}";
      return $this->db->execute($sql);
   }
}