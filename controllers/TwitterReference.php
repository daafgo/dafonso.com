<?php
/**
 * * PHP Version 7.3
 * created on  17/05/2020 12:57
 * created by Daniel Afonso
 */

namespace App\Controllers;

use Codebird\Codebird;
use Jenssegers\Blade\Blade;
use App\Controllers\BaseController;

class TwitterReference extends BaseController
{

    private $cb;
    /**
     * @var mixed
     */
    private $twitterConfig;

    public function __construct()
    {
        parent::__construct();
        $this->twitterConfig = require __DIR__ . '/../config/twitterConfig.php';
        Codebird::setConsumerKey($this->twitterConfig['consumerKey'], $this->twitterConfig['secretKey']);
        $this->cb = Codebird::getInstance();
        $this->cb->setToken($this->twitterConfig['token'], $this->twitterConfig['secretToken']);

    }

    public function getForm()
    {
        $incrusted=false;
        if (isset($_GET["incrusted"])) {
            $incrusted =true;
        }
        echo $this->blade->render('form',['incrusted'=>$incrusted]);
        exit();
    }

    public function postForm()
    {
        $incrusted=false;
        if (isset($_POST["incrusted"])) {
            $incrusted =true;
        }
        if (isset($_POST["tweet"])) {
            $tweet = $_POST['tweet'];
            $regex = '#https?://twitter\.com/(?:\#!/)?(\w+)/status(es)?/(\d+)#is';
            preg_match($regex, $tweet, $match);
           if (empty($match)){
               $this->getForm();
           }
           if($_POST['lang']=='es'){
               setlocale(LC_ALL,'es_ES');
           }
           $dateFormat = $_POST['dateFormat'];
                    switch ($dateFormat){

               case 2:
                   $format='%e/%m/%Y';
                   break;
               case 3:
                   $format='%Y/%m/%e';
                   break;

               default:
                   $format='%e %B %Y';
                   break;
           }

            $tweetId = $match[3];
            $tweetInfo = $this->cb->statuses_show_ID('id=' . $tweetId . '&tweet_mode=extended');
            $created_date = strftime( $format,strtotime($tweetInfo->created_at));
            echo $this->blade->render('vancouver', ['tweetUrl' => $tweet, 'tweetInfo' => $tweetInfo, 'created_date' => $created_date, 'format'=>$format,'incrusted'=>$incrusted]);
        } else {
            $this->getForm();
            exit();
        }
    }
}