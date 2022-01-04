<?php

namespace App\Patterns\Creational\Singleton;

class Singleton {

    private static $instances = [];

    protected function __construct() {}

    protected function __clone() {}

    public function __wakeup() {

        throw new \Exception('Can not unserialize a Singleton instance...');
        
    }

    final static function getInstance():static {
        
        $calledClass = get_called_class();

        return self::$instances[$calledClass] ?? self::$instances[$calledClass] = new $calledClass;

    }

    public function someBusinessLogicMethod():void {

        echo 'Parent Singleton Class in action...';

    }

}