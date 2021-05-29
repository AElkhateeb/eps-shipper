<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'slider' => [
        'title' => 'Sliders',

        'actions' => [
            'index' => 'Sliders',
            'create' => 'New Slider',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'slider' => [
        'title' => 'Sliders',

        'actions' => [
            'index' => 'Sliders',
            'create' => 'New Slider',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'activated' => 'Activated',
            'is_published' => 'Is published',
            'link1' => 'Link1',
            'link2' => 'Link2',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];