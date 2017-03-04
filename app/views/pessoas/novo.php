<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ol class="breadcrumb">
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>">Home</a></li>
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>pessoas/">Pessoas</a></li>
  <li class="active">Nova Pessoa</li>
</ol>

<h4>Nova Pessoa</h4>

<form action="<?php echo URL_WITH_INDEX_FILE; ?>pessoas/adicionarpessoa" method="POST">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" value="" autofocus required />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="" required />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input class="btn btn-primary pull-right" type="submit" name="submit_adicionar_pessoa" value="Salvar" />
          </div>
        </div>
      </div>
    </div>
  </div>
</form>