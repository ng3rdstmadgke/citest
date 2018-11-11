<?php
declare(strict_types=1);

require_once "lib/Functions.php";
use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase {
  public function testSayHello() {
    $this->assertEquals("Hello", Functions::sayHello());
  }
}
