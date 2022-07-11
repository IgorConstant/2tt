<?php require 'routes/core.php'; ?>
<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Igor Henrique Constant - Agência Duetto">
    <meta name="description" content="Com um QG criativo de 400m² impulsionado por nossas 40 cabeças pensantes, desenvolvemos do alfinete ao foguete, fazendo de sua meta o nosso resultado!">
    <meta name="keywords" content="Agência de Marketing, Agência de Publicidade, Itu, São Paulo, Brasil, Endomarketing, Design, Desenvolvimento Web, Marketing Digital, Sites, Logos, Performance e Resultados, Salto, Maior Agência da Cidade, Indaiatuba, Criação de Conteúdo para Facebook e Instagram">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/favicon.png">

    <!-- OgTags -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Duetto - Maior Ainda!">
    <meta property="og:description" content="Com um QG criativo de 400m² impulsionado por nossas 40 cabeças pensantes, desenvolvemos do alfinete ao foguete, fazendo de sua meta o nosso resultado!">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://localhost/Duetto/assets/images/banner-middle.png">
    <meta property="og:image:type" content="image/jpeg">

    <title>Duetto.ag - Maior ainda!</title>

    <base href="<?php echo Request::getBaseUrl(); ?>">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/site.webmanifest">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#5bbad5">


    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php
    extract($_GET);
    require 'pages/' . $page . '.php';
    require 'footer.php';
    ?>


    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="scripts/cookies.js"></script>
</body>

</html>