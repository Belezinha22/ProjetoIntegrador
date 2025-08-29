<?php session_start(); ?>

<?php
include 'conexao.php';
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $peso = !empty($_POST['peso']) ? $_POST['peso'] : null;
    $altura = !empty($_POST['altura']) ? $_POST['altura'] : null;
    $objetivo = !empty($_POST['objetivo']) ? $_POST['objetivo'] : null;

    // Verifica se email já existe
    $check = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $msg = "<span style='color:red;font-weight:bold;'>❌ Esse e-mail já está cadastrado!</span>";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, senha, peso, altura, objetivo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssdds", $nome, $email, $senha, $peso, $altura, $objetivo);

        if ($stmt->execute()) {
            // Redireciona para login.php se cadastro deu certo
            header("Location: login.php?cadastro=sucesso");
            exit();
        } else {
            $msg = "<span style='color:red;font-weight:bold;'>❌ Erro: " . $stmt->error . "</span>";
        }

        $stmt->close();
    }

    $check->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - GymUp</title>
  <link rel="stylesheet" href="../css/cadastrar.css">
</head>
<body>
  <div class="cadastro-section">
    <div class="cadastro-container">
      <div class="cadastro-header">
        <h2>Cadastro - GymUp</h2>
        <p>Crie sua conta e comece agora!</p>
      </div>

      <form class="cadastro-form" method="post" action="">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group password-input">
          <label for="senha">Senha:</label>
          <input type="password" name="senha" id="senha" required>
          <button type="button" class="toggle-password" onclick="toggleSenha()">👁️</button>
        </div>

        <div class="form-group">
          <label for="peso">Peso (kg):</label>
          <input type="number" step="0.01" name="peso" id="peso">
        </div>

        <div class="form-group">
          <label for="altura">Altura (m):</label>
          <input type="number" step="0.01" name="altura" id="altura">
        </div>

        <div class="form-group">
          <label for="objetivo">Objetivo:</label>
          <select name="objetivo" id="objetivo">
            <option value="Hipertrofia">Hipertrofia</option>
            <option value="Emagrecimento">Emagrecimento</option>
            <option value="Condicionamento">Condicionamento</option>
            <option value="Bem-estar">Bem-estar</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>

      <?php if (!empty($msg)) echo "<p class='msg'>$msg</p>"; ?>

      <div class="auth-footer">
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
      </div>
    </div>
  </div>

  <script>
    function toggleSenha() {
      const senhaInput = document.getElementById('senha');
      if (senhaInput.type === 'password') {
        senhaInput.type = 'text';
      } else {
        senhaInput.type = 'password';
      }
    }
  </script>
</body>
</html>
