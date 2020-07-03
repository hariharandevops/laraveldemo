<?php

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

Route::get('/num/{slug}',   [
   'uses' => 'NumController@sum'
]);

Route::get('/test/exe',   [
   'uses' => 'IndexController@example'
]);
Route::post('/test/exe',   [
   'uses' => 'IndexController@index'
]);
Route::get('/data',   [
   'uses' => 'IndexController@select'
]);
Route::get('/base',   [
   'uses' => 'IndexController@update'
]);
Route::get('/field',   [
   'uses' => 'IndexController@delete'
]);

Route::get('/test/link',   [
   'uses' => 'NewController@index'
]);

Route::post('/test/link',   [
   'uses' => 'NewController@insert'
]);

Route::get('/pass/{slug}',   [
   'uses' => 'FileController@index'
]);

Route::post('/pass/{slug}',   [
   'uses' => 'FileController@postmethod'
]);

Route::post('/pass',   [
   'uses' => 'FileController@postmethod'
]);

Route::get('/pass',   [
   'uses' => 'FileController@index'
]);

Route::get('/pass/pre/dt',   [
   'uses' => 'FileController@index1'
]);

Route::get('/kk/ggf/ff/f',   [
   'uses' => 'FileController@delete'
]);

Route::get('/text/eve/ts/y',   [
   'uses' => 'FileController@update'
]);
Route::get('/vv/vv',   [
   'uses' => 'JccController@index'
]);
Route::get('/com/pr',   [
   'uses' => 'JccController@postmethod'
]);
Route::post('/com/pr',   [
   'uses' => 'JccController@postmethod2'
]);
Route::get('/ur/dd/',   [
   'uses' => 'ArrayController@postmethod'
]);
Route::post('/ur/dd/',   [
   'uses' => 'ArrayController@postmethod2'
]);

Route::get('/pr/pr/',   [
   'uses' => 'Array1Controller@postmethod'
   ]);
Route::post('/pr/pr/',   [
   'uses' => 'Array1Controller@postmethod2'
]);
Route::get('/rr/rr/',   [
   'uses' => 'Array2Controller@postmethod'
]);
Route::post('/pr/pr/',   [
   'uses' => 'Array2Controller@postmethod2'
]);
Route::get('/gd/dd/',   [
   'uses' => 'RedController@postmethod'
]);
Route::post('/gd/dd/',   [
   'uses' => 'Redcoller@'
]);

Route::get('/row/rr/',   [
   'uses' => 'NewController@postmethod'
]);
Route::post('/row/rr/',   [
   'uses' => 'NewController@postmethod'
]);

    
Route::get('/ajax',   [
   'uses' => 'AjaxController@index'
]); 

Route::post('/ajax/new',   [
   'uses' => 'AjaxController@insert'   
]); 
    
Route::get('/test',   [
   'uses' => 'TestController@index'
]);
Route::post('/test',   [
   'uses' => 'TestController@postmethod'
]);
Route::get('/demo',   [
   'uses' => 'HomeController@click'
]);
Route::post('/demo',   [
   'uses' => 'HomeController@postmethod'
]);

Route::get('/good',   [
   'uses' => 'AppController@index'
]);
Route::post('/good',   [
   'uses' => 'AppController@table'
]);
Route::get('/red',   [
   'uses' => 'WorkController@team'
]);
Route::post('/insert',   [
   'uses' => 'WorkController@index' 
]);
Route::get('/go',   [
   'uses' => 'WorkController@select'
]);
Route::get('/delete/{id}',   [
   'uses' => 'WorkController@delete'
]);
Route::get('/edit/{id}',   [
   'uses' => 'WorkController@update'
]);

Route::get('/prema/server',[
   'uses' => 'ServercakeController@index'
]);
Route::post('/prema/server',[
   'uses' => 'ServercakeController@postmethod'
]);

Route::get('/goodwell',[
   'uses' => 'ServercakeController@select'
]);
Route::get('/green',[
   'uses' => 'ServercakeController@update'
]);

Route::get('/light',[
   'uses' => 'ServercakeController@delete'
]);

Route::get('/mail',   [
   'uses' => 'MailController@index'
]);

Route::get('/table',   [
   'uses' => 'FlowController@index'
]);


Route::get('/ajax/req',   [
   'uses' => 'AjaxController@index'
]);

Route::post('/ajax/req',   [
   'uses' => 'AjaxController@insert'
]);

Route::get('/get/ajax/req',   [
   'uses' => 'AjaxController@select'
]);

Route::get('/read/ajax',   [
   'uses' => 'NumController@ajax'
]);

Route::get('/get/data',   [
   'uses' => 'NumController@ajax'
]);

Route::post('/get/data/sma',   [
   'uses' => 'NumController@insertss'
]);
Route::get('/update/ajax',   [
   'uses' => 'NumController@updateajax'
]);
Route::get('/edit/{id}',   [
   'uses' => 'NumController@click'
]);

Route::get('/create/ins',   [
   'uses' => 'CreateController@result'
]);
Route::post('/insert/cre',   [
   'uses' => 'CreateController@insert'
]);
Route::get('/test/select',   [
   'uses' => 'CreateController@cresel'
]);
Route::get('/test/update',   [
   'uses' => 'CreateController@creupdate'
]);
Route::post('/edit/{id}',   [
   'uses' => 'CreateController@editup'
]);
Route::get('/edit/{id}',   [
   'uses' => 'CreateController@editlin'
 ]);
 Route::get('/delete/{id}',   [
   'uses' => 'CreateController@delete'
 ]);
 Route::post('/data/pass',   [
   'uses' => 'CreateController@editclick'
 ]);
  Route::post('/test/demo',   [
   'uses' => 'CreateController@method'
 ]);
 Route::get('/in', function () {
    return view('develop');
});
Route::get('table/good',   [
   'uses' => 'TableController@request'
 ]);
 Route::post('table/good',   [
   'uses' => 'TableController@postmethod'
 ]);
 Route::get('/insrts',   [
   'uses' => 'TableController@select'
 ]);
 Route::get('/gray',   [
   'uses' => 'TableController@update'
 ]);
  Route::get('/del',   [
   'uses' => 'TableController@delete'
 ]);
 Route::post('/option/{id}',   [
   'uses' => 'TableController@optionup'
]);
 
 Route::get('/lead', function () {
    return view('lead');
});