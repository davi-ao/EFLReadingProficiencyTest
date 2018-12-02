<?php
$data = $_POST['data'];

try {
    $conn = new PDO("mysql:host=db.painel.uneb.br;dbname=ingles_geral",
        'ingles_user', 'Db@oegfn_IEl1');
    $sql = "INSERT INTO proficiency VALUES(0, '{$data}')";
    $conn->query($sql);

    echo $sql;
} catch(PDOException $e) {
    echo '{"success": false, "message": ' . $e->getMessage();
}
$conn = null;
