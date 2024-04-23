<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;
use Illuminate\Http\Request;

class RedisController extends Controller
{
    public function set(){
        
        Redis::set('name', 'Taylor');
        
    }
    // public function show(string $id): View
    // {
    //     return view('user.profile', [
    //         'user' => Redis::get('user:profile:'.$id)
    //     ]);
    // }

}
