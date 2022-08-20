<?php
//aqui es el index principal, donde se hace la asistencia 
//y el login si es administrador
require_once ("../model/conexion.php");

date_default_timezone_set('America/Lima');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
        
        <title>Asistencia</title>
    </head>
    <body style="background-color: #e4efe7;">
        <nav class="d-flex justify-content-between bg-dark">
            <a href="index.php"><img url="https://github.com/richarquispe-prog/sistema_bibliotecaV2.0/blob/main/resources/img/epis1.png"> </a>
            
        </nav> 
        <div class="container">
            <div>
                <h1 class="h4 mb-4 mt-5">Marcado Diario</h1>
                <hr class="bg-dark" style="height:2px; width:100%; border-width:0; color:#343a40; background-color:#343a40">
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <?php
                    //aqui mostramos la fecha 
                    //y la hora
                    $fecha_actual=date('d-m-Y');
                    $hora_eval = date('H:i:s',strtotime("12 PM"));
                    //aqui se chekea la entrada automaticamente
                    if($hora_eval < date('H:i:s')){
                        $checked='checked';
                            $checked2='';
                        //aqui la salida
                    }else {
                        $checked2='checked';
                        $checked='';
                    }
                    ?>
                    <div>
                        <div class="date1" style="font-size:25px; ">
                            <span id="weekDay" class="weekDay h4"></span>,
                            <span id="day" class="day h4"></span> <span class="h4">de</span> 
                            <span id="month" class="month h4"></span> <span class="h4">del</span> 
                            <span id="year" class="year h4"></span>
                        </div>
                        <div class="clock " style="font-size:25px; ">
                            <span id="hours" class="hours h4"></span> :
                            <span id="minutes" class="minutes h4"></span> :
                            <span id="seconds" class="seconds h4"></span>
                        </div>
                    </div>
                </div>
                <form class="col-12 mt-5" action="">
                    <div class="row w100"> 
                        <div class="col-12 my-3">
                            <p style="font-size:20px; font-weight:bold; color:#325288;">DIGITE EL CODIGO DE ESTUDIANTE Y LA TECLA ENTER</p>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="form-check me-4">
                                <input class="form-check-input" type="radio" name="entrada" id="entrada" value="E" <?php echo $checked2?>>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Entrada
                                </label>
                            </div>
                                <div class="form-check me-4">
                                    <input class="form-check-input" type="radio" id="salida"  name="salida" value="S" <?php echo $checked?> readonly >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Salida
                                    </label>
                                </div>
                            </div>
                        <div class="col-lg-6 col-12">
                            <div class="input-group mt-2">
                                <span class="input-group-text text-light" id="basic-addon1" style="background-color:#325288;">Codigo de Asignatura:</span>
                                <input type="text" class="form-control" name="codigo" id="codigo" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-lg-6 col-12">
                            <div class="alert alert-primary mt-3 mensajes" role="alert">  
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
<script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="../js/marcar.js"></script>
        <script src="../js/clock.js"></script>
        <script>
            $('.date').datepicker({
                //agarramos la fecha
                format: 'dd-mm-yyyy',
            })
        </script>
        <script src="../js/validacion.js"></script>
    </body>
</html>