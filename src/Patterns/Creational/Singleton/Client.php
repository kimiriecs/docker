<?php

namespace App\Patterns\Creational\Singleton;

use App\Patterns\Creational\Singleton\Singleton;
use App\Patterns\Creational\Singleton\SingletonSubclassFirst;
use App\Patterns\Creational\Singleton\SingletonSubclassSecond;

class Client {

    public function singletonCheck() {

        /**
         *   Check the instances of the parent Singleton Class
         */
        $rootInstance = Singleton::getInstance();

        $rootInstance_2 = Singleton::getInstance();

        if ($rootInstance === $rootInstance_2) {
            
            $rootInstance->someBusinessLogicMethod();
            
            // $rootInstance_2->__wakeup();
            
        }
        
        /**
         *  Check the instances of the first subclass of the Singleton Class
         */
        $firstInstance = SingletonSubclassFirst::getInstance();
        
        $firstInstance_2 = SingletonSubclassFirst::getInstance();

        if ($firstInstance === $firstInstance_2) {
            
            $firstInstance->getSomeValue();

            $firstInstance_2->setSomeValue();

            $firstInstance->getSomeValue();

            // $firstInstance->__wakeup();
            
        }

        /**
         *  Check the instances of the first subclass of the Singleton Class
         */
        $secondInstance = SingletonSubclassSecond::getInstance();

        $secondInstance_2 = SingletonSubclassSecond::getInstance();

        if ($secondInstance === $secondInstance_2) {
            
            $secondInstance->getSomeValue();

            $secondInstance_2->setSomeValue();

            $secondInstance->getSomeValue();

            // $secondInstance->__wakeup();
            
        }
    }

}