<?php
/**
 * * PHP Version 7.3
 * created on  17/05/2020 16:16
 * created by Daniel Afonso
 */

namespace App\Controllers;


class WebController extends BaseController
{
    public function index(){
      echo  $this->blade->render('index');
      exit();
    }

}