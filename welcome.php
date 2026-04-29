<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-vindas</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #eef0f5;
            --card: #ffffff;
            --primary: #2563eb;
            --text: #1e293b;
            --muted: #64748b;
            --error: #ef4444;
            --error-bg: #fef2f2;
            --success: #16a34a;
            --success-bg: #f0fdf4;
            --radius: 10px;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--bg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
        }

        .card {
            background: var(--card);
            padding: 2.5rem 2rem;
            border-radius: var(--radius);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 420px;
            text-align: center;
            animation: fadeUp 0.4s ease;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        .info {
            font-size: 0.95rem;
            color: var(--muted);
            margin-bottom: 0.3rem;
        }

        .info span {
            color: var(--text);
            font-weight: 500;
        }

        .alert {
            padding: 0.9rem 1rem;
            border-radius: var(--radius);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .alert-error {
            background: var(--error-bg);
            color: var(--error);
        }

        a {
            display: inline-block;
            margin-top: 1.5rem;
            font-size: 0.875rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="card">
<?php
// FIX: verificação do método HTTP
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitização dos dados recebidos
    $name  = htmlspecialchars(trim($_POST["name"]  ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));

    // FIX: validação de e-mail no servidor com filter_var
    if (empty($name)) {
        echo '<div class="alert alert-error">⚠️ Nome não pode estar vazio.</div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-error">⚠️ E-mail inválido. Por favor, volte e tente novamente.</div>';
    } else {
        // Dados válidos — exibe boas-vindas
        echo '<div class="icon">✅</div>';
        echo '<h1>Olá, ' . $name . '!</h1>';
        echo '<p class="info">E-mail recebido: <span>' . $email . '</span></p>';
    }

} else {
    // Acesso direto sem POST
    echo '<div class="alert alert-error">⚠️ Acesso inválido. Por favor, envie o formulário primeiro.</div>';
}
?>
    <a href="index.html">← Voltar ao formulário</a>
</div>
</body>
</html>
