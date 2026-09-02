<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Visualização Sensores</title>
</head>

<body id="visualizacao-sensores">


    <header>
        <div id="navbar-tela-inicial">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="Admin" class="imagem-usuario">
            <button id="botao-sair" onclick="sair()">Sair do Sistema</button>
        </div>
    </header>

    <main id="main-visualizacao-sensores">
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


        <div class="fundo-cadastros">
            <div class="cadastros">
                <div class="borda-verde-flex">
                <h2 id="titulo-tabela">Visualização Sensores</h2>
                </div>
                <div class="tabela">
                    <div class="borda-verde">
                    <table>
                        <tr>
                            <td>ID do Sensor</td>
                            <td>Localização</td>
                            <td>Tipo de Dado</td>
                            <td>Ação</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Linha A</td>
                            <td>Velocidade</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Linha B</td>
                            <td>Temperatura</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Linha C</td>
                            <td>Falha</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Linha D</td>
                            <td>Velocidade</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Linha E</td>
                            <td>Temperatura</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>Linha F</td>
                            <td>Falha</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>Linha G</td>
                            <td>Velocidade</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>Linha H</td>
                            <td>Velocidade</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>09</td>
                            <td>Linha I</td>
                            <td>Falha</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Linha J</td>
                            <td>Temperatura</td>
                            <td><button id="botao2">Visualizar</button></td>
                            <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="borda-verde-flex">
                    <button id="botao-sensor-novo">Cadastrar Novo Sensor</button>
                </div>
            </div>
        </div>
    </main>

    <script src="../scripts/script.js"></script>
</body>

</html>