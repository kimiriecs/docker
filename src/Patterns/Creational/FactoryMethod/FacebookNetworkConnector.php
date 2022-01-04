<?php

namespace App\Patterns\Creational\FactoryMethod;


use App\Patterns\Creational\FactoryMethod\SocialNetworkConnectorInterface;


class FacebookNetworkConnector implements SocialNetworkConnectorInterface {

    private $login;

    private $password;

    public function __construct(string $login, string $password) {

        $this->login = $login;

        $this->password = $password;
        
    }

    public function login(): void
    {
        echo "</br></br>Send user credentials: login - $this->login, password - $this->password";
        echo "</br></br>Wellcome to Facebook !!!";
    }

    public function logout(): void
    {
        echo "</br></br>User is logged out from Facebook...";
    }

    public function createPost(string $postContent): void
    {
        echo "</br></br>New Facebook post is created...";
        echo "</br>Post content: $postContent";
    }

}