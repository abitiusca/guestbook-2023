<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/guestbook' => [[['_route' => 'app_guestbook_index', '_controller' => 'App\\Controller\\GuestbookController::index'], null, ['GET' => 0], null, true, false, null]],
        '/guestbook/new' => [[['_route' => 'app_guestbook_new', '_controller' => 'App\\Controller\\GuestbookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\GuestbookController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/guestbook/([^/]++)/(?'
                    .'|edit(*:34)'
                    .'|delete(*:47)'
                    .'|([^/]++)/approve(*:70)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:106)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_guestbook_edit', '_controller' => 'App\\Controller\\GuestbookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_guestbook_delete', '_controller' => 'App\\Controller\\GuestbookController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        70 => [[['_route' => 'app_guestbook_approve', '_controller' => 'App\\Controller\\GuestbookController::approve'], ['id', 'active'], ['GET' => 0], null, false, false, null]],
        106 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
