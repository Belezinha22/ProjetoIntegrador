<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymUp | Definir metas</title>
    <link rel="stylesheet" href="../css/metas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="../img/logo/Logo-removebg-preview.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">

</head>

<body>
    <header id="header">
        <div class="logo">
            <img src="../img/logo/Logo-removebg-preview.png" alt="Logo FitPower">
            <h2>GymUp</h2>
        </div>
        <nav id="navbar">
            <ul>
                <li><a href="../php/index.php">Início</a></li>
                <li><a href="../html/sobre.html">Sobre</a></li>
                <li><a href="../php/metas_criar.php">Metas</a></li>
                <li><a href="#">Planos</a></li>
                <li><a href="../html/contato.html">Contato</a></li>
                <li><a href="../php/Perfil.php">Perfil</a></li>
            </ul>
        </nav>
    </header>

     <main>
        <h1 class="plnTreino-h1">
            Selecione seu plano de treino
        </h1>
        <div class="cards">
            <ul class="card-list">
                <li class="card-item" data-bs-toggle="modal" data-bs-target="#modalIniciante">
                    <img src="../img/general/iniciantes.jpg" alt="" class="card-img" id="iniciantesIMG">
                    <p class="badge">
                        Iniciantes
                    </p>
                    <p class="card-desc">
                        Criar o hábito de treinar regularmente, melhorar o condicionamento físico, aprender a executar
                        os exercícios corretamente.
                    </p>
                    <button class="card-choose">
                        <p class="choose">
                            Escolher
                        </p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </li>
                <li class="card-item" data-bs-toggle="modal" data-bs-target="#modalHipertrofia">
                    <img src="../img/general/hipertrofia.jpg" alt="" class="card-img" id="hipertrofiaIMG">
                    <p class="badge">
                        Hipertrofia
                    </p>
                    <p class="card-desc">
                        Aumentar a força e resistência muscular, melhorar a postura e estabilidade corporal, desenvolver
                        grupos musculares específicos.
                    </p>
                    <button class="card-choose">
                        <p class="choose">
                            Escolher
                        </p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </li>
                <li class="card-item" data-bs-toggle="modal" data-bs-target="#modalEmagrecimento">
                    <img src="../img/general/emag_def.jpg" alt="" class="card-img" id="emagrecimentoIMG">
                    <p class="badge">
                        Emagrecimento e <br> definição
                    </p>
                    <p class="card-desc">
                        Reduzir percentual de gordura corporal, aumentar o gasto calórico diário, melhorar a resistência
                        cardiovascular.
                    </p>
                    <button class="card-choose">
                        <p class="choose">
                            Escolher
                        </p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </li>
                <li class="card-item" data-bs-toggle="modal" data-bs-target="#modalPerformance">
                    <img src="../img/general/perf_cond.jpg" alt="" class="card-img" id="performanceIMG">
                    <p class="badge">
                        Performance e <br> condicionamento
                    </p>
                    <p class="card-desc">
                        Aumentar resistência aeróbica, melhorar o desempenho em treinos funcionais ou de alta
                        intensidade e aumentar a mobilidade
                    </p>
                    <button class="card-choose">
                        <p class="choose">
                            Escolher
                        </p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </li>
                <li class="card-item" data-bs-toggle="modal" data-bs-target="#modalBemEstar">
                    <img src="../img/general/bem_saude.jpg" alt="" class="card-img" id="bemestarIMG">
                    <p class="badge">
                        Bem estar e saúde
                    </p>
                    <p class="card-desc">
                        Reduzir dores musculares e melhorar a postura, aumentar a qualidade do sono e disposição diária,
                        desenvolver uma rotina de treinos equilibrada.
                    </p>
                    <button class="card-choose">
                        <p class="choose">
                            Escolher
                        </p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </li>
            </ul>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modalIniciante" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="meuModalLabel">Iniciantes <span> | Plano de treino </span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body d-flex">
                    <div class="modal-body-img p-1">
                        <img src="../img/general/iniciantes.jpg" alt="" class="modal-img">
                    </div>
                    <div class="modal-body-text p-2 overflow-auto locked"
                        style="max-height:400px; width: 650px; text-align: justify;">
                        <div class="modal-list">
                            <ul>
                                <li><strong>Objetivo:</strong> Criar o hábito de treinar regularmente, melhorar o
                                    condicionamento físico e aprender a executar os exercícios corretamente.</li>
                                <li><strong>Frequência:</strong> 3x a 4x por semana.</li>
                                <li><strong>Estrutura:</strong>
                                    <ul>
                                        <li>Aquecimento: 10 min caminhada leve ou bicicleta</li>
                                        <li>Agachamento livre (ou no banco) – 3x12</li>
                                        <li>Supino reto com barra ou halteres – 3x12</li>
                                        <li>Remada baixa – 3x12</li>
                                        <li>Desenvolvimento de ombros com halteres – 3x12</li>
                                        <li>Prancha isométrica – 3x 20s</li>
                                        <li>Alongamento geral</li>
                                    </ul>
                                </li>

                              <div class="dropdown me-2">
  <button class="btn btn-secondary dropdown-toggle status-dropdown-btn" type="button"
          data-bs-toggle="dropdown" aria-expanded="false">
    Selecione o status
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#" data-status="Em planejamento">Em planejamento</a></li>
    <li><a class="dropdown-item" href="#" data-status="Em andamento">Em andamento</a></li>
    <!-- pode adicionar outras opções depois -->
  </ul>
  <input type="hidden" class="status-selecionado" value="">
