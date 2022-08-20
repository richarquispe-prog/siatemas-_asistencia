<!doctype html>
<html lang="es">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body class="p-3 mb-3 bg-white" style="background-image: url(./img/verde1.png);line-height: 1; ">
    <div class="conteiner mt-5">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-5 offset-lg-3">
                    <div class="card text-white bg-success">
                        <p align="center"><strong>SISTEMA DE ASISTENCIA</strong> </p>
                        <div class="card-body" align="center">
                            <img class="img-fluid" src="./img/epis.png" height="200px" width="200px" alt="Title">
                        </div>
                        <div class="card-body" align="center">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#estudent"
                                style="color: white" target="_blank">
                                Estudiante
                            </button>

                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#addprofile"
                                style="color: white">
                                Administrador
                            </button>

                            <!-- Modal -->

                            <!-- MODALS -->

                            <!-- Modal: Login Student -->
                            <div class="modal fade" id="estudent" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" style="color: black;">
                                <div class="modal-dialog">
                                    <div class="modal-content img_log">
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalLabel">ESTUDIANTE</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <img src="./img/sistemas.png">
                                        <div class="modal-body">
                                            <form method="post" action="./Controller/logestudent.php" class="adm_login"
                                                autocomplete="on">

                                                <div class=" txt_field">
                                                    <input name="email" type="number" required class="form-control"
                                                        id="exampleInputEmail1" placeholder="ingrese su codigo institucional">
                                                    <span></span>
                                                    <label for="exampleInputEmail1" class="form-label">Codigo </label>
                                                </div>

                                                <div class="mb-3 txt_field">
                                                    <input name="password" type="password" required class="form-control"
                                                        id="exampleInputPassword1">
                                                    <span></span>
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">Contraseña</label>
                                                </div>

                                                <div class="modal-footer contraseña">
                                                    <input type="submit" value="Login">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                </div>
                                            </form>
                                        </div>

                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal: Login Admin -->
                            <div class="modal fade" id="addprofile" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" style="color: black;">
                                <div class="modal-dialog">
                                    <div class="modal-content img_log">

                                        <div class="modal-header ">

                                            <h5 class="modal-title" id="exampleModalLabel">ADMINISTRADOR </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <img src="./img/sistemas.png">
                                        <div class="modal-body">
                                            <form method="POST" action="./controller/logadmin.php" class="adm_login"
                                                autocomplete="on">

                                                <div class=" txt_field">
                                                    <input name="email_" type="text" required class="form-control"
                                                        id="exampleInputEmail1" placeholder="Ingrese identificador" ><br>
                                                </div>

                                                <div class="mb-3 txt_field">
                                                    <input name="password_" type="password" required
                                                        class="form-control" id="exampleInputPassword1" placeholder="Ingrese contraseña">
                                                    <span></span>
                                                </div>

                                                <div class="modal-footer contraseña">
                                                    <input type="submit" value="Login">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                </div>
                                            </form>
                                        </div>

                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

</body>
</div>
</div>
</div>
</div>

</div>
</div>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>
</body>

</html>