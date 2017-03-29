<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Default',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Default/home.ctp)...
     */
    /*$routes->connect('/', ['controller' => 'Default', 'action' => 'display', 'home']);*/

    $routes->connect(
        '/',
        ['controller' => 'Pages', 'action' => 'display', 'home'],
        ['_name' => 'accueil']
    );

    $routes->connect(
        '/actualites-evenement',
        ['controller' => 'Pages', 'action' => 'display', 'evenements'],
        ['_name' => 'actualites_evenements']
    );

    $routes->connect(
        '/contacts',
        ['controller' => 'Pages', 'action' => 'display', 'contacts'],
        ['_name' => 'contacts']
    );

    $routes->connect(
        '/actualites-publications',
        ['controller' => 'Pages', 'action' => 'display', 'publications'],
        ['_name' => 'actualites_publications']
    );

    $routes->connect(
        '/sorry',
        ['controller' => 'Pages', 'action' => 'display', 'sorry'],
        ['_name' => 'sorry']
    );


    $routes->connect(
        '/partners',
        ['controller' => 'Pages', 'action' => 'display', 'partners'],
        ['_name' => 'partenaires']
    );


    $routes->connect(
        '/links',
        ['controller' => 'Pages', 'action' => 'display', 'links'],
        ['_name' => 'liens']
    );

    $routes->connect(
        '/credits',
        ['controller' => 'Pages', 'action' => 'display', 'credits'],
        ['_name' => 'credits']
    );

    $routes->connect(
        '/login',
        ['controller' => 'Users', 'action' => 'login'],
        ['_name' => 'login']
    );

    $routes->connect(
        '/ajouter-utilisateur',
        ['controller' => 'Users', 'action' => 'add', ['routeClass' => 'Cake\Routing\Route\InflectedRoute']],
        ['_name' => 'ajouter-utilisateur']
    );

    $routes->connect(
        '/liste',
        ['controller' => 'Users', 'action' => 'index'],
        ['_name' => 'liste-utilisateurs']
    );

    $routes->connect(
        '/logout',
        ['controller' => 'Users', 'action' => 'logout'],
        ['_name' => 'logout']
    );
//    $routes->fallbacks('InflectedRoute');
});

Router::prefix('admin', function ($routes){

    $routes->fallbacks('DashedRoute');
});

Router::prefix('amazonie', function ($routes){
    $routes->connect(
        '/',
        ['controller' => 'Default', 'action' => 'home'],
        ['_name' => 'amazoniehome']
    );
    $routes->fallbacks('InflectedRoute');
});

Router::prefix('afrique', function ($routes){
    $routes->connect(
        '/',
        ['controller' => 'Default', 'action' => 'home'],
        ['_name' => 'afriquehome']
    );

    $routes->fallbacks('InflectedRoute');
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
