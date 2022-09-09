<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('postmethod'))
{
    function postmethod($url = "", $data = [])
    {
        $ch = curl_init();
        $headers = array("Authorization: ".APIKEY);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close ($ch);

        return $response;
    }   
}