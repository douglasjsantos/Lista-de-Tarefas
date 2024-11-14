<?php


use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('tasks', TasksController::class);

Route::resource('users', UserController::class);




