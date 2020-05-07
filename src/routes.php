<?php
Route::get('list-user', 'BacLV\Sample\UsersController@index');
Route::get('hello-user', function(){
    echo 'Hello from the calculator package!';
});
Route::get('test-auth-user', function(){
    echo 'Kiểm tra đăng nhập!';
})->middleware('auth');