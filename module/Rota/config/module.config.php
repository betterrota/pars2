<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Rota\Controller\Rota' => 'Rota\Controller\RotaController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'rota' => __DIR__ . '/../view',
        ),
    ),
);