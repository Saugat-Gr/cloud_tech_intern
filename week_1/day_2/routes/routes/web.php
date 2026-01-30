<?php

use Illuminate\Support\Facades\Route;

$name = "Closure Property.";

Route::get('/', function () use ($name){
    return "Hello $name";
});