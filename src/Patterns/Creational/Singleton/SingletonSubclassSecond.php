<?php

namespace App\Patterns\Creational\Singleton;

class SingletonSubclassSecond extends Singleton {

    public function getSomeValue():void {
        
        echo '</br>getting some value...  from SingletonSubclassSecond';
        
    }

    public function setSomeValue():void {
        
        echo '</br>setting some value... to SingletonSubclassSecond';

    }

}