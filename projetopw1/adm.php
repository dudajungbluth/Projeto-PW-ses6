<?php

$adm = array("user" => "AdminXppd2023", "senha" => "*P@ssw0rd!");

$output = array();

if (isset($_POST["username"]) && isset($_POST["password"])) {

    $user = $_POST["username"];
    $senha = $_POST["password"];

    if ($adm["user"] === $user && $adm["senha"] === $senha) {
        $output["mensagem"] = "Login realizado com sucesso";
        $output["error"] = "permit";
    } else {
        $output["mensagem"] = "Credenciais incorretas";
        $output["error"] = "error";
    }

    echo json_encode($output);

    
}
?>

