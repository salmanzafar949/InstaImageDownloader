<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 11/7/17
 * Time: 12:14 PM
 */


// Set time limit

set_time_limit(0);
ini_set('default_socket_timeout',300);
session_start();

/*----------------Instagram API Keys------------------------*/
define("client_id",'c36befae9a644153a93213757222b032');
define("client_secret",'79607cd5df25456c82987733f53e8d33');
define("redirect_uri",'https://still-lowlands-23712.herokuapp.com/');
define("ImageDir","pics");

function connect_to_insta($url)
{
    $curl = curl_init($url);
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 2
    ));

    $result = curl_exec($curl);
    curl_close($curl);


    return $result;
}

function get_user_id_instagram($username, $access_token)
{
    $url =$url = "https://api.instagram.com/v1/users/search?q='.$username.'&access_token='.$access_token.'";
    $instaInfo = connect_to_insta($url);
    $user_info = json_decode($instaInfo, true);

    //echo $instaInfo;
    //return $user_info['data'][0]['id'];
    echo $user_info['data'][0]['id'];
}