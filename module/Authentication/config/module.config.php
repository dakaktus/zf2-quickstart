<?php
return array(
    'di' => array(


        'instance' => array(
            'alias' => array(
                'authentication' => 'Authentication\Controller\IndexController',
            ),
/*            'Authentication\Controller\IndexController' => array(
                'parameters' => array(
                    'authenticationTable' => 'Authentication\Model\AuthenticationTable',
                ),
            ),
            'Authentication\Model\AuthenticationTable' => array(
                'parameters' => array(
                    'adapter' => 'Zend\Db\Adapter\Adapter',
                )
            ),
            'Zend\Db\Adapter\Adapter' => array(
                'parameters' => array(
                    'driver' => array(
                        'driver' => 'Pdo',
                        'dsn'            => 'mysql:dbname=zf2tutorial;hostname=localhost',
                        'username'       => 'rob',
                        'password'       => '123456',
                        'driver_options' => array(
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                        ),
                    ),
                )
            ),
*/
            'Zend\View\Resolver\TemplatePathStack' => array(
                'parameters' => array(
                    'paths'  => array(
                        'authentication' => __DIR__ . '/../view',
                    ),
                ),
            ),

            // Setup for router and routes
            'Zend\Mvc\Router\RouteStack' => array(
                'parameters' => array(
                    'routes' => array(
                        'default' => array(
                            'type'    => 'Zend\Mvc\Router\Http\Segment',
                            'options' => array(
                                'route'    => '/[:controller[/:action]]',
                                'constraints' => array(
                                    'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                ),
                                'defaults' => array(
                                    'controller' => 'Authentication\Controller\IndexController',
                                    'action'     => 'index',
                                ),
                            ),
                        ),
                        'authentication' => array(
                            'type' => 'Zend\Mvc\Router\Http\Literal',
                            'options' => array(
                                'route'    => '/authentication',
                                'defaults' => array(
                                    'controller' => 'Authentication\Controller\IndexController',
                                    'action'     => 'index',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);