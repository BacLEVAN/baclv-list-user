<?php
Route::get('sample-admin-users', 'BacLV\Simple\SimpleController@index');
Route::get('hello', function(){
    echo 'Hello from the calculator package!';
});
Route::get('test-auth', function(){
    echo 'Kiểm tra đăng nhập!';
})->middleware('auth');

