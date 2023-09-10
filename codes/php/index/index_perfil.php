<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pedro Lucas Aguiar">
    <link rel="stylesheet" href="../../css/estilogeral.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="icon" href="../../img/icon.svg">
    <title>Home</title>
</head>

<body>
    <div class="BarraDeNavegação">
        <div class="OpçõesBarra"><a id="homeLink" href="#">Home</a></div>
        <div class="OpçõesBarra"><a href="https://www.google.com.br/">Produtos</a></div>
        <div class="OpçõesBarra"><a href="https://www.google.com.br/">Categorias</a></div>
        <div class="OpçõesBarra"><a href="https://www.google.com.br/">Carrinho</a></div>
        <div class="OpçõesBarra"><a id="perfilLink" href="#">Perfil</a></div>
    </div>
    
    <div class="PrimeiraParte">
        <h1 class="animação">Tecnologia e Qualidade Você <br>Encontra aqui</h1>
        <div class="animação2">
            <h3>Crie sua conta para ter acesso a descontos exlcusivos</h3>
        </div>
        <img class="teclado" src="../../img/telcado.png" alt="Teclado"> 
    </div>

    <div class="SegundaParte">
        <h1 class="segundaparteh2">Setups para trabalho</h1>
        <button class="Trabalho">Clique aqui</button>
    </div>
    
    <div class="TerceiraParte">
        <h1>a</h1>
    </div>


    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const emailParam = urlParams.get('email');
        const perfilLink = document.getElementById('perfilLink');
        perfilLink.href = `perfil_usuario.php?email=${encodeURIComponent(emailParam)}`;
    
        function redirectToIndex() {
            window.location.href = `../../html/index.html?email=${encodeURIComponent(emailParam)}`;
        }
        
        const homeLink = document.getElementById('homeLink');
        homeLink.href = `../../html/index.html?email=${encodeURIComponent(emailParam)}`;
        homeLink.addEventListener('click', redirectToIndex);
    </script>

</body>
</html>