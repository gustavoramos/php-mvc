<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ol class="breadcrumb">
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>">Home</a></li>
  <li class="active">Pessoas</li>
</ol>

<div class="panel panel-default">
  <div class="panel-body">
    <a href="<?php echo URL_WITH_INDEX_FILE; ?>pessoas/novapessoa"><button type="button" class="btn btn-success">Nova Pessoa</button></a>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
          </tr> 
        </thead>
        <tbody>
          <?php foreach ($pessoas as $pessoa) { ?>
            <tr>
              <th scope="row">
                <?php if (isset($pessoa->id)) echo htmlspecialchars($pessoa->id, ENT_QUOTES, 'UTF-8'); ?>
              </th>
              <td>
                <?php if (isset($pessoa->nome)) echo htmlspecialchars($pessoa->nome, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <?php if (isset($pessoa->email)) echo htmlspecialchars($pessoa->email, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <a href="<?php echo URL_WITH_INDEX_FILE . 'pessoas/excluirpessoa/' . htmlspecialchars($pessoa->id, ENT_QUOTES, 'UTF-8'); ?>">Excluir</a>
              </td>
              <td>
                <a href="<?php echo URL_WITH_INDEX_FILE . 'pessoas/editarpessoa/' . htmlspecialchars($pessoa->id, ENT_QUOTES, 'UTF-8'); ?>">Editar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
