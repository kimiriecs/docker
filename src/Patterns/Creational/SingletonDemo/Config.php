<?php

namespace App\Patterns\Creational\SingletonDemo;

use App\Patterns\Creational\SingletonDemo\MySingleton;

/**
 * Применение паттерна Одиночка в хранилище настроек – тоже обычная практика.
 * Часто требуется получить доступ к настройкам приложений из самых разных мест
 * программы. Одиночка предоставляет это удобство.
 */
class Config extends MySingleton
{
    private $hashmap = [];

    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}