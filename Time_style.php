
<?php
function theme(){
    date_default_timezone_set("Asia/Yekaterinburg");
    $i = date('H');
    if (($i > 8) && ($i < 20)) {
        echo <<<HTML
    <style>
    body{
    background-color: darkgray;
    }
</style>
HTML;
    } else {
        echo <<<HTML
    <style>
    body{
    background-color: black;
    }
    .container{
    border-bottom: 5px solid darkgray;
    }
    .img{
    border: 3px solid white;
    }
</style>
HTML;
    }
}
theme();
?>