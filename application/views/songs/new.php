<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ol class="breadcrumb">
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>">Home</a></li>
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>songs/">Músicas</a></li>
  <li class="active">Nova Música</li>
</ol>

<h4>Nova Música</h4>

<form action="<?php echo URL_WITH_INDEX_FILE; ?>songs/addsong" method="POST">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label for="nome">Artista</label>
              <input type="text" class="form-control" name="artista" value="" autofocus required />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="autor">Faixa</label>
              <input type="text" class="form-control" name="faixa" value="" required />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="editora">Link</label>
              <input type="text" class="form-control" name="link" value="" required />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input class="btn btn-primary pull-right" type="submit" name="submit_add_song" value="Salvar" />
          </div>
        </div>
      </div>
    </div>
  </div>
</form>