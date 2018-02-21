<?php
 return array(
     'controllers' => array(
         'invokables' => array(
             'Car\Controller\Car' => 'Car\Controller\CarController',
         ),
     ),

     // The following section is new and should be added to your file
     'router' => array(
         'routes' => array(
             'car' => array(
                 'type'    => 'segment',
                 'options' => array(
                     //The route's ":action" will be either index, add, edit or delete
                     //The ":id" is a value that can be passed to any of and from 
                     //...the above four actions
                     'route'    => '/car[/:action][/:id]',
                     'constraints' => array(
                         //The constraints ensure the action has to be alphanumeric or a hyphen
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         //The constraints also ensure the ID is an integer
                         'id'     => '[0-9]+',
                     ),
                     //The default page that will load on startup
                     'defaults' => array(
                         //Ensures the default controller is "Car"
                         'controller' => 'Car\Controller\Car',
                         //Ensures the default action is the "index" of the car
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'car' => __DIR__ . '/../view',
         ),
     ),
 );