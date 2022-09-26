<?php

    return [
        '/' => 'Home@index',
        '/user/create' => 'User@create',
        '/user/[a-z0-9]+' => 'User@index'
    ];