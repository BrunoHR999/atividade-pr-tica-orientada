<?php
  include "cabecalho.php";
?>
<h1>Aqui geramos</h1>
<form class="row g-3" action="curriculo.php" id="formulario" method="post">
  <div class="col-12">
    <label for="inputNome" class="form-label">nome</label>
    <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Digite seu Nome">
  </div>
  <div class="col-12">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Digite o seu Email">
  </div> 
  <div class="col-12">
    <label for="inputNascimento" class="form-label">Nascimento</label>
    <input type="date" class="form-control" name="nascimento" id="inputNascimento" oninput="calc_total();">
  </div>
  <div class="col-12">
    <input type="hidden" class="form-control" name="idade" id="inputIdade">
  </div>
  <div class="col-12">
    <label for="inputProfissao" class="form-label">Profissão</label>
    <input type="text" class="form-control" name="profissao" id="inputProfissao" placeholder="Qual sua Profissão">
  </div>
  <div class="col-12">
    <label for="inputCidade" class="form-label">Cidade</label>
    <input type="text" class="form-control" name="cidade" id="inputCidade" placeholder="Qual sua Cidade">
  </div>
  <div class="col-12">
    <label for="inputEstado" class="form-label">Estado</label>
    <input type="text" class="form-control" name="estado" id="inputEstado" placeholder="Qual seu Estado">
  </div>
  <div class="col-12">
    <label for="inputEscolaridade" class="form-label">Escolaridade</label>
    <input type="text" class="form-control" name="escolaridade" id="inputEscolaridade" placeholder="Qual sua Escolaridade">
  </div>
  <div class="col-12 mt-3">
    <button type="submit" class="btn btn-primary">Clique Aqui</button>
  </div>
</form>
<?php
  include "rodape.php";
?>