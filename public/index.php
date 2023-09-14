<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NiceFlix</title>
</head>

<body>
    <div class="navBar"> 
    
            
        <img src="../image/Niceflix logo.png" alt="niceflix.png" style="width: 115px; height: 58px; margin-left: 60px;">
        <div class="search-container">
            <input type="text" id="search" placeholder="Buscar...">
            <button type="submit" id="search-button"><i class="fas fa-search"></i></button>
        </div>

    </div>

    <div class="navBarGenero">
        <h2>
         <img src="../image/Genero.png" alt="Genero.png" style="width: 80px; height: 25px"> </h2>
    </div>
    
    <div class="navBarSeries">
       <h2> <img src="../image/series.png" alt="series.pnh" style="width: 80px; height: 25px"> </h2>     
    </div>

</body>


<script>

</script>

<style>
    body {
        margin: 0%;
        background-color: #1C1C1C;
    }
    .navBar {

        background-color: black;
        width: 100%;
        height: 90px;
        text-align: left;
        display: flex;
        justify-content: left;
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

    /* Estilo para a barra de pesquisa */
    .search-container {
        margin-left: 480px;
        display: flex;
        background-color: #333;
        padding: 5px, 2px;
        border-radius: 5px;
    }

    /* Estilo para o campo de entrada de texto */
    #search {
        width: 400px;
        flex-grow: 1;
        padding: 5px;
        border: none;
        background-color: transparent;
        color: white;
        outline: none;
    }

    /* Estilo para o botão de pesquisa */
    #search-button {
        background-color: #C20F08; /* Cor vermelha da Netflix */
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Estilo para o ícone de pesquisa dentro do botão */
    #search-button i {
        color: white;
    }

</style>

</html>