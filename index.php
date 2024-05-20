<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" >
    <title>PROJETO INTEGRADOR</title>
    <link rel="stylesheet" href="./css/style.css">
</head> 
    <body>
        <div class="box">
            <form action="painel.php" method="POST">
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                    
                </div>
                <button type="submit" class="btn-submit">Login</button>
            </form>
        </div>
        <!--
        <div class="box">
        <a href="novo_cadastro.php" class="esqueci-senha">
            <button type="submit" class="btn-submit">Novo Cadastro</button>
        </a>
        </div>
        -->
    </body>
</html>