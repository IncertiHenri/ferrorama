<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Visualização de trens</title>
</head>

<body id="visualizacao-trens">

    <div class="menu">
        <img src="../assets/img/trem.PNG" alt="trem" class="trem-menu">
        <div class="inline-block">
            <div class="inline-flex">
                <h1 class="titulo-menu">ASTRAL</h1>
                <h4 class="titulo2-menu">EXPRESS</h4>
            </div>
            <p class="subtitulo-menu">SISTEMA DE MONITORAMENTO FERROVIÁRIO</p>
        </div>

        <div id="botoes-menu">
            <button class="botao-menu" id="botao-menu-tela-inicial" onclick="telaInicial()"><img
                    class="imagem-botao-menu" src="../assets/img/tela-inicial.png" alt="tela-inicial"> Tela
                inicial</button>
            <button class="botao-menu" id="botao-menu-cadastro-sensores" onclick="visualizacaoSensores()"><img
                    class="imagem-botao-menu" src="../assets/img/cadastro-sensores.png" alt="cadastro-sensores">
                Visualização de Sensores</button>
            <button class="botao-menu-atual" id="botao-menu-cadastro-trens" onclick="visualizacaoTrens()"> <img
                    class="imagem-botao-menu" src="../assets/img/trem-botao.png" alt="trem-botao">
                Visualização de trens
            </button>
            <button class="botao-menu" id="botao-menu-monitoramento" onclick="monitoramentoTempoReal()"><img
                    class="imagem-botao-menu" src="../assets/img/monitoramento-tempo.png" alt="monitoramento">
                Monitoramento em tempo
                Real</button>
            <button class="botao-menu" id="botao-menu-cadastro-relatorios" onclick="cadastroRelatorios()"><img
                    class="imagem-botao-menu" src="../assets/img/cadastro-relatorios.png" alt="cadastro-relatorios">
                Cadastro de
                Relatórios</button>
            <button class="botao-menu" id="botao-menu-usuarios-cadastrados" onclick="usuariosCadastrados()"><img
                    class="imagem-botao-menu" src="../assets/img/usuarios.png" alt="usuarios-cadastrados">
                Usuários cadastrados</button>
        </div>
    </div>


    <script src="../scripts/script.js"></script>
</body>

</html>