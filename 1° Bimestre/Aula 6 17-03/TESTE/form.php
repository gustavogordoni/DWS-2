<!DOCTYPE html>
<html lang="pt-br"  data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <h1>Praticando - Validação em formulários HTML Aula 3</h1>

    <div class="div">
    <form action="destino.php" method="POST">
        <div class="d1">

        <div class="d2">
        <label for="nome">Nome: </label> 
        <input type="text" id="nome" name="nome" >
        </div>
        
        <div class="d2">
        <label for="email">Email: </label>
        <input type="email" id="email" name="email"  
        placeholder="Digite seu email">
        </div>
        
        <div class="d2">
        <label for="phone">Telefone: </label>
        <input type="tel" id="phone" name="phone" 
        pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$"
        title="Digite o telefone no formato (DD)XXXXX-XXXX"
        placeholder="(DD) XXXXX-XXXX">
        </div>

        <div class="d2">
        <label for="cpf">CFP: </label>
        <input type="text" name="cpf" id="cpf" 
        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
        title="Digite o CPF no formato XXX.XXX.XXX-XX"
        placeholder="XXX.XXX.XXX-XX">
        </div>

        <div class="d2">
        <label for="cadastro">Data do cadastro: </label>
        <input type="date" id="cadastro" name="cadastro" >
        </div>

        <div class="d2">
        <label for="homepage">Endereço URL: </label>
        <input type="url" id="homepage" name="homepage" >
        </div>

        </div>
        <div class="d3">
        
        <div class="d2">
        <label for="quantity">Nota (0 a 10): </label>
        <input type="number" id="quantity" name="notas" min="0" max="10" >
        </div>

        <div class="d2">
        <label for="cep">CEP: </label>
        <input type="text" name="cep" id="cep" 
        title="Digite o CEP no formato XX.XXX-XXX"
        placeholder="XX.XXX-XXX"
        pattern="\d{2}\.\d{3}-\d{3}">
        </div>

        <div class="d2">
        <label for="end">Endereço: </label>
        <input type="text" name="end" id="edn" 
        placeholder="Rua, n° e bairro">
        </div>
        
        <div class="d2">
        <label for="cidade">Cidade</label>
        <select name="cidade" id="cidade" >
            <option value="">Escolha uma cidade</option>
            <option value="Votuporanga">Votuporanga</option>
            <option value="Cardoso">Cardoso</option>
            <option value="Cosmorama">Cosmorama</option>
            <option value="Mira Estrela">Mira Estrela</option>
        </select>
        </div>
        
        <div class="d2">
        <label for="foto">Foto de Perfil</label>
        <input type="file" id="foto" name="foto" 
        accept="image/*">
        </div>

        <div class="d2">
        <label for="sla">Contrato assinado (em pdf)</label>
        <input type="file" id="sla" name="sla"  
        accept=".pdf, .doc, .docx">
        </div>

        </div>
        
        <div class="d4">
        <input type="reset" value="Reset" class="btn btn-secondary"></input>
        <input type="submit" value="Submit" class="btn btn-success"></input> 
        </div>
     
    </form>
    </div>

</body>
</html>
