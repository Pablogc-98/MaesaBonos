<?php 
include('includes/header.php');
error_reporting(0);
$bono = isset($_POST['bono'])?($_POST['bono']):'';
$minutos = isset($_POST['minutos'])?($_POST['minutos']):'';
$porcentaje = isset($_POST['porcentaje'])?($_POST['porcentaje']):'';
$piezas = '';
if($_POST){
    $piezas = ($minutos*$porcentaje)/$bono;
}
$piezas = (int)$piezas;

?>

<div class="card border-darck">
    <div class="card-header text-center">
        <h1>Piezas Montadas</h1>
    </div>
  <div class="card-body">
    <form method="post">
    <div class="mb-3">
        <label for="" class="form-label" ><b>Introduce el Tiempo del Bono</b></label>
        <input type="number" require class="form-control" step="0.01" id="bono" name="bono"placeholder="Tiempo del Bono" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Minutos Empleados</b></label>
        <input type="number" require class="form-control" id="minutos" name="minutos" placeholder="Minutos">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Porcentaje</b></label>
        <input type="number" require class="form-control" id="porcentaje" name="porcentaje" placeholder="Porcentaje">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 35%;">Calcular</button>
    </form>
  </div>
</div>

<br><br>
    <?php if(!empty($piezas)){ ?>
        <div class="alert alert-success text-center" role="alert">
            <h4><?php echo $piezas?> montadas</h4>
        </div>
    <?php } ?>

<?php
include('includes/footer.php')
?>
