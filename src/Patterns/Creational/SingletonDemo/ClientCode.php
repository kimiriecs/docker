<?php

namespace App\Patterns\Creational\SingletonDemo;

use App\Patterns\Creational\SingletonDemo\Logger;
use App\Patterns\Creational\SingletonDemo\Config;


class ClientCode {

    public function __construct()
    {
        
    }

/**
 * Клиентский код.
 */
Logger::log("Started!");

// Сравниваем значения одиночки-Логгера.
$l1 = Logger::getInstance();
$l2 = Logger::getInstance();
if ($l1 === $l2) {
    Logger::log("Logger has a single instance.");
} else {
    Logger::log("Loggers are different.");
}

// Проверяем, как одиночка-Конфигурация сохраняет данные...
$config1 = Config::getInstance();
$login = "test_login";
$password = "test_password";
$config1->setValue("login", $login);
$config1->setValue("password", $password);
// ...и восстанавливает их.
$config2 = Config::getInstance();
if ($login == $config2->getValue("login") &&
    $password == $config2->getValue("password")
) {
    Logger::log("Config MySingleton also works fine.");
}

Logger::log("Finished!");

}