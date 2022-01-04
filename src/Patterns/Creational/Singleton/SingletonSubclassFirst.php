<?php

namespace App\Patterns\Creational\Singleton;

/**
 * 
 */
class SingletonSubclassFirst extends Singleton {

    public function getSomeValue():void {
        
        echo '</br>getting some value...  from SingletonSubclassFirst';

    }

    public function setSomeValue():void {
        
        echo '</br>setting some value... to SingletonSubclassFirst';

    }

}