<?php
/**
 * * PHP Version 7.3
 * created on  17/05/2020 12:52
 * created by Daniel Afonso
 */


/**
 * The "router.php" file enhances Repair-Pedia's current routing system by allowing you to create dynamic routes in an
 * easy way, pointing directly to class methods. In this way the MVC model can be implemented in a more agile way.
 * @author Moisés Lodeiro Santiago <moises.lodeiro@ultebra.eu>
 * @see https://github.com/bramus/router
 */

// Include Router libraries
use Bramus\Router\Router;

$router = new Router();
// Get current route base (country and language)

// Routes based on /country/language/
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404, route not found!';
});


//

$router->setNamespace('\App\Controllers');
// Public routes
$router->get('/','WebController@index');
$router->get('/reference', 'TwitterReference@getForm');
$router->post('/reference', 'TwitterReference@postForm');



// Run!
$router->run(function () {
    // Here goes the post middleware. Consider to include an exit function in case the new url matches
    exit();
});

// Ensure that when router ends, the response code is 200. Then each page should control the header status and throw
// a 404 in case of that
if (!headers_sent()) {
    header('X-PHP-Response-Code: 200', true, 200);
}
