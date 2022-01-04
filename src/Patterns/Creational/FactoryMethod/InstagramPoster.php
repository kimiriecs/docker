<?php

namespace App\Patterns\Creational\FactoryMethod;


use App\Patterns\Creational\FactoryMethod\SocialNetworkPoster;
use App\Patterns\Creational\FactoryMethod\SocialNetworkConnectorInterface;
use App\Patterns\Creational\FactoryMethod\InstagramNetworkConnector;


class InstagramPoster extends SocialNetworkPoster {

    private $login;

    private $password;

    public function __construct(string $login, string $password) {

        $this->login = $login;

        $this->password = $password;
        
    }

    public function getSocialNetwork():SocialNetworkConnectorInterface {

        return new InstagramNetworkConnector($this->login, $this->password);

    }

    public function post(string $postContent):void {

        $network = $this->getSocialNetwork();

        $network->login();

        $network->createPost($postContent);

        $network->logout();

    }

}