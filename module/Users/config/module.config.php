<?php
return array(
    'controllers' => array(
        'invokables' => array(
           'Users\Controller\Index' =>'Users\Controller\IndexController',

        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'users' => __DIR__ . '/../view',
        ),
    ),
);