</div>



                            </ul>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                     <?php if (!isset($_SESSION['usuario_id'])): ?>
<div style="display: flex; align-items: center; gap: 10px;">
    <i class="fa-solid fa-lock"></i>
        Login necessário
    </p>
</div>
<?php endif; ?>
                    <div class="footerBtns">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success" id="saveIniciante">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalHipertrofia" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" x-data="{ selected: '' }">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="meuModalLabel">Hipertrofia <span> | Plano de treino </span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body d-flex">
                    <div class="modal-body-img p-1">
                        <img src="../img/general/hipertrofia.jpg" alt="" class="modal-img">
                    </div>

                    <div class="modal-body-text p-2 overflow-auto locked"
                        style="max-height:400px; width: 800px; text-align: justify;">
                        <div class="modal-list">
                            <ul>
                                <li><strong>Objetivo:</strong> Ganho de massa muscular.</li>
                                <li><strong>Frequência:</strong> 5 a 6 vezes por semana (dividido em grupos musculares).
                                    Estrutura (ABC)</li>
                                <li>
                                    <ul>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Estrutura
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item" @click="selected = 'A'">A - Peito / Tríceps
                                                </li>
                                                <li class="dropdown-item" @click="selected = 'B'">B - Costas / Bíceps
                                                </li>
                                                <li class="dropdown-item" @click="selected = 'C'">C - Pernas / Ombros
                                                </li>
                                            </ul>
                                        </div>
                                    </ul>
                                </li>

                                <!-- Exibir conteúdo correspondente -->
                                <li x-show="selected === 'A'">
                                    <strong>Treino A:</strong>
                                    <br>
                                    <ul>
                                        <li>Supino reto na barra - 4x8 <br></li>
                                        <li>Supino inclinado com halteres - 4x8 <br></li>
                                        <li>Crucifixo máquina - 3x12 <br></li>
                                        <li>Tríceps pulley - 4x10 <br></li>
                                        <li>Tríceps francês - 3x12</li>
                                    </ul>
                                </li>
                                <li x-show="selected === 'B'">
                                    <strong>Treino B:</strong>
                                    <br>
                                    <ul>
                                        <li>Barra fixa - 4x6 <br></li>
                                        <li>Remada curvada - 4x8 <br></li>
                                        <li>Puxada frontal - 3x12 <br></li>
                                        <li>Rosca direta - 4x10 <br></li>
                                        <li>Rosca alternada - 3x12</li>
                                    </ul>
                                </li>
                                <li x-show="selected === 'C'">
                                    <strong>Treino C:</strong>
                                    <br>
                                    <ul>
                                        <li>Agachamento livre - 4x8 <br></li>
                                        <li>Leg press - 4x12 <br></li>
                                        <li>Stiff - 4x10 <br></li>
                                        <li>Desenvolvimento militar - 4x10 <br></li>
                                        <li>Elevação lateral - 3x12</li>
                                    </ul>
                                </li>
                                
                              <div class="dropdown me-2">
  <button class="btn btn-secondary dropdown-toggle status-dropdown-btn" type="button"
          data-bs-toggle="dropdown" aria-expanded="false">
    Selecione o status
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#" data-status="Em planejamento">Em planejamento</a></li>
    <li><a class="dropdown-item" href="#" data-status="Em andamento">Em andamento</a></li>
    <!-- pode adicionar outras opções depois -->
  </ul>
  <input type="hidden" class="status-selecionado" value="">
