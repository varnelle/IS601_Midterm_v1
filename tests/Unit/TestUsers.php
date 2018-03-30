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
        $users = new Users();
        $users->name = 'my name';
        $users->email = 'my email';
        $users->password = 'secret';
        $this->assertTrue($users->save());
    }

    public function testUpdate()
    {
        $users = new Users();
        $users->name = 'Steve Smith';
        $users->email = 'my email';
        $users->password = 'secret';
        $this->assertTrue($users-true);
        $this->assertTrue($users->save());
    }
    public function testDelete() {
        $users = new Users();
        $users->name = 'my name';
        $users->email = 'my email';
        $users->password = 'secret';
        $this->assertTrue($users->save());
        $users->save();
        $this->assertTrue($users->delete());
    }


    public function testCollectionCount() {
        $users = Users::All();
        $recordCount = $users->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);
    }
}