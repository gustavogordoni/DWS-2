<?php
function autenticado(){
    if (isset($_SESSION["email"])) {
        return true;
    } else {
        return false;
    }
}

function isAdmin(){
    if (isset($_SESSION["tipoUser"]) && $_SESSION["tipoUser"] == "admin") {
        return true;
    } else {
        return false;
    }
}

function tipoUsuario(){
    return $_SESSION["tipoUser"]; 
}

function nome_usuario(){
    return $_SESSION["nome"]; 
}

function email_usuario(){
    return $_SESSION["email"];
}

function id_usuario(){
    return $_SESSION["idUsuario"];
}

function redireciona ($pagina = null){

    if(empty($pagina)){
        $pagina = "index.php";
    }
    header("Location: " . $pagina);
}