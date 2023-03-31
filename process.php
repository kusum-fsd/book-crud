<?php
include('connect.php');
if (isset($_POST['create'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $edition = mysqli_real_escape_string($conn, $_POST['edition']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
    $cat = mysqli_real_escape_string($conn, $_POST['cat']);

    $sql = "INSERT into `books`(`title`,`author`,`price`,`edition`,`publisher`,`cat`) values('$title','$author','$price','$edition','$publisher','$cat')";

    if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["create"] = "Book Added Sucessfully";
        header("Location:index.php");

        echo '<script>alert("Record Inserted Sucessfully")</script>';
    } else {
        die("Something is wrong...");
    }
}

if (isset($_POST['edit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $edition = mysqli_real_escape_string($conn, $_POST['edition']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
    $cat = mysqli_real_escape_string($conn, $_POST['cat']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "UPDATE `books` SET `title` = '$title',`author`= '$author',`price` = '$price',`edition` = '$edition',
    `publisher`= '$publisher',`cat` = '$cat' WHERE id =$id ";

    if (mysqli_query($conn, $sql)) {

        session_start();
        $_SESSION["update"] = "Book Updated Sucessfully";
        header("Location:index.php");

        echo '<script>alert("Book Updated Sucessfully")</script>';
    } else {
        die("Something is wrong...");
    }
}
