<?php

/**
 * Интерфейс - что-то вроде оглавления, где указываются ТОЛЬКО абстрактные функции,
 *  которые должны быть реализованы
*/

namespace app\interfaces;

interface ModelInterface
{
   public function getAll();

   public function getById(int $id);

   public function delete(int $id);

   public function getTableName();

}