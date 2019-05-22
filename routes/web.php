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
Route::get('Anh',function() {
	return 'Hello Anh';
});
Route::get('Anh/submit',function() {
	echo "<input type = 'text'><br>";
	echo "<input type = 'submit'>";
});
//truyen tham so
Route::get('hang/{hoa}',function($hoa){
	echo "hai ".$hoa;
})->where(['hoa'=>'[1-9a-zA-Z]+']);

Route::get('Route1',['as'=>'MyRoute',function(){
	echo "hai every one  some people";
}]);

Route::get('Route2', function(){
	echo 'Hai';
})->name('MyRoute2');

Route::get('Goiroute',function(){
	return redirect()->route('MyRoute2');
});

//group of route

Route::group(['prefix'=>'MyGroup'], function(){
	Route::get('route1', function(){
		echo "Route1";
	});
	Route::get('route2', function(){
		echo "Route2";
	});

});
Route::group(['prefix'=>'Mygroup2'], function(){
	Route::get('Route12', function(){
		echo 'Route12';
	});
	Route::get('Route22', function(){
		echo 'Route22';
	});
});

Route::get('Gethello','Mylogin@getHello');

Route::get('Getchuoi/{ten}','Mylogin@Getroute');

Route::get('goi','Mylogin@GetData');

//nhan du lieu voi request
Route::get('getForm', function(){
	return view('postForm');
});
Route::post('postform',['as'=>'postForm','uses'=>'Mylogin@postForm']);

Route::get('setcookie','Mylogin@setCookie');
Route::get('getcookie','Mylogin@getCookie');

Route::get('uploadFile', function(){
	return view('postFile');
});

Route::post('postFile',['as'=>'postFile', 'uses'=>'Mylogin@postFile']);
?>