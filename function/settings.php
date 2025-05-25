<?php
/*==========> INFO 
 * CODE     : BY ZLAXTERT
 * SCRIPT   : HOTMAIL ACCOUNT CHECKER
 * VERSION  : V3.1
 * TELEGRAM : t.me/zlaxtert
 * BY       : DARKXCODE
 */
$settings = array(
    "mode_proxy" => "off", // on or off
    "proxy_list" => "proxy.txt", // proxy list (ex: proxy.txt) (FORMAT: proxy:port)
    "proxy_Auth" => "PASTE YOUR PROXY AUTH HERE", // proxy password (ex: username:pass)
    "type_proxy" => "http", // http , https or socks
    "apikey"     => "apikey.txt", // apikey file (default: apikey.txt)
    "API"        => "API.txt", // Dont change this
);

$mode_proxy = $settings["mode_proxy"];
$proxy_list = $settings["proxy_list"];
$proxy_pwd  = $settings["proxy_Auth"];
$proxy_type = $settings["type_proxy"];
$iniApikey  = $settings["apikey"];
$thisAPIs   = $settings["API"];
