<?php
if( !empty( $_POST ) ){
	header('Content-disposition: attachment; filename=manifest.json');
    header('Content-type: application/json');
    $file = 'fest.json';
    $arr = array(
        "server_name" => $_POST["server_name"],
        "nice_name" => $_POST["nice_name"],
        "direct_ip" => $_POST["direct_ip"],
        "server_wildcards" => array("placeholder"),
        "social" => array(
            "web" => $_POST["web"],
            "web_shop" => $_POST['web_shop'],
            "web_support" => $_POST["web_support"],
            "twitter" => $_POST["twitter"],
            "tiktok" => $_POST["tiktok"],
            "facebook" => $_POST["facebook"],
            "instagram" => $_POST["instagram"],
            "discord" => $_POST["discord"],
            "youtube" => $_POST["youtube"],
            "teamspeak" => $_POST["teamspeak"]
        ),
        "discord" => array(
            "server_id" => $_POST["server_id"],
        ),
        "brand" => array(
            "primary" => $_POST["primary"],
            "background" => $_POST["background"],
            "text" => $_POST["text"]
        ),
        "yt_trailer" => $_POST["yt_trailer"],
        "user_stats" => $_POST["user_stats"]
    );
    $json_string = json_encode($arr, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    file_put_contents($file, $json_string);
    echo $json_string;
} 
?>