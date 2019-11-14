<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NerdBrutos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="NerdBruto" description="">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link href="" rel="stylesheet">        
        <link rel="shortcut icon" href="" type="image/png">
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body>
       
        <?php
            $url = (isset($_GET['url'])) ? $_GET['url']:'home.php';
            $url = array_filter(explode('/',$url));
            var_dump($url);
        
        $file = $url[0].'.php';
        
        if(is_file($file)) {
            include $file;
        }else{
            include 'home.php';
        }
        ?>
        
        <script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>