<?php
/**
 * * PHP Version 7.3
 * created on  17/05/2020 16:13
 * created by Daniel Afonso
 */

namespace App\Controllers;


use Jenssegers\Blade\Blade;

class BaseController
{
    public $blade;

    public function __construct()
    {
        $this->blade = new Blade('views', 'cache');
    }

}