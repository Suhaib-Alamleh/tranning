<?php
//npm install &&npm run dev
//composer dump-autoload




Route::get('/',function (){
    $arr=[];
    $arr['name']='Suhaib';
    $arr['age']=23;
   return view('welcome',$arr);
});
Route::resource('news','NewsController');
//Route::post('news','NewsController@store')->name('news.store');
//Route::get('news/create','NewsController@create')->name('news.create');
//Route::get('news','NewsController@index')->name('news.index');
//Route::get('news/{news}','NewsController@show')->name('news.show');
//Route::get('news/{news}/edit','NewsController@edit')->name('news.edit');
//Route::put('news/{news}','NewsController@update')->name('news.update');
//Route::delete('newsa/{news}','NewsController@destroy')->name('news.destroy');
//Route::resource('news','NewsController');
Route::get('/landing',function (){
    return view('landing');
});
Route::get('/about',function (){
    return view('about');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
