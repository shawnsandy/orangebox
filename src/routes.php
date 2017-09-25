<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */


Route::view('/index', "orangebox::index");

Route::view('/login', "orangebox::login");

Route::view('/register', "orangebox::register");

Route::view('/admin', "orangebox::dashboard");

Route::view('/collections', "orangebox::pages.collections", ["page_class" => "collections-page"]);

Route::view('/product', "orangebox::pages.product", ["page_class" => "product-page"]);

Route::view('/page', "orangebox::pages.page", ["page_class" => "page"]);

Route::view('/about', "orangebox::pages.about", ["page_class" => "about-page"]);
