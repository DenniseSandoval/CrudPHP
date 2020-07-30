<?php
    include './services/loginService.php';

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $loginService = new LoginService();
        $row = $loginService->login($_POST['username'], $_POST['password']);
        if (isset($row)) {
            if($row['ROL']=='ADM'){
                session_start();
            $_SESSION["user"] = $row;
            header('Location: /CrudPHP/PHPCrude/GestionProductos/index.php');
            }else if($row['ROL']=='USR'){
            session_start();
            $_SESSION["userUser"] = $row;
            header('Location: /CrudPHP/PHPCrude/GestionProductos/icons.php');
            }
            
        } 
    }
?>