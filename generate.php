<?php
if( !empty( $_POST ) ){
    header('Content-disposition: attachment; filename=manifest.json');
    header('Content-type: application/json');
    $file = 'fest.json';
    $arr = array(
        "server_name" => $_POST["server_name"],
        "nice_name" => $_POST["nice_name"],
        "direct_ip" => $_POST["direct_ip"],
    );
    if (isset($_POST['server_wildcards']) && $_POST['server_wildcards'] !== '') {
        $arr['server_wildcards'] = explode(',', $_POST['server_wildcards']);
    }
    if (isset($_POST['supported_languages']) && $_POST['supported_languages'] !== '') {
      $arr['supported_languages'] = explode(',', $_POST['supported_languages']);
  }
    if (isset($_POST['web']) && $_POST['web'] !== '') {
        $arr['social']['web'] = $_POST['web'];
    }
    if (isset($_POST['web_shop']) && $_POST['web_shop'] !== '') {
        $arr['social']['web_shop'] = $_POST['web_shop'];
    }
    if (isset($_POST['web_support']) && $_POST['web_support'] !== '') {
        $arr['social']['web_support'] = $_POST['web_support'];
    }
    if (isset($_POST['twitter']) && $_POST['twitter'] !== '') {
        $arr['social']['twitter'] = $_POST['twitter'];
    }
    if (isset($_POST['tiktok']) && $_POST['tiktok'] !== '') {
        $arr['social']['tiktok'] = $_POST['tiktok'];
    }
    if (isset($_POST['facebook']) && $_POST['facebook'] !== '') {
        $arr['social']['facebook'] = $_POST['facebook'];
    }
    if (isset($_POST['instagram']) && $_POST['instagram'] !== '') {
        $arr['social']['instagram'] = $_POST['instagram'];
    }
    if (isset($_POST['discord']) && $_POST['discord'] !== '') {
        $arr['social']['discord'] = $_POST['discord'];
    }
    if (isset($_POST['youtube']) && $_POST['youtube'] !== '') {
        $arr['social']['youtube'] = $_POST['youtube'];
    }
    if (isset($_POST['teamspeak']) && $_POST['teamspeak'] !== '') {
        $arr['social']['teamspeak'] = $_POST['teamspeak'];
    }
    if (isset($_POST['primary']) && $_POST['primary'] !== '') {
        $arr['brand']['primary'] = $_POST['primary'];
    }
    if (isset($_POST['background']) && $_POST['background'] !== '') {
        $arr['brand']['background'] = $_POST['background'];
    }
    if (isset($_POST['text']) && $_POST['text'] !== '') {
        $arr['brand']['text'] = $_POST['text'];
    }
    if (isset($_POST['city']) && $_POST['city'] !== '') {
        $arr['location']['city'] = $_POST['city'];
    }
    if (isset($_POST['country']) && $_POST['country'] !== '') {
        $arr['location']['country'] = $_POST['country'];
    }
    if (isset($_POST['country_code']) && $_POST['country'] !== '') {
        $arr['location']['country'] = $_POST['country'];
    }
    if (isset($_POST['yt_trailer']) && $_POST['yt_trailer'] !== '') {
        $arr['yt_trailer'] = $_POST['yt_trailer'];
    }
    if (isset($_POST['user_stats']) && $_POST['user_stats'] !== '') {
        $arr['user_stats'] = $_POST['user_stats'];
    }
    $json_string = json_encode($arr, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    file_put_contents($file, $json_string);
    echo $json_string;
} 
?>