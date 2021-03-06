<?php

use Illuminate\Support\Facades\Route;
use App\DesignPatterns\Decorator;
use App\DesignPatterns\Adapter;
use App\DesignPatterns\Template;
use App\DesignPatterns\Strategy;
use App\DesignPatterns\ChainOfResponsibility;
use App\DesignPatterns\Observer;
use App\DesignPatterns\Specification;

Route::get('/', function () {
    dd("Hello with valet, new domain name");
//    return view('welcome');
});

//RT: run time
Route::get('/decorator', function () {
    $basic = new Decorator\BasicInspection();
    $withOil = new Decorator\OilInspection($basic);
//    $withWheels = new Decorator\WheelsInspection($withOil);
    dd("total cost for inspection: " . $withOil->cost() . ", description: " . $withOil->description());
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
    $orderType = /*"online";//*/
        "net";
    if ($orderType === "online")
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

Route::get('/chain', function () {

    $home = new ChainOfResponsibility\HomeStatus();
    $light = new ChainOfResponsibility\Light();
    $alarm = new ChainOfResponsibility\Alarm();
    $lock = new ChainOfResponsibility\Lock();
    $lock->setSuccessor($alarm);
    $alarm->setSuccessor($light);
    //$home->locked = false;
    //$home->alarmOn = false;
    //$home->lightOff = false;
    dd($lock->check($home));

});

Route::get("/observer", function () {
    $login = new Observer\Login();

    $loginHandler = new Observer\LoginHandler();
    $emailNotify = new Observer\EmailNotify();
    $loginReporter = new Observer\LoginReporter();

    $login->attach($emailNotify);
    $login->attach([$loginHandler, $loginReporter, $emailNotify]);
    $login->attach($loginReporter)->attach($emailNotify)->attach($loginHandler);

    /*$login->detach($loginHandler);
    $login->detach($emailNotify);
    $login->detach($loginReporter);*/

    dd($login->fire());
});

Route::get('/specification', function () {
    $customer = new Specification\Customer("gold");
    $customer2 = new Specification\Customer("silver");
    $customer3 = new Specification\Customer("bronze");
    $customer4 = new Specification\Customer("gold");

    $isGold = new Specification\CustomerIsGold($customer);
    //dd($isGold->isSatisfy());

    $repo = new Specification\CustomerRepository([$customer, $customer2, $customer3, $customer4]);
    dd($repo->getCustomerThatSpecify(new Specification\CustomerIsSilver()));
});

Route::get('/colors', function () {
    $color = [
        'blue' => '#e000a'
    ];
    \Illuminate\Support\Facades\Redis::hmset('color.1', $color);
    \Illuminate\Support\Facades\Redis::hgetall('color.1');
});
