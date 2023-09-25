<?php 
include('includes/header.php');

$bono = isset($_POST['bono'])?($_POST['bono']):'';
$piezas = isset($_POST['piezas'])?($_POST['piezas']):'';
$minutos = isset($_POST['minutos'])?($_POST['minutos']):'';
$porcentaje = '';
if($_POST){
    $porcentaje = ($piezas*$bono)/$minutos;
}
$porcentaje = (int)$porcentaje;

?>

<div class="card border-darck formulario">
    <div class="card-header text-center">
        <h3>Porcentaje</h3>
    </div>
  <div class="card-body">

    <form method="post">
    <div class="mb-3">
        <label for="" class="form-label" ><b>Introduce el Tiempo del Bono</b></label>
        <input type="number" require class="form-control" id="bono" step="0.01" name="bono"placeholder="Tiempo del Bono" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Piezas Montadas</b></label>
        <input type="number" require class="form-control" id="piezas" name="piezas" placeholder="Piezas">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Minutos Empleados</b></label>
        <input type="number" require  class="form-control" id="minutos" name="minutos" placeholder="Minutos">
    </div>
    <button type="submit" class="btn btn-primary " style="margin-left: 35%;">Calcular</button>
    </form>
  </div>
</div>


    <?php if(!empty($porcentaje)){ 
        
        if($porcentaje < 111 && $porcentaje > 95){ ?>
            <div class="card">
                <img class="card-img-top" style="width: 22%;height: 22%; margin-left:35%" src="img/Oscaar105.png" alt="Title">
                    
                        <div class="alert alert-success text-center" role="alert">
                            <h6 class="card-title"><?php echo($porcentaje)?> , Buen trabajo!</h6>
                        </div>
                    
            </div>
        <?php } 
        if($porcentaje > 111 ){ ?>
            <div class="card">
                <img class="card-img-top" style="width: 25%;height: 25%; margin-left:35%" src="img/Oscaar112.png" alt="Title">
                    
                        <div class="alert alert-success text-center" role="alert">
                            <h6 class="card-title"><?php echo($porcentaje)?>%, Escelente trabajo!!!</h6>
                        </div>
                    
            </div
        
        <?php } 
        if($porcentaje > 80 && $porcentaje < 95){ ?>
           <div class="card">
                <img class="card-img-top" style="width: 22%;height: 22%; margin-left:35%" src="img/Oscaar90.png" alt="Title">
                   
                        <div class="alert alert-warning text-center" role="alert">
                            <h6 class="card-title"><?php echo($porcentaje)?>%, Hay que hacer un esfuerzo por montar mas piezas!!</h6>
                        </div>
                    
            </div
        
        <?php }
        if($porcentaje < 80 ){ ?>
           <div class="card">
                <img class="card-img-top" style="width: 22%;height: 22%; margin-left:35%" src="img/Oscaar80.png" alt="Title">
                    
                        <div class="alert alert-danger text-center" role="alert">
                            <h6 class="card-title"><?php echo($porcentaje)?>%, Como sigas asi te ire a visitar....</h6>
                        </div>
                    
            </div
        
        <?php }?>

    <?php } ?>

<?php
include('includes/footer.php')
?>