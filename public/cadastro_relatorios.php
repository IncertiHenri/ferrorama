<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Cadastro de Relatórios</title>
</head>

<body id="body_cadastro_relatorios">

    <header>

        <div id="navbar_tela_inicial">
            <p>Olá, Admin</p>

            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">

            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>
        </div>

    </header>

    <main id="main_cadastro_relatorios">

        <div id="relatorios_analiticos">

            <h1 class="titulo_relatorios">Relatórios analíticos</h1>

            <div class="conteiners_pequenos">

                <div class="relatorio_informacao_pequena">

                    <div class="bolinhas_imagem">
                        <img class="imagens_grandes_relatorio" src="../assets/img/velocidade.png" alt="velocidade">
                    </div>

                    <h2>Velocidade média</h2>
                    <p>120Km/h</p>

                </div>

                <div class="relatorio_informacao_pequena">

                    <div class="bolinhas_imagem">
                        <img class="imagens_grandes_relatorio" src="../assets/img/consumo_medio.png" alt="consumo">
                    </div>

                    <h2>Consumo média</h2>
                    <p>75%</p>

                </div>

                <div class="relatorio_informacao_pequena">

                    <div class="bolinhas_imagem">
                        <img class="imagens_grandes_relatorio" src="../assets/img/falha.png" alt="falha">
                    </div>

                    <h2>Falhas detectadas</h2>
                    <p>12</p>

                </div>

            </div>

            <div class="conteiners_medios">

                <div class="relatorio_informacao_media">

                </div>

                <div class="relatorio_informacao_media">

                </div>

            </div>

            <div class="conteiners_grandes">

                <div class="relatorio_informacao_grande">

                </div>

            </div>

        </div>

    </main>

    <script src="../scripts/script.js"></script>

</body>

</html>