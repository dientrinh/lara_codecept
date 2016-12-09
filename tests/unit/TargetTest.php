<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class TargetTest extends TestCase
{
    public function testDemo(){
        $tar = new App\Target;
        $tar->age = 6;

        $this->assertEquals(11,$tar->getAgeAttribute(6));
    }
}
