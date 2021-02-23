<?php

class A {
  public function foo() {
    static $x = 0; // так как переменная статична, она будет увеличиавться для каждого класса по отдельности
    echo ++$x;
  }
}
class B extends A { // при наследовании переменна х переназначается для нового класса
}
$a1 = new A;
$b1 = new B;
$a1->foo(); // ответ 1 т.к. происходит первое увеличение на 1 в классе а
$b1->foo(); // ответ 1 т.к. происходит первое увеличение на 1 в классе б
$a1->foo(); // ответ 2 т.к. происходит второе увеличение на 1 в классе а
$b1->foo(); // ответ 2 т.к. происходит второе увеличение на 1 в классе б

