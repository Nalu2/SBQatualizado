<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
        include "navbar_cad.php";
    ?>

    <!-- Área do Formulário -->
    <div class="container">
        <div class="login">
            <!-- Título -->
            <div class="cadastro">
                <div id="cadastro">Cadastro funcional</div></div>
            <!-- Formulário -->
            <div class="form">
              <!-- LINHA 1 DO FORMULÁRIO -->
              <form action="arquivo" method="post">
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Nome completo:</label>
                    <input type="text" class="form-control" name="nome" />
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">E-mail (institucional):</label>
                    <input type="email" class="form-control" name="e-mail" />
                  </div>
                </div>

                <!-- LINHA 2 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Grupo de pesquisa:</label>
                    <div class="form-group">
                      <select class="form-select form-select-sm" >
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Equipamentos e técnicas disponíveis:</label>
                    <select class="form-select form-select-sm" >
                      <option selected></option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <!-- LINHA 3 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Nome do coordenador:</label>
                    <input type="text" class="form-control" id="nome_coordenador" name="nome_coordenador">
                  </div>
                  <!-- 2ª Coluna  -->
                  <div class="col-sm"> 
                    <label for="">Área de atuação:</label>
                    <select class="form-select form-select-sm" >
                      <option selected></option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <!-- LINHA 4 DO FORMULÁRIO-->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Posição:</label>
                    <select class="form-select form-select-sm" >
                      <option selected></option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Senha:</label>
                    <input type="text" class="form-control" id="senha" name="senha">
                  </div>
                </div>

                <!-- LINHA 5 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">E-mail do coordenador (institucional):</label>
                    <input type="email" class="form-control" id="e-mail_coordenador" name="e-mail_coordenador" />
                  </div>

                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Confirmar senha:</label>
                    <input type="text" class="form-control" id="confirmar_senha" name="confirmar_senha" />
                  </div>
                </div>

                <!-- LINHA 6 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Informações do laboratótio (formas de contato):</label>
                    <input type="text" class="form-control" id="informações_laboratótio" name="informações_laboratótio" />
                  </div>
                 <!-- 2ª Coluna -->
                 <div class="col-sm" id="recaptcha">
                    <div class="recaptcha"></div>
                  </div>
                  
                <!-- LINHA 7 DO FORMULÁRIO -->
                <div class="row">
                   <!-- 2ª Coluna -->
                  <div class="col-sm" id="recaptcha">
                    <button type="button" class="btn btn-warning" id="voltar">Voltar</button>
                    <button type="submit" class="btn btn-info" id="registrar" name="submit">Registrar-se</button>
                  </div>
  
                    
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