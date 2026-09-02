<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Cadastro de sensores</title>
</head>

<body id="cadastro-sensores">
    <header>
        <div id="navbar-tela-inicial">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="Admin" class="imagem-usuario">
            <button id="botao-sair" onclick="sair()">Sair do Sistema</button>
        </div>
        <div class="botao-voltar-">
            <button onclick="voltar()">Voltar</button>
        </div>
    </header>

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
                        class="imagem-botao-menu" src="../assets/img/tela_inicial.png" alt="tela-inicial"> Tela
                    inicial</button>
                <button class="botao-menu-atual" id="botao-menu-cadastro-sensores" onclick="visualizacaoSensores()"><img
                        class="imagem-botao-menu" src="../assets/img/cadastro_sensores.png" alt="cadastro-sensores">
                    Visualização de Sensores</button>
                <button class="botao-menu" id="botao-menu-cadastro-trens" onclick="visualizacaoTrens()"> <img
                        class="imagem-botao-menu" src="../assets/img/trem_botao.png" alt="trem-botao">
                    Visualização de trens
                </button>
                <button class="botao-menu" id="botao-menu-monitoramento" onclick="monitoramentoTempoReal()"><img
                        class="imagem-botao-menu" src="../assets/img/monitoramento_tempo.png" alt="monitoramento">
                    Monitoramento em tempo
                    Real</button>
                <button class="botao-menu" id="botao-menu-cadastro-relatorios" onclick="cadastroRelatorios()"><img
                        class="imagem-botao-menu" src="../assets/img/cadastro_relatorios.png" alt="cadastro-relatorios">
                    Cadastro de
                    Relatórios</button>
                <button class="botao-menu" id="botao-menu-usuarios-cadastrados" onclick="usuariosCadastrados()"><img
                        class="imagem-botao-menu" src="../assets/img/usuarios.png" alt="usuarios-cadastrados">
                    Usuários cadastrados</button>
            </div>
        </div>

    <main id="main-cadastro-sensores">


        <div class="campo-verde-medio-sensores">

            <div class="novos-sensores">
                <div class="borda-verde-flex-titulo">
                <h1 class="titulo-cadastro-sensores">Cadastro de Novos Sensores</h1>
                </div>
                <div class="campo-borda-verde">

                    <div class="flex-column">
                        <h2 class="informacoes-cadastro-sensores">ID do Sensor</h2>
                        <label for="id-sensor"></label>
                        <input type="number" id="id-sensor" class="campo-dados">
                    </div>

                    <div class="flex-column">
                        <h2 class="informacoes-cadastro-sensores">Linha</h2>
                        <label for="linha-cadastro-sensor"></label>
                        <input type="text" id="linha-cadastro-sensor" class="campo-dados">
                    </div>

                    <div class="flex-column">
                        <h2 class="informacoes-cadastro-sensores">Tipo de Dado</h2>
                        <label for="tipo-dado-cadastro-sensor"></label>
                        <select name="tipo-dado" id="tipo-dado-cadastro-sensor" class="campo-dados">
                            <option value="">Selecione o tipo dado</option>
                            <option value="velocidade">Velocidade</option>
                            <option value="falha">Falha</option>
                            <option value="temperatura">Temperatura</option>
                        </select>
                    </div>
                </div>
                <div class="borda-verde-flex">
                    <button onclick="cadastrarSensor()" id="botao-cadastrar-sensor">Cadastrar sensor</button>
                </div>
            </div>
        </div>
        </div>

    </main>

    <script src="../scripts/script.js"></script>
</body>
S

</html>