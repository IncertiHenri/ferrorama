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
        alert("Login realizado com sucesso!");
        // tem que adicionar -> "" window.location.href = "nome da prx pag" "";
    } else {
        return alert("E-mail ou senha incorretos!");
    }
}