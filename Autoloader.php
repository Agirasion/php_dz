<?php

/**
 * ПЕРЕПИСАТЬ АВТОЗАГРУЗЧИК С ИСПОЛЬЗОВАНИЕМ NAMESPACE
 */

namespace app\services;

class Autoloader
{
   public function loadClass($className) :bool
   {
      $className = substr($className, 4); // временно убираем app\

      $filename = realpath($_SERVER['DOCUMENT_ROOT']  . "\\" . $className . '.php');
      if(file_exists($filename)) {
         include $filename;
         return true;
      }
      return false;
   }
}