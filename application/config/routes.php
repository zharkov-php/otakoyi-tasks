<?php

/**
 * Routes
 */
return [

    // MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],


    'otakoyi' => [
        'controller' => 'otakoyi',
        'action' => 'index',
    ],



    // AdminController
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],

    'admin/tasks' => [
        'controller' => 'admin',
        'action' => 'tasks',
    ],

];