<?php

    include 'Connection.php';
    include 'User.php';

    $user = new User();

    
    $user->create(
            [
                "username"=>"root4",
                "password"=>"hawahawaa",
                "email"=>"root4@gmail.com"
            ]
    );

    var_dump($user->all());