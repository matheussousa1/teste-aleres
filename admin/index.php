<?php
    define("CONT", "app/controller/");
    define("VIEW", "app/view/");
    define("SITE", "/teste-alares/admin/");
    define("API", "http://127.0.0.1:8000/api/");
        
    global $url, $controller, $action, $classe;
    
    if(!empty($_GET['url'])){
        
        $url = $_GET['url'];
        $url = explode('/', $url);
        
        if(count($url) == 1){
            $url[] = "home";
        }
        
    }else{
        $url = array("home", "home");
    }

    
    $controller = $url[0];
    $action = $url[1];

    if(file_exists(CONT.$controller.".php")){
        
        session_start();
        
        $_SESSION['base'] = SITE;

        include_once (CONT.$controller.".php");
        $classe = new $controller;
        
        
        if(method_exists($classe, $action)){

            $classe->$action();

            if($classe->view != ""){
                //incluir páginas

                include(VIEW.'estrutura/cabecalho.php');
                include(VIEW.'estrutura/menu.php');
                
                $pagina = $classe->view;
                
                include_once(VIEW.$pagina.'.php');

                include(VIEW.'estrutura/rodape.php');
                
            }
            
        }else{
            //incluir páginas
            include(VIEW.'estrutura/cabecalho.php');
            include(VIEW.'estrutura/404.php');
        }
        
    }else{
        //incluir páginas
        include(VIEW.'estrutura/cabecalho.php');
        include(VIEW.'estrutura/404.php');
    }
    
?>