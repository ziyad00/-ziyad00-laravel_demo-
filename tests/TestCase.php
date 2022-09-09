<?php

namespace Tests;
use App\Models\Task;
use App\Models\User;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    public function test_user_is_created_test()
    {

     
        $user = User::create([
            'name' => 'ziyad',
            'email' => 'a@a.a',
            'password' => '234',
            'isAdmin' => '1',
     
        ]);

        $this->assertTrue($user != null);
    }
    public function test_task_is_created_test()
    {

        $Adminuser = User::create([
            'name' => 'ziyad',
            'email' => 'a@a.a',
            'password' => '234',
            'isAdmin' => '1',
     
        ]);
        $nonAdmin = User::create([
            'name' => 'ziyad',
            'email' => 'a@a.a',
            'password' => '234',
            'isAdmin' => '0',
     
        ]);
        $task = Task::create([
            'title' => 'ziyad',
            'description' => 'a@a.a',
            'assigned_to_id' => '234',
            'assigned_by_id' => '1',
     
        ]);

        $this->assertTrue($task != null);
    }
    public function test_user_is_admin_test()
    {

        $Adminuser = User::create([
            'name' => 'b',
            'email' => 'b@b.b',
            'password' => '234',
            'isAdmin' => '1',
     
        ]);
  

        $this->assertTrue($Adminuser->isAdmin ==1);
    }
}
