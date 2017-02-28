<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ol class="breadcrumb">
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>">Home</a></li>
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>songs/">Músicas</a></li>
  <li class="active">Editar Música</li>
</ol>

<h4>Editar Música</h4>

<form action="<?php echo URL_WITH_INDEX_FILE; ?>songs/updatesong" method="POST">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label for="nome">Artista</label>
              <input type="text" class="form-control" name="artista" value="<?php echo htmlspecialchars($song->artista, ENT_QUOTES, 'UTF-8'); ?>" autofocus required />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="autor">Faixa</label>
              <input type="text" class="form-control" name="faixa" value="<?php echo htmlspecialchars($song->faixa, ENT_QUOTES, 'UTF-8'); ?>" required />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="editora">Link</label>
              <input type="text" class="form-control" name="link" value="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>" required />
            </div>
          </div>

          <input type="hidden" name="song_id" value="<?php echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>" />
          
        </div>
        <div class="row">
          <div class="col-md-12">
            <input class="btn btn-primary pull-right" type="submit" name="submit_update_song" value="Salvar" />
          </div>
        </div>
      </div>
    </div>
  </div>
</form>