<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowProfileController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/go', function () {
    return "salom";
});


//Route::get('/go',function (){
//    return '<h1>hello</h1>';
//});


//Route::get('/{action}/{name?}',function ($action, $name = null){   //ikkita routing hosil qilish
//    return $action.$name;
//});




/*

Route::get('/user/{name}',function ($id){   //ID dan keyin ? belgisini qo'ymasak qiymatni aniq berishimiz keark bo'ldi NOT FOUND qaytaradi
    echo 'ID  '.$id;
});



Route::get('/user/{name?}',function ($id = null){   //iddan keyin ? belgisini qo'yish kerak va qiymat qaytarish uchun null qo'yamiz
    echo 'ID  '.$id;
});  //where global tarzda elon qildik
*/




/*
Route::get('/search',function (Request $request){  //request orqali olinadigan data
    $name = $request->get('name','Ali');
    $age = $request->get('age',19);
//    return $name;
    return $name." ismli foydalanuvchi ".$age." yoshda";
});



Route::get('/search',function (Request $request){  //request orqali olinadigan data
    return $request -> all();
});

*/







/*

Route::group(['prefix' => 'dashboard'],function (){  //dashbaord setion qayta qayta yozmasligimiz u-n gurppalab olamiz
    Route::get('/users',function (){
        return "Users Dashboard";
    });
    Route::get('/statistics',function (){
        return "Statistics Dashboard";
    });
});

*/




/*

Route::get('user/{id?}',[UserController::class, 'show']);



Route::get('show/{id}',ShowProfileController::class);
//bir metodli kontrollerda ishlatiladi bunda addelni file ochiladi show kabi qiymat berilmaydi


*/



//VIEW
//Route::get('/view/{name?}', [\App\Http\Controllers\ViewController::class, 'view']);


//list
//Route::get('/users', [\App\Http\Controllers\UserController::class, 'list']);




//app
Route::get('/app',[\App\Http\Controllers\AppController::class, 'app']);
Route::get('/members',[\App\Http\Controllers\AppController::class, 'members']);
Route::get('/about',[\App\Http\Controllers\AppController::class, 'about']);
