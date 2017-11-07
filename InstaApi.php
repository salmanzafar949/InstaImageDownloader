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