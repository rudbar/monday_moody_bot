<?php

use Codebird\Codebird;

require 'venodr/autoload.php';

Codebird::setConsumerKey('KEY', 'SECRETKEY'); //KEY and SECRET are provided by twitter at apps.twitter.com when you register you app

$cb = Codebird::getInstance();
$cb->setReturnFormat(CODEBIRD_RETURNFORMAT_ARRAY);

$cb->setToken('AccessToken', 'AccessTokenSecret'); // AccessToken and AccessTokenSecret the same as with KEY and SECRETKEY

$mentions = $cb->statuses_mentionsTimeLine();

var_dump($mentions);

if(!isset($mentions[0]))
{
    return;
}

$tweets = [];

foreach($mentions as $index => $mention)
{
    if(isset($mention['id']))
    {   
        $tweets[] = 
        [
            'id' => $mention['id'],
            'user_screen_name' => $mention['user']['screen_name'],
            'text' => $mention['text'],
        ];
    }
}

$tweetsText = array_map(function($tweet) {
    return $tweet['text'];
}, $tweets);

var_dump($tweetsText);
