<?php
session_start();

// Verificar se os dados estão na sessão
if (!isset($_SESSION['nome']) || !isset($_SESSION['curso'])) {
    header('Location: index.html');
    exit;
}

$nome = $_SESSION['nome'];
$curso = $_SESSION['curso'];

// Limpa cache
unset($_SESSION['nome']);
unset($_SESSION['curso']);
unset($_SESSION['email']);

// Definir mensagens personalizadas por curso
$mensagensCurso = [
    'Administração' => [
        'titulo' => 'Futuro Administrador!',
        'mensagem' => 'Você está no caminho para se tornar um líder empresarial! A Administração te preparará para gerenciar organizações e tomar decisões estratégicas.',
        'icone' => 'fas fa-chart-line',
        'cor' => '#007bff',
        'dicas' => ['Desenvolva habilidades de liderança', 'Mantenha-se atualizado sobre economia', 'Pratique comunicação eficaz']
    ],
    'Contábeis' => [
        'titulo' => 'Futuro Contador!',
        'mensagem' => 'Excelente escolha! Ciências Contábeis te formará como especialista em gestão financeira e análise de dados contábeis.',
        'icone' => 'fas fa-calculator',
        'cor' => '#007bff',
        'dicas' => ['Aprenda sobre legislação tributária', 'Desenvolva habilidades analíticas', 'Pratique com softwares contábeis']
    ],
    'Direito' => [
        'titulo' => 'Futuro Advogado!',
        'mensagem' => 'Você escolheu uma das profissões mais nobres! O Direito te capacitará para defender a justiça e contribuir com a sociedade.',
        'icone' => 'fas fa-balance-scale',
        'cor' => '#007bff',
        'dicas' => ['Leia muito e desenvolva argumentação', 'Mantenha-se atualizado com as leis', 'Pratique oratória e escrita']
    ],
    'Engenharia de Software' => [
        'titulo' => 'Futuro Engenheiro de Software!',
        'mensagem' => 'Perfeito! Você está entrando em uma área em constante crescimento. A Engenharia de Software te preparará para criar soluções tecnológicas inovadoras.',
        'icone' => 'fas fa-code',
        'cor' => '#007bff',
        'dicas' => ['Pratique programação regularmente', 'Aprenda sobre metodologias ágeis', 'Mantenha-se atualizado com novas tecnologias']
    ],
    'Pedagogia' => [
        'titulo' => 'Futuro Pedagogo!',
        'mensagem' => 'Que escolha inspiradora! A Pedagogia te formará para moldar mentes e contribuir com a educação das próximas gerações.',
        'icone' => 'fas fa-graduation-cap',
        'cor' => '#007bff',
        'dicas' => ['Desenvolva paciência e empatia', 'Mantenha-se atualizado com métodos pedagógicos', 'Pratique comunicação didática']
    ],
    'Psicologia' => [
        'titulo' => 'Futuro Psicólogo!',
        'mensagem' => 'Excelente decisão! A Psicologia te capacitará para entender o comportamento humano e promover bem-estar mental.',
        'icone' => 'fas fa-brain',
        'cor' => '#007bff',
        'dicas' => ['Desenvolva habilidades de escuta', 'Mantenha-se atualizado com pesquisas', 'Pratique empatia e compreensão']
    ]
];

$cursoInfo = isset($mensagensCurso[$curso]) ? $mensagensCurso[$curso] : [
    'titulo' => 'Futuro Profissional!',
    'mensagem' => 'Parabéns por sua escolha! Estamos ansiosos para te receber na FANS.',
    'icone' => 'fas fa-star',
    'cor' => '#007bff',
    'dicas' => ['Mantenha-se motivado', 'Estude regularmente', 'Pratique suas habilidades']
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição Realizada - Mostra de Profissões FANS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <style>
        body {
            background: linear-gradient(135deg,#667eea, #007bff 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        .success-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }
        .success-card {
            background: white;
            border-radius: 25px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
            padding: 3rem;
            text-align: center;
            max-width: 600px;
            margin: 2rem;
            position: relative;
            overflow: hidden;
        }
        .success-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(45deg,rgb(29, 49, 136), #007bff);
        }
        .success-icon {
            font-size: 5rem;
            margin-bottom: 1.5rem;
            animation: bounceIn 1s ease-out;
            color: #007bff;
        }
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }
        .course-icon {
            font-size: 3rem;
            margin: 1rem 0;
            color: <?php echo $cursoInfo['cor']; ?>;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        .student-name {
            color: #333;
            font-weight: bold;
            font-size: 1.3rem;
        }
        .course-title {
            color: <?php echo $cursoInfo['cor']; ?>;
            font-weight: bold;
            font-size: 1.8rem;
            margin: 1rem 0;
        }
        .course-message {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .tips-section {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
        }
        .tip-item {
            display: flex;
            align-items: center;
            margin: 0.8rem 0;
            color: #555;
        }
        .tip-icon {
            color: <?php echo $cursoInfo['cor']; ?>;
            margin-right: 0.8rem;
            font-size: 1.1rem;
        }
        .next-steps {
            background: linear-gradient(45deg, #667eea, #007bff);
            color: white;
            border-radius: 15px;
            padding: 2rem;
            margin: 2rem 0;
        }
        .btn-custom {
            background: linear-gradient(45deg, #667eea, #007bff);
            border: none;
            border-radius: 25px;
            padding: 15px 30px;
            color: white;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 500;
            margin: 0.5rem;
        }
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            color: white;
            text-decoration: none;
        }
        .btn-secondary-custom {
            background: transparent;
            border: 2px solid #667eea;
            border-radius: 25px;
            padding: 15px 30px;
            color: #667eea;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 500;
            margin: 0.5rem;
        }
        .btn-secondary-custom:hover {
            background: #667eea;
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

    <div class="success-container">
        <div class="success-card">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            
            <h1 class="mb-3" style="color: #007bff;">Inscrição Realizada com Sucesso!</h1>
            
            <p class="student-name">Olá, <?php echo htmlspecialchars($nome); ?>!</p>
            
            <div class="course-icon">
                <i class="<?php echo $cursoInfo['icone']; ?>"></i>
            </div>
            
            <h2 class="course-title"><?php echo $cursoInfo['titulo']; ?></h2>
            
            <p class="course-message"><?php echo $cursoInfo['mensagem']; ?></p>

            <div class="tips-section">
                <h4 style="color: <?php echo $cursoInfo['cor']; ?>; margin-bottom: 1rem;">
                    <i class="fas fa-lightbulb mr-2"></i>Dicas para sua jornada:
                </h4>
                <?php foreach($cursoInfo['dicas'] as $dica): ?>
                <div class="tip-item">
                    <i class="fas fa-arrow-right tip-icon"></i>
                    <span><?php echo $dica; ?></span>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="mt-4">
                <a href="index.html" class="btn-custom">
                    <i class="fas fa-home mr-2"></i>Voltar ao Início
                </a>
            </div>
            </div>
        </div>
    </div>  
</body>
</html>
