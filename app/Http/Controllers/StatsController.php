<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
class StatsController extends Controller
{
    
    public function index()

    {
        $allUsers = User::all();
        $tasks_number = [];
        foreach($allUsers as $user){
            $tasks_number[] = 
        
            [
                'name' => $user->name,
               'count'=> count($user->tasks),
        ];
        }
        uasort($tasks_number, function ($a, $b) {
            if ($a['count'] == $b['count']) {
                return 0;
            }
            return ($a['count'] < $b['count']) ? -1 : 1;
        });
        
        $sorted = array_reverse(array_slice($tasks_number, -10, count($tasks_number)));


        
        return view('stats', [
            'users' => $sorted
        ]);
    }
}
