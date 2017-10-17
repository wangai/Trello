<?php
 
use wangai\Trello;
 
class TrelloTest extends PHPUnit\Framework\TestCase {
 
  public function testTrelloIsWorking()
  {
    $trello = new Trello;
    $this->assertTrue($trello->isWorking());
  }
 
}