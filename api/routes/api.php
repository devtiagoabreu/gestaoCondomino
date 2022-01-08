<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Author: Tiago de Abreu - atriostech.com.br/tiago
|
*/

Route::get('/ping', function(){
    return ['pong'=>true];
});
