<?php
function track(){
    static $count =0;
    $count++;
    echo $count;
}
track();
track();
?>