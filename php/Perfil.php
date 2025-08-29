<?php
session_start();
include 'conexao.php';

// se não estiver logado, manda pro login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$msg = "";

// Atualizar dados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['atualizar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $objetivo = $_POST['objetivo'];

    $sql = "UPDATE usuarios SET nome=?, email=?, peso=?, altura=?, objetivo=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssddsi", $nome, $email, $peso, $altura, $objetivo, $usuario_id);

    if ($stmt->execute()) {
        $msg = "✅ Dados atualizados com sucesso!";
    } else {
        $msg = "❌ Erro ao atualizar: " . $stmt->error;
    }
    $stmt->close();
}

// Deletar conta
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deletar'])) {
    $sql = "DELETE FROM usuarios WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $usuario_id);
    if ($stmt->execute()) {
        session_destroy();
        header("Location: login.php");
        exit();
    } else {
        $msg = "❌ Erro ao excluir conta.";
    }
}

// Buscar dados do usuário
$sql = "SELECT * FROM usuarios WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Perfil - GymUp</title>
  <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
  <header id="header">
    <div class="logo">
      <img src="../img/logo/Logo-removebg-preview.png" alt="Logo GymUp">
      <h2>GymUp</h2>
    </div>
    <nav id="navbar">
      <ul>
        <li><a href="../php/index.php">Início</a></li>
        <li><a href="../html/sobre.html">Sobre</a></li>
        <li><a href="../php/meta_criar.php">Metas</a></li>
        <li><a href="#">Planos</a></li>
        <li><a href="../html/contato.html">Contato</a></li>
        <li><a href="../php/Perfil.php">Perfil</a></li>
      </ul>
    </nav>
  </header>

  <section class="perfil-section">
    <div class="perfil-container">
      <h2>Meu Perfil</h2>
      <?php if (!empty($msg)) echo "<p class='msg'>$msg</p>"; ?>
      
      <form method="post">
        <div class="form-group">
          <label>Nome:</label>
          <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome']) ?>" required>
        </div>

        <div class="form-group">
          <label>Email:</label>
          <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>
        </div>

        <div class="form-group">
          <label>Peso (kg):</label>
          <input type="number" step="0.1" name="peso" value="<?= htmlspecialchars($usuario['peso']) ?>">
        </div>

        <div class="form-group">
          <label>Altura (m):</label>
          <input type="number" step="0.01" name="altura" value="<?= htmlspecialchars($usuario['altura']) ?>">
        </div>

        <div class="form-group">
          <label>Objetivo:</label>
          <input type="text" name="objetivo" value="<?= htmlspecialchars($usuario['objetivo']) ?>">
        </div>

        <button type="submit" name="atualizar" class="btn btn-primary">Atualizar</button>
        <button type="submit" name="deletar" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir sua conta?')">Excluir Conta</button>
      </form>

      <a href="logout.php" class="btn btn-secondary">Sair</a>
    </div>
  </section>
</body>
</html>
