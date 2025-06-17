<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Traits\RouteTrait;


Route::view("/welcome","welcome")->name("welcome");



Route::get("/login",[AuthController::class,"login"])->name("login");
  
Route::post("/login",[AuthController::class,"loginPost"])->name("login.post");

Route::get("/",[AuthController::class,"register"])->name("register");

Route::post("/",[AuthController::class,"registerPost"])->name("register.post");

Route::post("/logout",function(){
  Auth::logout();
  return redirect("/");
})->name("logout");


Route::post("/havelogin",[AuthController::class,"login"])->name("havelogin");