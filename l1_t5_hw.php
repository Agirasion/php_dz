<?php

class A {
  public function foo() {
    static $x = 0;
    echo ++$x;
  }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // 1, обращение идет к одному и тому же классу
$a2->foo(); // 2, обращение идет к одному и тому же классу
$a1->foo(); // 3, обращение идет к одному и тому же классу
$a2->foo(); // 4, обращение идет к одному и тому же классу

echo "<br>";

class B {
  public function foo() {
    static $x = 0; // т.к. переменная статична, в новом экземпляре объекта она будет привязана к новому объекту, точнее к функции нового объекта
    echo ++$x;
  }
}
class C extends A {
}
$b1 = new B();
$c1 = new C();
$b1->foo(); // 1 т.к. идет первое увеличение в классе б
$c1->foo(); // 1 т.к. идет первое увеличение в классе с
$b1->foo(); // 2 т.к. идет второе увеличение в классе б
$c1->foo(); // 2 т.к. идет второе увеличение в классе с

/** КОММЕНТАРИИ
 * Чем задание код задания 5 отличается от задания 6?
 */
