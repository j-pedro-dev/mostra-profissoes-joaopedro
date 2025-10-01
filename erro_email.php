<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail já cadastrado - Mostra de Profissões FANS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #007bff 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        .error-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }
        .error-card {
            background: white;
            border-radius: 25px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
            padding: 3rem;
            text-align: center;
            max-width: 500px;
            margin: 2rem;
            position: relative;
            overflow: hidden;
        }
        .error-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(45deg, #dc3545, #fd7e14);
        }
        .error-icon {
            font-size: 5rem;
            margin-bottom: 1.5rem;
            color: #dc3545;
            animation: shake 0.5s ease-in-out;
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
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
            border: 2px solid #dc3545;
            border-radius: 25px;
            padding: 15px 30px;
            color: #dc3545;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 500;
            margin: 0.5rem;
        }
        .btn-secondary-custom:hover {
            background: #dc3545;
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
        }
        .info-box {
            background: #f8f9fa;
            border-left: 4px solid #dc3545;
            border-radius: 10px;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-card">
            <div class="error-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            
            <h1 class="mb-3" style="color: #dc3545;">Ops! E-mail já cadastrado</h1>
            
            <p class="lead mb-4">Este e-mail já está cadastrado em nosso sistema para a Mostra de Profissões FANS 2025.</p>

            <div class="info-box">
                <h5 style="color: #dc3545; margin-bottom: 1rem;">
                    <i class="fas fa-info-circle mr-2"></i>O que isso significa?
                </h5>
                <ul class="mb-0" style="color: #666;">
                    <li>Você já se inscreveu anteriormente</li>
                    <li>Sua inscrição já está confirmada</li>
                    <li>Você receberá as informações por e-mail</li>
                </ul>
            </div>

            <div class="mt-4">
                <a href="index.html#inscricao" class="btn-secondary-custom">
                    <i class="fas fa-edit mr-2"></i>Usar outro e-mail
                </a>
               
            </div>

           
                
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
