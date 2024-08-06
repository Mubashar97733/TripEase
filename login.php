<?php 

if(isset($_REQUEST['hr'])){
    $alert = $_REQUEST['hr'];
    echo '<h1>'.$alert.'</h1>';
}