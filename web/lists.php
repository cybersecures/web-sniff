<?php
    $files = scandir("./v1");
    echo json_encode(array_slice($files,2));
?>