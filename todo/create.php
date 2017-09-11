<?php
/**
 * Created by PhpStorm.
 * User: mayomi
 * Date: 9/3/17
 * Time: 9:40 AM
 */

require_once 'db_connect.php';//bring the database connection file in
if(isset($_POST['submit'])) {
    $title = $_POST['todoTitle'];// grap what was filled in title field
    $description = $_POST['todoDescription']; //grap what was filled in description field

//    function check($string){
//        $string  = htmlspecialchars($string);
//        $string = strip_tags($string);
//        $string = trim($string);
//        $string = stripslashes($string);
//        return $string;
//    }
//
//
//    if(empty($title)){
//        $error  = true;
//        $titleErrorMsg = "Title cannot be empty";
//    }
//    if(empty($description)){
//        $error = true;
//        $descriptionErrorMsg = "Description cannot be empty";
//    }

    //connect to database
    db();
    global $link;
    $query = "INSERT INTO todo(todoTitle, todoDescription, date) VALUES ('$title', '$description', now() )";
    $insertTodo = mysqli_query($link, $query);
    if($insertTodo){
        echo "You added a new todo";
    }else{
        echo mysqli_error($link);
    }

}
?>

<html>
<head>
    <title>Create Todo list</title>
</head>
<body>
<h1>Create Todo List</h1>
<form method="post" action="create.php">
    <p>Todo title: </p>
    <input name="todoTitle" type="text">
    <p>Todo description: </p>
    <input name="todoDescription" type="text">
    <br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

