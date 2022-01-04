<?php

namespace App\Patterns\Creational\FactoryMethod;


abstract class SocialNetworkPoster {

    abstract public function getSocialNetwork():SocialNetworkConnectorInterface;

    public function post(string $postContent):void {

        $network = $this->getSocialNetwork();

        $network->login();

        $network->createPost($postContent);

        $network->logout();

    }

}