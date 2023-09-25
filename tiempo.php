<?php 
include('includes/header.php');

$bono = isset($_POST['bono'])?($_POST['bono']):'';
$piezas = isset($_POST['piezas'])?($_POST['piezas']):'';
$porcentaje = isset($_POST['porcentaje'])?($_POST['porcentaje']):'';
$minutos = '';
if($_POST){
    $minutos = ($piezas*$bono)/$porcentaje;
}
$minutos = (int)$minutos;

?>

<div class="card border-darck">
    <div class="card-header text-center">
        <h1>Minutos Invertidos</h1>
    </div>
  <div class="card-body">

    <form method="post">
    <div class="mb-3">
        <label for="" class="form-label" ><b>Introduce el Tiempo del Bono</b></label>
        <input type="float" require class="form-control" step="0.01" id="bono" name="bono"placeholder="Tiempo del Bono" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Piezas Montadas</b></label>
        <input type="number" require class="form-control" id="piezas" name="piezas" placeholder="Piezas">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Porcentaje</b></label>
        <input type="number" require class="form-control" id="porcentaje" name="porcentaje" placeholder="Porcentaje">
    </div>
    <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 35%;">Calcular</button>
    </form>
  </div>
</div>

<br><br>
    <?php if(!empty($minutos)){ ?>
        <div class="alert alert-success text-center" role="alert">
            <h4><?php echo $minutos?> minutos</h4>
        </div>
    <?php } ?>

<?php
include('includes/footer.php')
?>
