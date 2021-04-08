<!DOCTYPE html>
<html lang="uk">
<head>
    <title>CANDLER</title>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "CSS/styles.css">
    <link rel = "stylesheet" href = "CSS/catalog_style.css">
    <link rel = "stylesheet" href="CSS/item_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
</head>
<body>
<div id="all">
    <?php require "header.php"?>
    <?php

    $page = $_GET['page'];
    $page = trim($page);
    $page = strip_tags($page);
    $chars = array("'","*","\\","/","<",">",";",":","(",")","^","%","#"," ");
    $page = str_replace($chars,"",$page);
    if($page == ""):
        $page = "main";
    endif;
    switch ($page){
        case "paraffin":
            require "pages/Парафін.php";
            break;
        case "base":
            require "pages/База для свічок.php";
            break;
        case "main":
            require "pages/Головна.php";
            break;
    }
    ?>

    <?php require "footer.php"?>
</div>
</body>

</html>