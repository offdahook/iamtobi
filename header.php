<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="icon" type="image/x-icon" href="/stock/favicon.ico">

    <script derefer src="js/app.js"></script>

    <title>i am tobi - playground</title>
</head>


<nav class="navbar" id="navbar">
    <div id="burger-menu" class="burger big-text" onclick="toggleResponsiveMenu()"><i id="burger-icon" class="fa-sharp fa-solid fa-bars"></i></div>
    
    <div id="main-nav">
        <ul class="main-nav">
            <a href="/"><li class="nav-item">Über mich</li></a>
            <a href="blog.php"><li class="nav-item">Blog</li></a>
        </ul>
    </div>
    <div id="logo" id="logo">
        <a href="/"><img src="stock/logos/iamtobi.png" alt="OFFDAHOOK-Logo in Desktop-Version"></a>
    </div>
    <div id="alt-nav">
        <ul class="social-nav">
            <a href="#" onclick="toggleSearchbar()"><li class="social-nav-item"><i class="fa-solid fa-magnifying-glass"></i></li></a>
            <a href="login.php"><li class="social-nav-item"><i class="fa-solid fa-user"></i></li></a>
        </ul>
    </div>  
</nav>
<div id="search-bar" class="hidden">
    <form action="search.php">
        <input type="search" autocomplete="off" name="search" id="search" placeholder="Gib deinen Suchbegriff ein...">
            <div id="closeSearch"><a href="#" onclick="toggleSearchbar()"><i class="fa-solid fa-xmark big-text"></i></a></div>
        </input>
    </form>
</div>

<body>

