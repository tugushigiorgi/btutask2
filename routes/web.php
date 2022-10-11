<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

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



    return view('welcome');
});

Route::get('/studentinfo',function (){

    $data=["name"=>"Giorgi",
        "surname"=>"Tugushi",
        "age"=>21,
        "hobby"=>"watch movies",


        ];

    return view('userinfo',["data"=>$data]);
});

Route::get('/studentgrades',function (){

    $data=["subject1"=>97,
        "subject2"=>56,
        "subject3"=>99,
        "subject4"=>49,
        "subject6"=>23,
        "subject7"=>67,
        "subject8"=>34,
        "subject9"=>79,



    ];

    return view('usergrade',["data"=>$data]);
});






Route::post('/add',function () {

    $data = ["message" => "warmatebit ganaxla"];
    return response()->json($data);


});
Route::put('/update',function () {

    $data = ["message" => "warmatebit daemata"];
    return response()->json($data);


});
Route::delete('/delete',function () {

    $data = ["message" => "warmatebit waishala"];
    return response()->json($data);


});



