<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\User;

class TestUsers extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        $users = new User();
        $users->name = 'my name';
        $users->email = 'my email';
        $users->password = 'secret';
        $this->assertTrue($users->save());

    }
    public function testUpdate()
    {
        $users = new User();
        $users->name = 'Steve Smith';
        $users->email = 'my email';
        $users->password = 'secret';
        $this->assertTrue($users->update());




        
    }
    public function testDelete() {
        $users = new User();
        $users->name = 'my name';
        $users->email = 'my email';
        $users->password = 'secret';
        $users->save();
        $this->assertTrue($users->delete());
    }
}