</div>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <?php if (!isset($_SESSION['usuario_id'])): ?>
<div style="display: flex; align-items: center; gap: 10px;">
    <i class="fa-solid fa-lock"></i>
        Login necessário
    </p>
</div>
<?php endif; ?>
                    <div class="footerBtns">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success" id="saveHipertrofia">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEmagrecimento" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="meuModalLabel">Emagrecimento e definição <span> | Plano de treino
                        </span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body d-flex">
                    <div class="modal-body-img p-1">
                        <img src="../img/general/emag_def.jpg" alt="" class="modal-img">
                    </div>

                    <div class="modal-body-text p-2 overflow-auto locked"
                        style="max-height:400px; width: 800px; text-align: justify;">
                        <div class="modal-list">
                            <ul>
                                <li><strong>Objetivo:</strong> Reduzir gordura e manter massa muscular</li>
                                <li><strong>Frequência:</strong> 4 a 5x semana
                                    Estrutura (circuitos + cardio)</li>
                                <li>
                                    <strong>Estrutura:</strong> <br> 
                                    <ul>
                                        <li>
                                            Agachamento com peso corporal – 15 repetições
                                        </li>
                                        <li>
                                            Flexão de braço – 12 reps
                                        </li>
                                        <li>
                                            Remada baixa – 12 reps
                                        </li>
                                        <li>
                                            Afundo alternado – 12 reps cada perna
                                        </li>
                                        <li>
                                            Prancha – 30s
                                        </li>
                                    </ul>
                                </li>
                                
                              <div class="dropdown me-2">
  <button class="btn btn-secondary dropdown-toggle status-dropdown-btn" type="button"
          data-bs-toggle="dropdown" aria-expanded="false">
    Selecione o status
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#" data-status="Em planejamento">Em planejamento</a></li>
    <li><a class="dropdown-item" href="#" data-status="Em andamento">Em andamento</a></li>
    <!-- pode adicionar outras opções depois -->
  </ul>
  <input type="hidden" class="status-selecionado" value="">
</div>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                  <?php if (!isset($_SESSION['usuario_id'])): ?>
<div style="display: flex; align-items: center; gap: 10px;">
    <i class="fa-solid fa-lock"></i>
        Login necessário
    </p>
