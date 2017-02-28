<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ol class="breadcrumb">
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>">Home</a></li>
  <li class="active">Músicas</li>
</ol>

<div class="panel panel-default">
  <div class="panel-body">
    <a href="<?php echo URL_WITH_INDEX_FILE; ?>songs/newsong"><button type="button" class="btn btn-success">Nova Música</button></a>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Artista</th>
            <th>Faixa</th>
            <th>Link</th>
            <th>Excluir</th>
            <th>Editar</th>
          </tr> 
        </thead>
        <tbody>
          <?php foreach ($songs as $song) { ?>
            <tr>
              <th scope="row">
                <?php if (isset($song->id)) echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>
              </th>
              <td>
                <?php if (isset($song->artista)) echo htmlspecialchars($song->artista, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <?php if (isset($song->faixa)) echo htmlspecialchars($song->faixa, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <?php if (isset($song->link)) echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <a href="<?php echo URL_WITH_INDEX_FILE . 'songs/deletesong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>">Excluir</a>
              </td>
              <td>
                <a href="<?php echo URL_WITH_INDEX_FILE . 'songs/editsong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>">Editar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
