<?php

namespace App\Patterns\Creational\FactoryMethod;


use App\Patterns\Creational\FactoryMethod\SocialNetworkConnectorInterface;


class InstagramNetworkConnector implements SocialNetworkConnectorInterface {

    private $login;

    private $password;

    public function __construct($login, $password) {

        $this->login = $login;

        $this->password = $password;
        
    }

    public function login(): void
    {
        echo "</br></br>Send user credentials: login - $this->login, password - $this->password";
        echo "</br></br>Wellcome to Instagram !!!";
    }

    public function logout(): void
    {
        echo "</br></br>User is logged out from Instagram...";
    }

    public function createPost(string $postContent): void
    {
        echo "</br></br>New Instagram post is created...";
        echo "</br>Post content: $postContent";
    }

}