</div>
<?php endif; ?>
                    <div class="footerBtns">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success" id="saveEmagrecimento">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalPerformance" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="meuModalLabel">Performance e condicionamento<span> | Plano de treino
                        </span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body d-flex">
                    <div class="modal-body-img p-1">
                        <img src="../img/general/perf_cond.jpg" alt="" class="modal-img" style="object-position: left;">
                    </div>

                    <div class="modal-body-text p-2 overflow-auto locked"
                        style="max-height:400px; width: 800px; text-align: justify;">
                        <div class="modal-list">
                            <ul>
                                <li><strong>Objetivo:</strong> Potência, resistência, agilidade.</li>
                                <li><strong>Frequência:</strong> 4 vezes por semana
                                    Estrutura (circuitos + cardio)</li>
                                <li>
                                    <strong>Estrutura:</strong> <br> 
                                    <ul>
                                        <li>
                                            Aquecimento funcional (corda, polichinelo)
                                        </li>
                                        <li>
                                            Levantamento terra – 4x6
                                        </li>
                                        <li>
                                            Kettlebell swing – 3x15
                                        </li>
                                        <li>
                                            Corrida intervalada – 8x
                                        </li>
                                        <li>
                                            Exercícios pliométricos – 3x12
                                        </li>
                                        <li>
                                            Core dinâmico – 3x
                                        </li>
                                    </ul>
                                </li>
                                
                              <div class="dropdown me-2">
  <button class="btn btn-secondary dropdown-toggle status-dropdown-btn" type="button"
          data-bs-toggle="dropdown" aria-expanded="false">
    Selecione o status
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#" data-status="Em planejamento">Em planejamento</a></li>
    <li><a class="dropdown-item" href="#" data-status="Em andamento">Em andamento</a></li>
    <!-- pode adicionar outras opções depois -->
  </ul>
  <input type="hidden" class="status-selecionado" value="">
</div>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <?php if (!isset($_SESSION['usuario_id'])): ?>
<div style="display: flex; align-items: center; gap: 10px;">
    <i class="fa-solid fa-lock"></i>
        Login necessário
    </p>
</div>
<?php endif; ?>
                    <div class="footerBtns">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success" id="savePerformance">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalBemEstar" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="meuModalLabel">Bem estar e saúde<span> | Plano de treino
                        </span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body d-flex">
                    <div class="modal-body-img p-1">
                        <img src="../img/general/bem_saude.jpg" alt="" class="modal-img">
                    </div>

                    <div class="modal-body-text p-2 overflow-auto locked"
                        style="max-height:400px; width: 800px; text-align: justify;">
                        <div class="modal-list">
                            <ul>
                                <li><strong>Objetivo:</strong> Manter mobilidade, energia e disposição.</li>
                                <li><strong>Frequência:</strong> 3 vezes por semana
                                    Estrutura (circuitos + cardio)</li>
                                <li>
                                    <strong>Estrutura:</strong> <br> 
                                    <ul>
                                        <li>
                                            15 min caminhada ou bicicleta
                                        </li>
                                        <li>
                                            Agachamento sem peso - 10 repetições
                                        </li>
                                        <li>
                                            Remada elástica - 10 repetições
                                        </li>
                                        <li>
                                            Flexão na parede ou joelhos - 10 repetições
                                        </li>
                                        <li>
                                            Abdominal simples - 10 repetições
                                        </li>
                                        <li>
                                            Alongamentos (yoga/pilates) 10-15 minutos
                                        </li>
                                    </ul>
                                </li>
                                
                              <div class="dropdown me-2">
  <button class="btn btn-secondary dropdown-toggle status-dropdown-btn" type="button"
          data-bs-toggle="dropdown" aria-expanded="false">
    Selecione o status
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#" data-status="Em planejamento">Em planejamento</a></li>
    <li><a class="dropdown-item" href="#" data-status="Em andamento">Em andamento</a></li>
    <!-- pode adicionar outras opções depois -->
  </ul>
  <input type="hidden" class="status-selecionado" value="">
</div>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <?php if (!isset($_SESSION['usuario_id'])): ?>
<div style="display: flex; align-items: center; gap: 10px;">
    <i class="fa-solid fa-lock"></i>
        Login necessário
    </p>
</div>
<?php endif; ?>
                    <div class="footerBtns">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success" id="saveBemEstar">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <script src="../js/metas.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>