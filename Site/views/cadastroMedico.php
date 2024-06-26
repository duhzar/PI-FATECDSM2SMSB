<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
    <style>
    </style>
</head>
<body>
    <div class="imgfundocadastro">
    <div class="container-cadastroMedico">
        <h2>Cadastro Médico</h2><br>
        <form class="formulario-cadastroMedico" method="POST" action="processar_cadastro_medico.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>
        
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" maxlength="11" required><br>
        
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br>
        
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required><br>
        
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br>
        
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select><br>
        
            <label for="crm">CRM:</label>
            <input type="text" id="crm" name="crm" required><br>
        
            <label for="especialidade">Especialidade:</label>
            <input type="text" id="especialidade" name="especialidade" required><br>
        
            <label for="disponibilidadeInicio">Disponibilidade de Início:</label>
            <input type="time" id="disponibilidadeInicio" name="disponibilidadeInicio" required><br>
        
            <label for="disponibilidadeFim">Disponibilidade de Fim:</label>
            <input type="time" id="disponibilidadeFim" name="disponibilidadeFim" required><br>
            
            <div class="btn-cadastro">
                <input type="submit" class="btn-proximo" value="Próximo">
            </div>
        </form>
    </div>
</div>


</body>
</html>