<?php
$request = $_SERVER["REQUEST_URI"];
$path = explode("?", $request);
$path[1] = isset($path[1]) ? $path[1] : null;
$resource = explode("/", $path[0]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Camping</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <?php
    
    $page = "";
    $includeHeaderandfooter = false;
    switch ($resource[1]) {
        case '':
            $page = "./pages/main.php";
            $includeHeaderandfooter = false;
            break;
        case 'introduce':
            $page = "./pages/" . $resource[1] . ".php";
            $includeHeaderandfooter = false;
            break;
        case 'mypage':
            $page = "./pages/" . $resource[1] . ".php";
            $includeHeaderandfooter = false;
            break;
        case 'reservation':
            $page = "./pages/" . $resource[1] . ".php";
            $includeHeaderandfooter = false;
            break;
        case 'login':
            $page = "./pages/" . $resource[1] . ".php";
            break;
        default;
            $page = "./pages/main.php";
            break;
    }
    $includeHeaderandfooter ? include("./components/header.php") : null;
    $includeHeaderandfooter ? include("./components/footer.php") : null;
    include($page);
    ?>
    <script src="./jquery/jquery-3.6.0.js"></script> <!-- Bootstrap보다 위에 있어야 함-->
    <script src="./bootstrap/dist/js/bootstrap.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>