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

function get_user_id_instagram($username,$token)
{
    $url =$url = "https://api.instagram.com/v1/users/search?q=".$username."&access_token=".$token;
    $instaInfo = connect_to_insta($url);
    $user_info = json_decode($instaInfo, true);

    //echo $instaInfo;
    return $user_info['data'][0]['id'];
    //echo $user_info['data'][0]['id'];
}


function print_user_images($user_id, $token)
{
    $url="https://api.instagram.com/v1/users/".$user_id."/media/recent/?access_token=".$token."&count=5";
    $imagesofuser = connect_to_insta($url);
    $imagesinfo = json_decode($imagesofuser,true);

    // parse throgh images/results
    foreach ($imagesinfo['data'] as $items)
    {
        $imageurl = $items['images']['low_resolution']['url'];
        echo '<img src=" '. $imageurl. '">'."<br>";
        save_images($imageurl);

    }

}

function save_images($image_url)
{
   //echo $image_url."<br>";
   $image_name = basename($image_url);
   // check to validate image with same name exist or not

    $destination = ImageDir.$image_name;
    file_put_contents($destination,file_get_contents($image_url));

   //echo $image_name."<br>";
}

function download_images($image_url)
{
    // Define the name of image after downloaded
    header('Content-Disposition: attachment; filename="image.jpg"');

// Read the original image file
    readfile('file.jpg');
}