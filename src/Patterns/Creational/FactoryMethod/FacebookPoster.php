<?php

namespace App\Patterns\Creational\FactoryMethod;


use App\Patterns\Creational\FactoryMethod\SocialNetworkPoster;
use App\Patterns\Creational\FactoryMethod\SocialNetworkConnectorInterface;
use App\Patterns\Creational\FactoryMethod\FacebookNetworkConnector;


class FacebookPoster extends SocialNetworkPoster {

    private $login;

    private $password;

    public function __construct(string $login, string $password) {

        $this->login = $login;

        $this->password = $password;
        
    }

    public function getSocialNetwork():SocialNetworkConnectorInterface {

        return new FacebookNetworkConnector($this->login, $this->password);

    }

    public function post(string $postContent):void {

        $network = $this->getSocialNetwork();

        $network->login();

        $network->createPost($postContent);

        $network->logout();

    }

}