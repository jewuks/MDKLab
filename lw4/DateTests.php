<?php
require_once 'lw1/Date.php';
use PHPUnit\Framework\TestCase;

class DateTests extends TestCase
{
    private $dateone;
    private $datetwo;

    protected function setUp(): void
    {
        $this->dateone = new Date(21,6,2022);
        $this->datetwo = new Date(9,6,2022);
    }
    public function testMinusDay()
    {
        $this->assertEquals(19, $this->dateone->minusDay(2));
    }

    public function testDiffDay()
    {
        $this->assertEquals(12, $this->dateone->diffday($this->datetwo));
    }

}

?>
