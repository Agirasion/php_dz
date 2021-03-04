<?php

namespace app\services;

class DB
{
   private $config = [
      'driver' => 'mysql',
      'host' => '127.0.0.1', // оно же 'localhost'
      'login' => 'root',
      'password' => '1йфя',
      'dbName' => 'php2',
      'port' => '3307',
      'charset' => 'uft8',
   ];

   private $connection = null;

   public function getConnection()
   {
      // подключаем библиотеку PDO
      $this->connection = new \PDO(
         $this->biuldDSNString(), // вставляем рузультат сборки строки в функции biuldDSNString()
         $this->config['login'],
         $this->config['password'],
      );
      return $this->connection;
   }

   // $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
   protected function biuldDSNString(): string
   {
      return sprintf(
         '%s:dbname=%s;host=%s;port=%s;charset=%s',
         $this->config['driver'],
         $this->config['dbName'],
         $this->config['host'],
         $this->config['port'],
         $this->config['charset'],
      );
   }

   public function queryOne($sql)
   {
      return [];
   }

   public function queryAll($sql)
   {
      return [];
   }

   public function execute($sql)
   {
      return [];
   }
}