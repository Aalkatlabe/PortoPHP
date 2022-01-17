<?php
include "Database.php";


    global $pdo;
    $query = $pdo->prepare("SELECT * FROM project");
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_CLASS, 'Project');

    echo "
    <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>";
    foreach ($request as &$data) {
    echo "
    <a class='dropdown-item' href='" . $data->link . "'>" . $data->name . "</a>";
    }
    echo "</div>";

?>