<?php

namespace App\Patterns\Creational\FactoryMethod;


use App\Patterns\Creational\FactoryMethod\SocialNetworkPoster;


class Client {

    public function createCoolPost(SocialNetworkPoster $postCreator) {

        $post = 'Wery COOL post';

        $postCreator->post($post);

    }

    public function printPost(){

        $loginFirstUser = 'firstUser@gmail.com';
    
        $passwordFirstUser = 'firstUserPassword';
    
        $this->createCoolPost(new FacebookPoster($loginFirstUser, $passwordFirstUser));
    
        $loginSecondUser = 'secondUser@gmail.com';
    
        $passwordSecondUser = 'secondUserPassword';
    
        $this->createCoolPost(new InstagramPoster($loginSecondUser, $passwordSecondUser));
    }

}