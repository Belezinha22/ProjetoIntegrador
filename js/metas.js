
document.addEventListener("click", function (e) {
    const item = e.target.closest(".dropdown-item[data-status]");
    if (!item) return;

    e.preventDefault();
    const status = item.getAttribute("data-status");

    // acha o dropdown atual
    const dropdown = item.closest(".dropdown");
    if (!dropdown) return;

    // atualiza o texto do botão do dropdown
    const btn = dropdown.querySelector(".status-dropdown-btn");
    if (btn) btn.textContent = status;

    // grava num input hidden dentro do mesmo dropdown (ou modal)
    const hidden = dropdown.querySelector("input.status-selecionado");
    if (hidden) hidden.value = status;
});

// =========================
// Função para salvar meta
// =========================
function salvarMeta(plano, status) {
    const hoje = new Date();
    const dataInicio = hoje.toISOString().split("T")[0];
    const dataFim = ""; // vai como vazio -> back converte para NULL

    // fallback: se não vier status, usa "Em andamento"
    const statusFinal = status && status.trim() ? status.trim() : "Em andamento";

    fetch("../php/meta.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body:
            "descricao=" + encodeURIComponent(plano) +
            "&status=" + encodeURIComponent(statusFinal) +
            "&data_inicio=" + encodeURIComponent(dataInicio) +
            "&data_fim=" + encodeURIComponent(dataFim)
    })
    .then(response => response.text())
    .then(data => {
        iziToast.show({
            message: data,
            position: "topCenter",
            color: data.includes("✅") ? "green" : "red"
        });
    })
    .catch(error => {
        console.error("Erro:", error);
        iziToast.error({
            message: "❌ Erro na comunicação com o servidor.",
            position: "topCenter"
        });
    });
}

// =========================
// Handlers dos botões "Salvar" (um por modal)
// Cada handler pega o status do dropdown dentro do mesmo modal
// =========================

document.getElementById("saveIniciante").addEventListener("click", function () {
    const modal = this.closest(".modal");
    const hidden = modal.querySelector("input.status-selecionado");
    const status = hidden ? hidden.value : "";
    salvarMeta("Iniciantes", status);
});

document.getElementById("saveHipertrofia").addEventListener("click", function () {
    const modal = this.closest(".modal");
    const hidden = modal.querySelector("input.status-selecionado");
    const status = hidden ? hidden.value : "";
    salvarMeta("Hipertrofia", status);
});

document.getElementById("saveEmagrecimento").addEventListener("click", function () {
    const modal = this.closest(".modal");
    const hidden = modal.querySelector("input.status-selecionado");
    const status = hidden ? hidden.value : "";
    salvarMeta("Emagrecimento e definição", status);
});

document.getElementById("savePerformance").addEventListener("click", function () {
    const modal = this.closest(".modal");
    const hidden = modal.querySelector("input.status-selecionado");
    const status = hidden ? hidden.value : "";
    salvarMeta("Performance e condicionamento", status);
});

document.getElementById("saveBemEstar").addEventListener("click", function () {
    const modal = this.closest(".modal");
    const hidden = modal.querySelector("input.status-selecionado");
    const status = hidden ? hidden.value : "";
    salvarMeta("Bem estar e saúde", status);
});
