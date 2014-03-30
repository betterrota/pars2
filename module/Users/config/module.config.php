
<?php
return array(
'controllers' => array(
'invokables' => array(
'Users\Controller\Index' =>
'Users\Controller\IndexController',
),
),

'router' => array(
'routes' => array(
'users' => array(
'type' => 'Literal',
'options' => array(
'route' => '/users',
'defaults' => array(
'__NAMESPACE__' =>
'Users\Controller',
'controller' => 'Index',
'action' => 'index',
),
),
'may_terminate' => true,
'child_routes' => array(
'default' => array(
'type' => 'Segment',
'options' => array('/[:controller[/:action]]',
'constraints' => array(
'controller' => 'Users\Controller\Index',
                        'action'     => 'index',

),
    'defaults' => array(
  

),
),
),
),
),
),
),


'view_manager' => array(
'template_path_stack' => array(
'users' => __DIR__ . '/../view',
),
),
);