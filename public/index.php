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
        <div class="toggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div id="menu-toggle">
            <ul>
                <li><a href="#">Item de Menu 1</a></li>
                <li><a href="#">Item de Menu 2</a></li>
                <li><a href="#">Item de Menu 3</a></li>
            </ul>
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
        background-color: black;
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

    .toggle {
        width: 30px; /* Ajuste o tamanho conforme necessário */
        height: 20px;
        cursor: pointer;
        position: fixed;
        align-items: center;
        margin-left: 15px;
    }

    .bar {
        width: 100%;
        height: 3px; /* Ajuste a espessura da barra conforme necessário */
        background-color: #333; /* Cor das barras */
        margin: 5px 0;
        transition: 0.4s; /* Animação das barras */
        align-items: center;
        border-radius: 3px;
    }

        /* Animação do ícone hamburger quando clicado */
    .toggle.active .bar:nth-child(1) {
        transform: translateY(6px) rotate(45deg);
    }

    .toggle.active .bar:nth-child(2) {
        opacity: 0;
    }

    .toggle.active .bar:nth-child(3) {
        transform: translateY(-6px) rotate(-45deg);
    }


    .navBarGenero {
        background-color: black;
        width: 100%;
        height: 20%;
        margin-left: 20px;
    }

    .navBarSeries {
        background-color: black;
        width: 100%;
        height: 20%;
        margin-left: 20px;
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