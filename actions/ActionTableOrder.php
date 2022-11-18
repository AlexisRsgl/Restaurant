<?php
// Add order to a table

if ($_POST) {
    $tableId = $_GET['id'];
    $formData = $_POST;

    if (isset($formData['entrees'])) {
        $db = new PDO('mysql:host=localhost;dbname=starter_restaurant', 'root', 'toor');
        $db->prepare('INSERT INTO commandes (id_tables, id_plats) VALUES (:table, :plat)')
            ->execute(array(':table' => $tableId, ':plat' => $formData['entrees']));
    }
    if (isset($formData['plats'])) {
        $db = new PDO('mysql:host=localhost;dbname=starter_restaurant', 'root', 'toor');
        $db->prepare('INSERT INTO comamandes (id_tables, id_plats) VALUES (:table, :plat)')
            ->execute(array(':table' => $tableId, ':plat' => $formData['plats']));
    }
    if (isset($formData['desserts'])) {
        $db = new PDO('mysql:host=localhost;dbname=starter_restaurant', 'root', 'toor');
        $db->prepare('INSERT INTO commandes (id_tables, id_plats) VALUES (:table, :plat)')
            ->execute(array(':table' => $tableId, ':plat' => $formData['desserts']));
    }

    header('Location: /starter-restaurant-main/table.php');
}

