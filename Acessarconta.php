<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Acessarconta.css">
    <title>Acessar Conta</title>
</head>
<body>
    <!-- Barra de navegação -->
    <?php
        include "navbar_cad.php";
    ?>
    <!-- Área do Formulário -->
    <div class="container">
        <div class="login">
            <!-- Título -->
            <div class="cadastro">
                <div id="cadastro">Cadastro Pessoal</div></div>
            <!-- Formulário -->
            <div class="form">
              <!-- LINHA 1 DO FORMULÁRIO -->
              <form action="arquivo" method="post">
                <div class="row">
                  <div class="col-sm">
                    <label for="">Nome completo:</label>
                    <input type="text" class="form-control" name="nome" />
                  </div>
                </div>

                <!-- LINHA 2 DO FORMULÁRIO -->
                <div class="row">
                  <div class="col-sm">
                    <label for="">Instituição da titulação:</label>
                    <div class="form-group">
                    <input type="text" class="form-control" id="instituicao_titulacao" name="instituicao_titulacao"
                          placeholder="Digite aqui">
                  </div>
                </div>

                <!-- LINHA 3 DO FORMULÁRIO -->
                <div class="row">
                    <div class="col-sm" id="recaptcha">
                    <div class="recaptcha"></div>
                  </div>
                  </div>

                <!-- LINHA 4 DO FORMULÁRIO -->
                <div class="row">
                    <div class="col-sm" id="recaptcha">
                        <button type="button" class="btn btn-warning" id="voltar">Voltar</button>
                        <button type="submit" class="btn btn-info" id="registrar" name="submit">Registrar-se</button>
                      </div>
                  </div>

                
                  <!-- 2ª Coluna -->
                  
                </div>
              </form>
          </div>
      </div>
    </div>
  </div>

      <!-- Rodapé -->
        <?php include "footer.php"?>
    
        
    

</body>
</html>