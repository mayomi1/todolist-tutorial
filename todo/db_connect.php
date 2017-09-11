<?php
/**
 * Created by PhpStorm.
 * User: mayomi
 * Date: 9/10/17
 * Time: 10:18 AM
 */

// connect to database
function db(){
    global $link;
    $link = mysqli_connect("localhost", "root", "", "todolist") or die("couldn't connect to database");
    return $link;
}
