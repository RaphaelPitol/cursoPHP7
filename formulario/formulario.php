<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="titulo">Formulario</div>

<h2>Cadastro</h2>

<?php
if (count($_POST) > 0) {

     $erros = [];
     // isset($_POST['nome'])
     //filtra os inputs POST com nome se não existe
     if (!filter_input(INPUT_POST, 'nome')) {
          $erros['nome'] = "Nome Obrigatório";
     }
     if (filter_input(INPUT_POST, 'nascimento')) {
          $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
          if (!$data) {
               $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
          }
     }

     //filtra a variavel $_POST['email'] se é um valido
     if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $erros['email'] = "Email inválido";
     }

     //filtra a variavel $_POST['site'] se é um valido
     if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
          $erros['site'] = "Site inválido ";
     }

     $filhosConfig = [
          "options" => ["min_range" => 0, "max_range" => 10]
     ];
     if (!filter_var(
          $_POST['filhos'],
          FILTER_VALIDATE_INT,
          $filhosConfig
     ) && $_POST['filhos'] != 0) {
          $erros['filhos'] = 'Quantidade de filhos inválida';
     }

     $salarioConfig = ['options' => ['decimal' => ',']];
     if (!filter_var(
          $_POST['salario'],
          FILTER_VALIDATE_FLOAT,
          $salarioConfig
     )) {
          $erros['salario'] = 'Salário inválido';
     }
}
?>
<!-- <?php foreach ($erros as $erro) : ?>
     <div class="alert alert-warning" role="alert"><?= "" //$erro 
                                                       ?></div>

<?php endforeach ?> -->
<form action="#" method="post" class="needs-validation" novalidate>
     <div class="form-row">
          <div class="form-group col-md-9 ">
               <label for="nome">Nome</label>
               <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
               <div class="invalid-tooltip">
                    <?= $erros['nome'] ?>
               </div>
          </div>
          <div class="form-group col-md-3">
               <label for="nascimento">Nascimetno</label>
               <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>" id="nascimento" name="nascimento" placeholder="Nascimetno" value="<?= $_POST['nascimento'] ?>">
               <div class="invalid-tooltip">
                    <?= $erros['nascimento'] ?>
               </div>
          </div>
     </div>
     <div class="form-row">
          <div class="form-group col-md-6">
               <label for="email">E-mail</label>
               <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
               <div class="invalid-tooltip">
                    <?= $erros['email'] ?>
               </div>
          </div>
          <div class="form-group col-md-6">
               <label for="site">Site</label>
               <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : ''?>" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
               <div class="invalid-tooltip">
                    <?= $erros['site'] ?>
               </div>
          </div>
     </div>
     <div class="form-row">
          <div class="form-group col-md-6">
               <label for="filhos">QTD Filhos</label>
               <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : ''?>" id="filhos" name="filhos" placeholder="QTD Filhos" min="0" max="10" value="<?= $_POST['filhos'] ?>">
               <div class="invalid-tooltip">
                    <?= $erros['filhos'] ?>
               </div>
          </div>
          <div class="form-group col-md-6">
               <label for="salario">Salario</label>
               <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : ''?>" id="salario" name="salario" placeholder="Salario" value="<?= $_POST['salario'] ?>">
               <div class="invalid-tooltip">
                    <?= $erros['salario'] ?>
               </div>
          </div>
     </div>

     <button class="btn btn-primary btn-lg">Enviar</button>
</form>