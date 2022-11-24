
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
    <link rel="icon" href="./favicon/favicon-16x16.png">
    <link rel="stylesheet" href="./css/stylerestrito.css">



    <title>Pokédex</title>
</head>

<body>
    <input type="checkbox" id="ham-menu">
    <label for="ham-menu">
        <div class="hide-des">
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
        </div>

    </label>
    <div class="full-page-green"></div>
    <div class="ham-menu">
        <ul class="centre-text bold-text">
            <a href="pokedex.php">
            <li>Pokédex</li>
        </a>
            <a href="perfil.php">
                <li>Perfil</li>
            </a>
            <a href="saibamais.php">
                <li>Saiba Mais</li>
            </a>
            <a href="sair.php">
                <li>Sair</li>
            </a>

        </ul>
    </div>
    <main>
        <img src="" alt="pokemon" class="pokemon__image">

        <h1 class="pokemon__data">
            <span class="pokemon__number"></span> -
            <span class="pokemon__name"></span>
        </h1>

        <form class="form">
            <input type="search" class="input__search" placeholder="Nome ou Número" required />
        </form>


        <div class="buttons">


            <button class="button btn-prev">&lt; Prev </button>
            <button class="button btn-next"> Prox &gt;</button>
        </div>
        <div class="ChangeShiny">
            <button id="button-shiny" onclick="changeShiny();">⭐</button>
        </div>

        <img src="./images/pokedex.png" alt="pokedex" class="pokedex">

    </main>
    <!-- Main JS-->
    <script defer src="./js/script.js"></script>
</body>

</html>