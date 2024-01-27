<?php

include_once('./template/app.php');

function contenido()
{
?>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h4 class="text-center">NUEVO REGISTRO</h4>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h5>Información General</h5>
            </div>
            <div>
                <button class="btn btn-secondary">Información Academica -></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row datosPersonales">
                <div class="col-sm-12 col-md-12">
                    <button class="btn btn-primary bt bt-primary" onclick="verModal('#datospersonales')">Agregar</button>
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-12 mb-4">
                            <strong>Nombre:</strong>
                        </div>
                        
                        <div class="col-sm-12 col-md-4 mb-4">
                            <strong>Sexo:</strong>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-4">
                            <strong>Fecha de Nacimiento:</strong>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-4">
                            <strong>Estado de Interes:</strong>
                        </div>

                        <div class="col-sm-12 col-md-12 mb-4">
                            <strong>Dirección:</strong>
                        </div>

                        <div class="col-sm-12 col-md-4 mb-4">
                            <strong>Télefono Uno:</strong>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-4">
                            <strong>Télefono Dos:</strong>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-4">
                            <strong>Correo Electrónico:</strong>
                        </div>
                    </div>
                </div>
            </div><!-- FIN DIV  -->

            <div class="row datosAcademicos">
                <div class="col-sm-12 col-md-12">

                </div>
            </div><!-- FIN DIV  -->

            <div class="row expLaboral">
                <div class="col-sm-12 col-md-12">

                </div>
            </div><!-- FIN DIV  -->

            <div class="row cursos">
                <div class="col-sm-12 col-md-12">

                </div>
            </div><!-- FIN DIV  -->

        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="datospersonales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">DATOS PERSONALES</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ingrese su CURP" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Consultar</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Nombre(s):</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Ap. Paterno:</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Ap. Materno:</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Sexo:</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Fecha de Nacimiento:</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>--Seleccione--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">Estado de Interes</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Dirección:</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Télefono Uno:</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Télefono Dos:</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Correo Eletrónico:</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 float-end">
                            <button class="btn btn-success bt bt-success float-end">
                                <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                                    <path fill="white" d="M840-680v480q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h480l160 160Zm-80 34L646-760H200v560h560v-446ZM480-240q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35ZM240-560h360v-160H240v160Zm-40-86v446-560 114Z" />
                                </svg> Guardar
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="./public/js/modales.js"></script>
<?php
}
?>