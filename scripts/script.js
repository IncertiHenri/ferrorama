function alerta() {
    alert("Não é possível excluir sensores com dados registrados");
}

function telaInicial() {
     window.location.href = "../public/tela_inicial.html";
}

function cadastroSensores() {
    window.location.href = "../public/cadastro_sensores_trens.html";
}

function monitoramentoTempoReal() {
    window.location.href = "../public/monitoramento_tempo_real.html";
}

function cadastroRelatorios() {
    window.location.href = "../public/cadastro_relatorios.html";
}

document.getElementById("login").onsubmit = (e) => {

    e.preventDefault();

    let email = document.getElementById("email").value;
    let senha = Number(document.getElementById("senha").value);
    let verificacao = false;

    if (!email || !email.includes("@")) return alert("Informe um E-mail válido!");

    if (!senha) return alert("Informe uma senha válida!");

    let emailCorreto = "xxx@gmail.com"; // teste de email
    let senhaCorreta = 1; // teste de senha

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

















