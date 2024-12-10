<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Ahmed';
    $departments = [
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
     ];
    return view('about', compact('name','departments'));
    /*طريقة اخرى */
 // return view('about')->with(['name' => $name]);
});

Route::post('/about', function () {
     $name =$_POST['name'];
     $departments = [
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
     ];
    return view('about',compact('name','departments'));

});

Route::get('tasks', function () {
   return view('tasks');
});

Route::post('create', function () {
    $task_name = $_POST['name'];
      DB::table('tasks')->insert(['name' => $task_name]);
    return view('tasks');

});