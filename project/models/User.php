<?php

namespace app\models;

class User extends Model
{
   public $name;
   public $email;

   public function getByLogin(string $login)
   {
      $sql = "SELECT * FROM {$this->tablename} WHERE login = {$login}";
      return $this->db->queryOne($sql);
   }

   public function getTableName()
   {
      return 'users';
   }


}