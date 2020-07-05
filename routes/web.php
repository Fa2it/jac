<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',[
        'employee_data'=>[
            ['36 147 247 36', '2020/7/3','2:10','enters'],
            ['36 147 247 36', '2020/7/3','2:11','leaves'],
            ['112 238 185 50', '2020/7/3','2:19','enters'],
            ['36 147 247 36', '2020/7/3','2:19','enters'],
            ['112 238 185 50', '2020/7/3','2:21','leaves'],
            ['112 238 185 50', '2020/7/3','2:22','enters'],
            ['36 147 247 36', '2020/7/3','2:30','leaves'],
            ['36 147 247 36', '2020/7/3','2:48','enters'],
            ['36 147 247 36', '2020/7/3','2:52','leaves'],
            ['36 147 247 36', '2020/7/3','3:00','enters'],
            ['112 238 185 50', '2020/7/3','3:40','enters'],
            ['36 147 247 36', '2020/7/3','3:4','enters'],
            ['112 238 185 50', '2020/7/3','3:29','enters'],
            ['112 238 185 50', '2020/7/3','3:36','enters']
        ]
    ]);
});
