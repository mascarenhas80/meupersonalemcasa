<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Personal Trainer</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header, footer { background: #333; color: white; text-align: center; padding: 15px; }
        .form-container { 
            max-width: 400px; 
            margin: 50px auto; 
            padding: 20px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        }
        input, button { 
            width: 100%; 
            padding: 10px; 
            margin-bottom: 15px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            font-size: 14px; 
        }
        button { 
            background-color: #333; 
            color: white; 
            cursor: pointer; 
            font-weight: bold; 
        }
        button:hover { background-color: #555; }
        h1, h2 { margin: 0 0 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        .error { color: red; font-size: 14px; margin-top: -10px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <header>
        <h1>Cadastro de Personal Trainer</h1>
    </header>
    <div class="form-container">
        <form action="processar_cadastro.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            
            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            
            <label for="crea">CREA</label>
            <input type="text" id="crea" name="crea" placeholder="Digite seu CREA" required>
            
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
            
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            
            <label for="confirmar_senha">Confirmar Senha</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha" required>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    <footer>
        <p>© 2024 Seu Personal Trainer</p>
    </footer>
</body>
</html>
