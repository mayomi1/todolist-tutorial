<?php
/**
 * Created by PhpStorm.
 * User: mayomi
 * Date: 9/11/17
 * Time: 1:28 PM
 */
require_once "db_connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    db();
    global $link;
    $query = "DELETE FROM todo WHERE id = '$id'";
    $delete = mysqli_query($link, $query);
    if($delete){
        echo 'Todo successfully deleted';
    }
}