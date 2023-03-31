<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  include("connect.php");
  $sql = "DELETE  from books WHERE id = $id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_query($conn, $sql)) {

    echo '<script>alert("Deleted Sucessfully")
    window.location.href="index.php";</script>';
  } else {
    die("Something is wrong...");
  }
}
