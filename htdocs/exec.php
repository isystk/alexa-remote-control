<?php
header("Content-Type: text/html; charset=utf-8");
if(!isset($_GET["status"])) {

    if(!isset($_GET["text_tts"])) {
        die("message not specified");
    }

    $device=$_GET["device_name"];
    $message=$_GET["text_tts"];
    
    if(isset($_GET["device_name"])) {
        $output = shell_exec("sh alexa_remote_control.sh -d '$device' -e speak:'$message'");
    } else {
        $output = shell_exec("sh alexa_remote_control.sh -e speak:'$message'");
    }

    echo $output;
} else {
    $output = shell_exec("sh alexa_remote_control.sh -a");
    if (strpos($output,"Steffen")!==false) {
        echo "ok";
    } else {
        echo $output;
    }
}
?>
