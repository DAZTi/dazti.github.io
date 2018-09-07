<?php
$file = fopen("config/_counter.txt","r");{
    $count = fgets($file,1000);
    $count+=1 ;
    fclose($file);
}

$file = fopen("config/_counter.txt", "w");{
    fwrite($file, $count);
    fclose($file);
}

?>