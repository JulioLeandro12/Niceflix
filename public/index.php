<?php 
    $var1 = "Gêneros";
    $var2 = "Series";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NiceFlix</title>
</head>

<body>
    <div class="navBar"> 
        <img src="../image/Niceflix logo.png" alt="niceflix.png" style="width: 100px; height: 50px;">
    </div>

    <div>
    <h2 class="navBarGenero">
         <?= $var1 ?> </h2>
    </div>
    
    <div class="navBarSeries">
        <h2> <?= $var2 ?></h2>    
    </div>

</body>


<script>
</script>

<style>
    body {
        margin: 0%;
        background-color: black;
    }
    .navBar {
        background-color: black;
        width: 100%;
        height: 100px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .navBarGenero {
        background-color: black;
        width: 100%;
        height: 20%;
    }
    .navBarSeries {
        background-color: black;
        width: 100%;
        height: 20%;
    }

    h2 {
        color: red;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 25px;
        text-shadow: 3px 3px 3px black;
        }
</style>

</html>