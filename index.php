<?php
/**
 * * PHP Version 7.3
 * created on  16/05/2020 19:58
 * created by Daniel Afonso
 */
require_once __DIR__ . '/vendor/autoload.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);


use Codebird\Codebird;
use Jenssegers\Blade\Blade;
//phpinfo();

require_once 'router.php';
//$blade = new Blade('views', 'cache');



//if (isset($_POST["tweet"])) {
//
//
//    Codebird::setConsumerKey('LWZX41Ay59dV46eIcF9wLQ', 'QJCPKDQvJNYwvOwGzzLrLZfX2Dx4oQmLPBXeBSWtc'); // static, see README
//    $cb = Codebird::getInstance();
//
//    $cb->setToken('235287283-eQ7VSYMH5D8qaJpRyYeBzFTlXMO6VVRgMnz2kVMG', 'FvUxJVu2XMNNkSa0irowOvPHqeZKbl0uwE7P8mI44MqlX');
//    $tweet = $_POST['tweet'];
//    $regex = '#https?://twitter\.com/(?:\#!/)?(\w+)/status(es)?/(\d+)#is';
//    preg_match($regex, $tweet, $match);
//    $username = $match[1];
//    $tweetId = $match[3];
//    $tweetInfo = $cb->statuses_show_ID('id=' . $tweetId.'&tweet_mode=extended');
//    $created_date = date('Y-m-d', strtotime($tweetInfo->created_at));
//    echo $blade->render('vancouver', ['tweetUrl' => $tweet, 'tweetInfo' => $tweetInfo,'created_date'=>$created_date]);
////    echo '<h1> usuario ' . $username . '</h1>';
////    echo '<p> texto ' . $tweetInfo['text'] . '</p>';
//} else {
//
//echo $blade->render('index');
//}
//
//
