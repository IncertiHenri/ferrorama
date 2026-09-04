function alerta() {
    alert("Não é possível excluir sensores com dados registrados");
}

function telaInicial() {
    window.location.href = "../public/tela_inicial.html";
}

function visualizacaoSensores() {
    window.location.href = "../public/visualizacao_sensores.html";
}

function monitoramentoTempoReal() {
    window.location.href = "../public/monitoramento_tempo_real.html";
}

function cadastroRelatorios() {
    window.location.href = "../public/cadastro_relatorios.html";
}

function usuariosCadastrados() {
    window.location.href = "../public/usuarios_cadastrados.html";
}

function visualizacaoTrens() {
    window.location.href = "../public/visualizacao_trens.html";
}

document.getElementById("login").onsubmit = (e) => {
    e.preventDefault();

    let email = document.getElementById("email").value;
    let senha = Number(document.getElementById("senha").value);
    let verificacao = false;

    if (!email || !email.includes("@")) return alert("Informe um E-mail válido!");

    if (!senha) return alert("Informe uma senha válida!");

    // Teste de email
    let emailCorreto = "xxx@gmail.com";

    // Teste de senha
    let senhaCorreta = 1;

    if (email === emailCorreto && senha === senhaCorreta) {
        verificacao = true;

        window.location.href = "public/tela_inicial.html";

        alert("Login realizado com sucesso!");
    } else {
        return alert("E-mail ou senha incorretos!");
    }
}

let formularioCadastro = document.getElementById("cadastro");

if (formularioCadastro) {
    formularioCadastro.onsubmit = (e) => {
        e.preventDefault();

        let nome = document.getElementById("nome").value;
        let email = document.getElementById("email").value;
        let senha = document.getElementById("senha").value;

        if (!nome) {
            return alert("Informe seu nome!");
        }

        if (!email || !email.includes("@")) {
            return alert("Informe um e-mail válido!");
        }

        if (!senha) {
            return alert("Informe uma senha!");
        }

        alert("Cadastro realizado com sucesso!");

        window.location.href = "index.html";
    };
}

















