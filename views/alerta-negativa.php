<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION['alertas-negativas']; //TEXTO DE LA ALERTA ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php require_once 'controller/eliminar_alerta.php'; ?>