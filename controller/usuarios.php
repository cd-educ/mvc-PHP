<?php

    require_once("model/usuarios.php");

    class usuarios {

        function login(){

            if(isset($_POST["username"]) && isset($_POST["password"])){

                if(!empty($_POST["username"]) && !empty($_POST["pasword"])){

                    if(UsuariosDAO::existeUsuario($_POST["username"], $_POST["password"])){

                        $_SESSION["username"] = $_POST["username"];
                        require_once("views/home.php");

                    } else {

                        $_SESSION["msg"] = "El usuario no existe";
                        require_once("views/login.php");

                    }
                
                } else {

                    $_SESSION["msg"] = "Campos incompletos";
                    require_once("views/login.php");
    
                }
            
            } else {

                $_SESSION["msg"] = "Campos incompletos";
                require_once("views/login.php");

            }

        }

        function registrar(){

            if(isset($_POST["username"]) && isset($_POST["password"])){

                if(!empty($_POST["username"]) && !empty($_POST["pasword"])){

                    if(!UsuariosDAO::usuarioOcupado($_POST["username"])){

                        UsuariosDAO::crearUsuario($_POST["username"],$_POST["password"]);
                        $_SESSION["username"] = $_POST["username"];
                        require_once("views/home.php");
    
                    } else {
    
                        $_SESSION["msg"] = "El usuario ya existe";
                        require_once("views/login.php");
    
                    }

                } else {

                    $_SESSION["msg"] = "Campos incompletos";
                    require_once("views/login.php");

                }

            } else {

                $_SESSION["msg"] = "Campos incompletos";
                require_once("views/login.php");

            }

        }

    }

?>