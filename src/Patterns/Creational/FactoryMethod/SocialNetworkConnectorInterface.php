<?php

namespace App\Patterns\Creational\FactoryMethod;


interface SocialNetworkConnectorInterface {

    public function login():void;

    public function logout():void;

    public function createPost(string $postContent):void;

}