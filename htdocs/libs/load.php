<?php

//TODO: Implement autoload of class files
//require 'vendor/autoload.php';
include_once 'includes/Session.class.php';
//include_once 'includes/mic.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/UserSession.class.php';
include_once 'includes/WebAPI.class.php';
include_once 'app/post.class.php';
include_once 'includes/REST.class.php';
include_once 'includes/API.class.php';


global $__site_config;
/*
Note: Location of configuration
in lab : /home/user/phtogramconfig.json
in server: /var/www/photogramconfig.json
*/


$wapi = new WebAPI();
$wapi->initiateSession();

function get_config($key, $default=null)
{
    global $__site_config;
    $array = json_decode($__site_config, true);
    //print_r($array[$key]);
    if (isset($array[$key])) {
       // print_r($array);
        return $array[$key];
    } else {
        return $default;
    }
}

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . get_config('base_path'). "_templates/$name.php"; //not consistant.
}

function validate_credentials($username, $password)
{
    if ($username == "sibi@selfmade.ninja" and $password == "password") {
        return true;
    } else {
        return false;
    }
}
ini_set('display_errors',1);
ini_set('display_startip_errors',1);
error_reporting(E_ALL);
