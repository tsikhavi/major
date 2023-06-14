<?php
function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

$uri = ($_SERVER["REQUEST_URI"]);
function renderUri($uri){

    if ($uri === '/'|| '/index' || '/home'){
        require_once 'index.php';}
        elseif ($uri === '/about'){
            require_once 'about.php';
        }elseif ($uri === '/contact'){
            require_once 'contact.php';
        }elseif ($uri === '/portfolio'){
            require_once 'portfolio.php';
        }elseif ($uri === '/services'){
            require_once 'services.php';
        }elseif ($uri === '/SEO'){
            require_once 'seo.php';
        }elseif ($uri === '/cases'){
            require_once 'cases.php';
        }
        else{
            require_once 'views/partials/404.php';
        }
        
}




?>

