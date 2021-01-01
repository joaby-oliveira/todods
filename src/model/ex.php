<?php
    include 'Database.php';
    $db = new Database();
    $dbh = $db->createConnection();
    $sql = 'SELECT * FROM users;';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Array
(
    [0] => Array
        (
            [id] => 1
            [name] => jojo
            [username] => jojo
            [birthdate] => 2020-11-24
            [sex] => M
            [email] => dasdds@mfma.com
            [senha] => sdkajskdjlaksd
        )

) -->