<?php

use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/register', function(){
    return member::all();
});
Route::post('/register', function(){
    return member::create([
        'name'=>request('name'),
        'email'=>request('email'),
        'gender'=>request('gender'),
        'phoneNumber'=>request('phoneNumber'),
        'lastname'=>request('lastname'),
        'setyear'=>request('setyear'),
        'deparment'=>request('deparment'),
        'schoolAddress'=>request('schoolAddress'),
        'homeAddress'=>request('homeAddress'),
        'phoneNumber'=>request('phoneNumber'),
            ]);
});

Route::put('/register/{member}', function(member $member){
    $member->update([
        'name'=>request('name'),
        'gender'=>request('gender'),
        'email'=>request('email'),
        'phoneNumber'=>request('phoneNumber'),
    ]);
});

Route::delete('/register/{member}', function(member $member){
    $success=$member->delete();

    return [
        'success' => $success,
    ];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
