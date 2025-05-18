const pesoInput = document.getElementById("peso");
const alturaInput = document.getElementById("altura");
const idadeInput = document.getElementById("idade");
const sexoInput = document.getElementById("sexo");
const imcOutput = document.getElementById("imcResultado");
const nivelOutput = document.getElementById("nivelUsuario");

function calcularIMC(peso, alturaCm) {
  const altura = alturaCm / 100;
  return (peso / (altura * altura)).toFixed(1);
}

function definirNivel(imc, idade) {
  if (imc < 18.5) return "Muito magro";
  if (imc < 24.9) return idade < 40 ? "Iniciante Saudável" : "Boa forma";
  if (imc < 29.9) return "Sobrepeso";
  if (imc < 34.9) return "Obesidade Grau I";
  return "Alto risco";
}

function atualizarIMCENivel() {
  const peso = parseFloat(pesoInput.value);
  const altura = parseFloat(alturaInput.value);
  const idade = parseInt(idadeInput.value);

  if (peso && altura && idade) {
    const imc = calcularIMC(peso, altura);
    const nivel = definirNivel(imc, idade);

    imcOutput.textContent = imc;
    nivelOutput.textContent = nivel;
  }
}

[pesoInput, alturaInput, idadeInput].forEach(input =>
  input.addEventListener("input", atualizarIMCENivel)
);

document.getElementById("salvarDados").addEventListener("click", () => {
  const peso = parseFloat(pesoInput.value);
  const altura = parseFloat(alturaInput.value);
  const idade = parseInt(idadeInput.value);
  const sexo = sexoInput.value;

  if (!peso || !altura || !idade) return alert("Preencha todos os dados corretamente.");

  const imc = calcularIMC(peso, altura);
  const nivel = definirNivel(imc, idade);

  const dados = { peso, altura, idade, sexo, imc, nivel };
  localStorage.setItem("dadosUsuario", JSON.stringify(dados));
  alert("Dados salvos com sucesso!");
});

window.addEventListener("DOMContentLoaded", () => {
  const dadosSalvos = JSON.parse(localStorage.getItem("dadosUsuario"));
  if (dadosSalvos) {
    pesoInput.value = dadosSalvos.peso;
    alturaInput.value = dadosSalvos.altura;
    idadeInput.value = dadosSalvos.idade;
    sexoInput.value = dadosSalvos.sexo;
    imcOutput.textContent = dadosSalvos.imc;
    nivelOutput.textContent = dadosSalvos.nivel;
  }
});

document.querySelectorAll(".goal-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    document.querySelectorAll(".goal-btn").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const meta = btn.dataset.meta;
    const dados = JSON.parse(localStorage.getItem("dadosUsuario"));
    if (!dados) return alert("Preencha e salve seus dados primeiro.");

    mostrarTreino(meta, dados);
  });
});

function mostrarTreino(meta, { peso, imc }) {
  const box = document.getElementById("resultadoTreino");
  let titulo = "", descricao = "";

  switch (meta) {
    case "iniciante":
      titulo = "Treino de Iniciantes";
      descricao = "Circuito leve com 3 treinos por semana. Foco em postura, execução e hábito.";
      break;
    case "hipertrofia":
      titulo = "Treino de Hipertrofia";
      descricao = peso < 60 ?
        "Foco em ganho de massa com treinos de força. 3-4x/semana com ênfase em pernas e braços." :
        "Treino de volume com pesos moderados, 5x por semana. Divisão por grupos musculares.";
      break;
    case "emagrecimento":
      titulo = "Treino para Emagrecimento";
      descricao = peso > 85 ?
        "Funcional leve + caminhada rápida 4x por semana. Baixo impacto, alto gasto calórico." :
        "HIIT + cardio leve. 30-40min por sessão, 5x/semana. Foco em queima e resistência.";
      break;
    case "performance":
      titulo = "Treino para Performance";
      descricao = "Corrida + funcional dinâmico. 5x por semana com foco em resistência e mobilidade.";
      break;
    case "bem-estar":
      titulo = "Treino para Bem-estar";
      descricao = "Alongamento, treino postural e caminhada leve. Ideal para sono e disposição.";
      break;
  }

  box.classList.add("active");
  box.innerHTML = `
    <h3>${titulo}</h3>
    <p><strong>IMC:</strong> ${imc}</p>
    <p>${descricao}</p>
  `;
}
