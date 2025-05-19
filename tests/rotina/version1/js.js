const metaSalva = localStorage.getItem("metaSelecionada") || "Hipertrofia";
    const planilha = JSON.parse(localStorage.getItem("planilhaTreino") || '{}');

    document.getElementById("metaAtual").textContent = metaSalva;
    document.getElementById("diasIdeais").textContent =
      metaSalva === "Hipertrofia" ? "5 dias/semana" :
      metaSalva === "Emagrecimento" ? "4-5 dias/semana" :
      "3 dias/semana";
      
    document.getElementById("nivelIntensidade").textContent =
      metaSalva === "Hipertrofia" ? "Alta" :
      metaSalva === "Emagrecimento" ? "Moderada-Alta" :
      "Leve-Moderada";

    function adicionarTreino() {
      const nome = document.getElementById("nomeTreino").value;
      const dia = document.getElementById("diaSemana").value;
      const foco = document.getElementById("foco").value;

      if (!nome) {
        alert("Por favor, dê um nome criativo ao seu treino!");
        return;
      }

      if (!planilha[dia]) planilha[dia] = [];
      planilha[dia].push({ nome, foco });

      document.getElementById("nomeTreino").value = "";
      salvarPlanilha();
      renderizarPlanilha();
      
      // Playful confirmation
      const btn = document.querySelector('.btn-primary');
      btn.textContent = '✅ TREINO ADICIONADO!';
      setTimeout(() => {
        btn.textContent = 'ADICIONAR TREINO';
      }, 2000);
    }

    function renderizarPlanilha() {
      const container = document.querySelector('.day-columns');
      container.innerHTML = "";
      const dias = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];
      
      let hasWorkouts = false;
      
      dias.forEach(dia => {
        const treinos = planilha[dia] || [];
        if (treinos.length === 0) return;
        
        hasWorkouts = true;
        
        const dayDiv = document.createElement("div");
        dayDiv.className = "day-card";
        dayDiv.innerHTML = `<div class="day-title">${dia.replace("-feira", "")}</div>`;
        
        treinos.forEach(treino => {
          const workoutDiv = document.createElement("div");
          workoutDiv.className = "workout-item";
          workoutDiv.innerHTML = `
            <div class="workout-name">${treino.nome}</div>
            <div class="workout-focus">${treino.foco}</div>
          `;
          dayDiv.appendChild(workoutDiv);
        });
        
        container.appendChild(dayDiv);
      });

      if (!hasWorkouts) {
        container.innerHTML = `
          <div class="empty-state">
            <div class="empty-icon">🏋️</div>
            <p>Sua rotina está vazia</p>
            <p>Adicione seu primeiro treino!</p>
          </div>
        `;
      }
    }

    function salvarPlanilha() {
      localStorage.setItem("planilhaTreino", JSON.stringify(planilha));
    }

    function gerarPlanilhaSugestao() {
      Object.keys(planilha).forEach(dia => delete planilha[dia]);
      
      if (metaSalva === "Hipertrofia") {
        planilha["Segunda"] = [{ nome: "Superior A - Peito/Tríceps", foco: "Peito" }];
        planilha["Terça"] = [{ nome: "Superior B - Costas/Bíceps", foco: "Costas" }];
        planilha["Quarta"] = [{ nome: "Inferior - Pernas Completo", foco: "Pernas" }];
        planilha["Quinta"] = [{ nome: "Ombros/Trapézio", foco: "Ombros" }];
        planilha["Sexta"] = [{ nome: "Braços/Abdômen", foco: "Braços" }];
      } else if (metaSalva === "Emagrecimento") {
        planilha["Segunda"] = [{ nome: "HIIT Explosivo", foco: "Cardio" }];
        planilha["Terça"] = [{ nome: "Funcional Superior", foco: "Funcional" }];
        planilha["Quarta"] = [{ nome: "Cardio em Zona 2", foco: "Cardio" }];
        planilha["Quinta"] = [{ nome: "Funcional Inferior", foco: "Pernas" }];
        planilha["Sexta"] = [{ nome: "Circuito Abdômen", foco: "Abdômen" }];
      } else {
        planilha["Segunda"] = [{ nome: "Full Body Básico", foco: "Corpo Inteiro" }];
        planilha["Quarta"] = [{ nome: "Yoga/Alongamento", foco: "Bem-estar" }];
        planilha["Sexta"] = [{ nome: "Treino Leve", foco: "Resistência" }];
      }
      
      salvarPlanilha();
      renderizarPlanilha();
      
      // Playful animation
      const btn = document.querySelector('.btn-secondary');
      btn.textContent = 'ROTINA GERADA!';
      setTimeout(() => {
        btn.textContent = 'Gerar Rotina Automática';
      }, 3000);
      
      // Scroll to results
      document.querySelector('.workout-display').scrollIntoView({
        behavior: 'smooth'
      });
    }

    // Initial render
    renderizarPlanilha();