<?php
namespace App;

use  PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    private string $FName = "Name";
    private string $LName = "Last Name";
    private $birthday = "04/04/2004";
    private $person;

    private function getFName()
    {
        return $this->FName;
    }

    private function getLName()
    {
        return $this->LName;
    }

    private function BDay()
    {
        return date_create($this->birthday);
    }

    /**
    * @depends getFName
    * @depends getLName
    * @depends getBDay
    */
    private function setPerson($FN, $LN, $BD)
    {
        $person = new Person($FN, $LN, $BD);
    }

    private function getP()
    {
        return $this->person;
    }

    /**
     * @depends getFName
     */
    public function testFName($FN)
    {
        $this->assertSame("Name", $FN);
    }

    /**
     * @depends getLName
     */
    public function testLName($LN)
    {
        $this->assertSame("Last Name", $LN);
    }

    /**
     * @depends getBDay
     */
    public function testBDay($BD)
    {
        $this->assertSame(date_create()->setDate(2004,4,4), $BD);
    }

    /**
    * @depends getFName
    * @depends getLName
    * @depends getBDay
    */
    public function testMethod($FN, $LN, $BD)
    {
        $this->assertSame("<script>console.log('Name\tLast Name\t04-04-2004');</script>", Out::getPerson($FN,$LN,$BD));
    }
}