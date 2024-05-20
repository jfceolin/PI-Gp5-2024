<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8" >
<title>PROJETO INTEGRADOR</title>
<link rel="stylesheet" href="css/style.css">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    width: 377px;
    max-width: 357px;
    padding: 21px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 90%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.salvar {
    width: 50%;
    padding: 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
   	margin-left;-20px;
}

.salvar:hover {
    background-color: #0056b3;
}

.salva{
	
}

.w3-bar .w3-button {
    padding: 16px 32px;
    background-color: #007bff;
    color: #fff;
    border: none;
    display: inline-block;
    cursor: pointer;
}

.w3-bar .w3-button:hover {
    background-color: #0056b3;
}

.w3-bar .w3-red {
    background-color: #0056b3 !important;
}

.w3-container {
    text-align: center;
    margin-top: 50px;
}

h2 {
    margin-bottom: 10px;
}

</style>
</head> 
<body>
<div class="w3-container">
<div class="w3-bar w3-black">
<button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'London')">Pessoa Física</button>
<button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Pessoa Jurídica</button>
</div>
  
<div id="London" class="w3-container w3-border city">
<h2>Pessoa Física</h2>

<div class="container">
    <form action="cadastro_realizado.php" method="POST">
        <div class="form-group">
        <input type="text" id="nome" name="nome" placeholder="Nome" required>
        </div>
        <div class="form-group">
        <input type="text" id="cpf" name="cpf" placeholder="CPF" required>
        </div>
        <div class="form-group">
        <input type="email" id="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="form-group">
        <input type="text" id="registro" name="registro" placeholder="Registro institucional" required>
        </div>
        <div class="form-group">
        <input type="password" id="senha" name="senha" placeholder="Senha" required>
        </div>
        <div class="form-group">
        <input type="password" id="repetir_senha" name="repetir_senha" placeholder="Repetir Senha" required>
        </div>
        <button type="submit" class="salvar">Salvar</button>
    </form>
</div>

</div>

<div id="Paris" class="w3-container w3-border city" style="display:none">
<h2>Pessoa Jurídica</h2>

<div class="container">
    <form action="cadastro_realizado.php" method="POST">
        <div class="form-group">
        <input type="text" id="nome" name="nome" placeholder="Razão Social" required>
        </div>
        <div class="form-group">
        <input type="text" id="cpf" name="cpf" placeholder="CNPJ" required>
        </div>
        <div class="form-group">
        <input type="email" id="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="form-group">
        <input type="text" id="registro" name="registro" placeholder="Registro institucional" required>
        </div>
        <div class="form-group">
        <input type="password" id="senha" name="senha" placeholder="Senha" required>
        </div>
        <div class="form-group">
        <input type="password" id="repetir_senha" name="repetir_senha" placeholder="Repetir Senha" required>
        </div>
        <button type="submit" class="salvar">Salvar</button>
    </form>
</div>

</div>

</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

</body>
</html>