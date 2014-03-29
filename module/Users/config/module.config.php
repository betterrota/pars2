<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Users\Controller\user' => 'Users\Controller\UserController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'users' => __DIR__ . '/../view',
        ),
    ),
);