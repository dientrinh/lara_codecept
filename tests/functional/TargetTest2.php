<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class TargetTest2 extends TestCase
{
    public function testDemo2(){
        $tar = new App\Target;
        $tar->age = 6;

        $this->assertEquals(11,$tar->getAgeAttribute(6));
    }
}
