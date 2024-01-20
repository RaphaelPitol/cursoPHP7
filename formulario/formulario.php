<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="titulo">Formulario</div>

<h2>Cadastro</h2>

<?php
if (count($_POST) > 0) {
     // isset($_POST['nome'])
     //filtra os inputs POST com nome se não existe
     if (!filter_input(INPUT_POST, 'nome')) {
          echo "Nome Obrigatório <br>";
     }
     if (filter_input(INPUT_POST, 'nascimento')) {
          $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
          if (!$data) {
               echo "Data deve estar no padrão dd/mm/aaaa <br>";
          }
     }

     //filtra a variavel $_POST['email'] se é um valido
     if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          echo "Email inválido <br>";
     }

     //filtra a variavel $_POST['site'] se é um valido
     if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
          echo "Site inválido <br>";
     }

     $filhosConfig = [
          "options" => ["min_range" => 0, "max_range" => 10]
     ];
     if (!filter_var(
          $_POST['filhos'],
          FILTER_VALIDATE_INT,
          $filhosConfig
     ) && $_POST['filhos'] != 0) {
          echo 'Quantidade de filhos inválida <br>';
     }

     $salarioConfig = ['options' => ['decimal'=> ',']];
     if(!filter_var($_POST['salario'],
     FILTER_VALIDATE_FLOAT, $salarioConfig)){
          echo 'Salário inválido <br>';
     }
}
?>

<form action="#" method="post">
     <div class="form-row">
          <div class="form-group col-md-9">
               <label for="nome">Nome</label>
               <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
          </div>
          <div class="form-group col-md-3">
               <label for="nascimento">Nascimetno</label>
               <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="Nascimetno" value="<?= $_POST['nascimento'] ?>">
          </div>
     </div>
     <div class="form-row">
          <div class="form-group col-md-6">
               <label for="email">E-mail</label>
               <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
          </div>
          <div class="form-group col-md-6">
               <label for="site">Site</label>
               <input type="text" class="form-control" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
          </div>
     </div>
     <div class="form-row">
          <div class="form-group col-md-6">
               <label for="filhos">QTD Filhos</label>
               <input type="number" class="form-control" id="filhos" name="filhos" placeholder="QTD Filhos" min="0" max="10" value="<?= $_POST['filhos'] ?>">
          </div>
          <div class="form-group col-md-6">
               <label for="salario">Salario</label>
               <input type="text" class="form-control" id="salario" name="salario" placeholder="Salario" value="<?= $_POST['salario'] ?>">
          </div>
     </div>
     <button class="btn btn-primary btn-lg">Enviar</button>
</form>