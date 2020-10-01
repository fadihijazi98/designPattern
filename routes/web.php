<?php

use Illuminate\Support\Facades\Route;
use App\DesignPatterns\Adapter;
use App\DesignPatterns\Template;
use App\DesignPatterns\Strategy;
//RT: run time

Route::get('/', function () {
    dd("Hello with valet, new domain name");
//    return view('welcome');
});

Route::get('/adapter', function () {
    // the main purpose for adapter according my understand it's to make the code compatible
    $book = new Adapter\Book;

    $kindle = new Adapter\Kindle;
    $kindleAdapter = new Adapter\ReaderAdapter($kindle);

    $nick = new Adapter\Nick;
    $nickAdapter = new Adapter\ReaderAdapter($nick);

    $person = new Adapter\RTPerson($book);
    dd($person->read());
});

Route::get('/template', function () {
    // the main purpose for template according my understand it's reduce the duplicate
    $orderType = /*"online";//*/ "net";
    if($orderType === "online")
        $order = new Template\NetRTOrder();
    else
        $order = new Template\StoreRTOrder();
    dd($order->make());
});

Route::get("/strategy", function () {

    $data = "!!{some information to be register}!!";
    $logger = new Strategy\RTAppLogger();

    $fileLogger = new Strategy\FileLogger();
    $databaseLogger = new Strategy\DatabaseLogger();
    $webserviceLogger = new Strategy\WebServiceLogger();

    dd($logger->log($data, $databaseLogger));

});
Route::get('/test', function () {
   return "without dd";
});


Route::get('/colors', function () {
    $color = [
          'blue' => '#e000a'
    ];
    \Illuminate\Support\Facades\Redis::hmset('color.1', $color);
    \Illuminate\Support\Facades\Redis::hgetall('color.1');
});
