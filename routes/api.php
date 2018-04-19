<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$api = app('Dingo\Api\Routing\Router');

//$api->version('v1', function($api) {
//    $api->get('version', function() {
//        return response('this is version v1');
//    });
//});
//
//$api->version('v2', function($api) {
//    $api->get('version', function() {
//        return response('this is version v2');
//    });
//});

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api'
], function($api) {
    // 测试
    $api->post('test', 'TestController@store')
        ->name('api.test.store');
    $api->get('test', 'TestController@index')
        ->name('api.test.index');

    // 图片验证码
    $api->post('captchas', 'CaptchasController@store')
        ->name('api.captchas.store');
});
