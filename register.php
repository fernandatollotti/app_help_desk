<?php

    $file = fopen('file.hd', 'a');

    $title = str_replace('#', '-', $_POST['title']);
    $category = str_replace('#', '-', $_POST['category']);
    $description = str_replace('#', '-', $_POST['description']);

    $text = $_SESSION['id'] . '#' . $_POST['title'] . '#' . $_POST['category'] . '#' . $_POST['description'] .PHP_EOL;
    echo $text;

    fwrite($file, $text);

    fclose($file);

    header('Location: call.php');


?>