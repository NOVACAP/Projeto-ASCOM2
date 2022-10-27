<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
    <!-- RESET -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/reset.css'?>">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- LINKS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css'?>">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/styless.css'?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/dropdown.css'?>">

</head>

<body> 

    <!--nav azul-->
    <header class="p-3 text-white">
        <div class="d-flex flex-row-reverse">
            <div class="p-2 d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark text-white" aria-label="Search"
                        style="width: 197px !important;">
                    <i class="align-items-center fa fa-search icon branco"></i>
                </form>
                <div id="oi" class="p-2">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/flickr (1)-ai.svg'?>" alt="ÍconeBolinha">
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/instagram (1)-ai.svg'?>" alt="ÍconeInstagram">
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/facebook (1)-ai.svg'?>" alt="ÍconeFacebook">
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/twitter (1)-ai.svg'?>" alt="Ícone">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
        </div>
    </header>
    <!--fim da nav azul-->