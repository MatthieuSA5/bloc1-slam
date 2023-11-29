<?php 
declare (strict_types=1);

function titre($contente,$subTitle='',$level=1): void {
    echo "<h$level>$contente</h$level>";
    if($subTitle!=null){
        echo "<p class='sub -title'>$subTitle</p>";
    }

}

function get(string $key,$defaultValue=null): mixed{
    return $_GET[$key]??$defaultValue;
}