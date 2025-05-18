let dadosUsuario = {};
let metaSelecionada = null;

document.getElementById("salvarDados").addEventListener("click", () => {
  const peso = parseFloat(document.getElementById("peso").value);
  const altura = parseFloat(document.getElementById("altura").value) / 100;
  const idade = parseInt(document.getElementById("idade").value);
  const sexo = document.getElementById("sexo").value;

  if (!peso || !altura || !idade) return alert("Preencha todos os dados corretamente.");

  const imc = peso / (altura * altura);
  dadosUsuario = { peso, altura, idade, sexo, imc: imc.toFixed(1) };

  alert("Dados salvos com sucesso!");
});

document.querySelectorAll(".goal-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    metaSelecionada = btn.dataset.meta;

    document.querySelectorAll(".goal-btn").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    if (!dadosUsuario.peso) return alert("Por favor, preencha seus dados primeiro.");

    mostrarTreino(metaSelecionada, dadosUsuario);
  });
});

function mostrarTreino(meta, { peso, imc }) {
  const box = document.getElementById("resultadoTreino");

  let titulo = "", descricao = "";

  switch (meta) {
    case "iniciante":
      titulo = "Treino de Iniciantes";
      descricao = "3x por semana • Circuito leve com exercícios básicos para criar hábito e melhorar resistência geral.";
      break;
    case "hipertrofia":
      titulo = "Treino de Hipertrofia";
      descricao = peso < 60 ?
        "Foco em ganho de massa com treinos de força, 3-4x por semana. Grupos musculares: pernas, costas e braços." :
        "Treino de força com cargas moderadas e técnicas de volume. 5x por semana, com descanso ativo.";
      break;
    case "emagrecimento":
      titulo = "Treino para Emagrecimento";
      descricao = peso > 85 ?
        "Cardio + Funcional leve, 4x por semana. Caminhadas, bike e treino intervalado de baixo impacto." :
        "HIIT leve + circuito funcional. 30-40min por sessão, 5x por semana.";
      break;
    case "performance":
      titulo = "Treino para Performance";
      descricao = "Corrida leve + funcional dinâmico. 4-5x por semana com foco em resistência e mobilidade.";
      break;
    case "bem-estar":
      titulo = "Treino para Bem-estar";
      descricao = "Rotina equilibrada de alongamentos, postural e caminhada. Ideal para melhorar sono e disposição.";
      break;
  }

  box.classList.add("active");
  box.innerHTML = `
    <h3>${titulo}</h3>
    <p><strong>IMC:</strong> ${imc}</p>
    <p>${descricao}</p>
  `;
}
