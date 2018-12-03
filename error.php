<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<h1>EL USUARIO Y/O LA CONTRASEÑA SON INCORRECTAS</h1>
<html>
    <div class="modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #ffcccc">
        <div class ="container" id="primario" >
            <br>  
            <br> 
            <br>  
            <br> 


            <div class="row" style="background-color:#ffffff">  
                <div class="col-3"  style="background-color: #ffcccc"></div>
                <div class="col-6" > <h2 class="text-center" style="color:black;"> <img src="imagenes/icono_sesion.png" class="img-fluid" alt="Responsive image" align="center"> </h2> </div> 
                <div class="col-3"  style="background-color: #ffcccc"></div> 
                <br> 
                <br>
                <div class="col-3"  style="background-color: #ffcccc"></div>
                <div class="col-6" style="background-color:#ffffff" >  <h2 fo class="text-center" style="color:#007bff;"> INICIO DE SESION</h2></div> 
                <div class="col-3"  style="background-color: #ffcccc"></div> 
                <div class="col-3"  style="background-color: #ffcccc"></div>
                <div class="col-6">
                    <br><br>
                    <div class="row"> 
                        <div class="col-3"></div>
                        <div class="col-6" > <input  id="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required"></div> 
                        <div class="col-3"></div>
                        <br>  <br>
                        <div class="col-3"></div>
                        <div class="col-6" ><input id="cajaPassword" class="form-control" type="password" placeholder="Contraseña"> </div>
                        <div class="col-3"></div>
                        <br> 
                        <br> 
                        <br>
                        <div class="col-3"></div>
                        <div class="col-3" ><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#btnAnyadir">Añadir</button></div>  
                        
                        <div class="col-3" ><button id="boton2" class="btn btn-primary btn-block">login</button></div>
                        <div class="col-2"></div>
                        <br>  <br>
                    </div>


                </div>
                <div class="col-3"  style="background-color: #ffcccc"></div>  
                <br> 
                <br>
                <div class="col-3"  style="background-color: #ffcccc"></div>
                <div class="col-6" style="background-color:#ffffff" > <h6  class="text-center" style="color:#007bff;">¿has olvidado tu contraseña?</h6></div> 
                <div class="col-3"  style="background-color: #ffcccc"></div>



            </div>

        </div> 
    </body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        //document ready se ejecuta cuando la página se ha cargado correctamente
        $(document).ready(function () {
            //$('#cajaNombre').hide(); 
        });

        $('#botonRegristo').click(function () {
            var _cajaUsu = $('#cajaUsu').val();
            var _cajaPass = $('#cajaPass').val();
            var _cajaCorreo = $('#cajaCorreo').val();
            var _cajaCodigo = $('#cajaCodigo').val();

            $('#principal').load("regristo.php", {
                cajaUsu: _cajaUsu,
                cajaPass: _cajaPass,
                cajaCorreo: _cajaCorreo,
                cajaCodigo: _cajaCodigo

            });
        });



        $('#boton2').click(function () {
            //leo el contenido de las cajas de nombre y contraseña
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaPassword = $('#cajaPassword').val();


            $('#primario').load("login.php", {
                cajaNombre: _cajaNombre,
                cajaPassword: _cajaPassword
            });
        });

    </script>


    <div class="modal fade" id="btnAnyadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" style="color:#007bff;" id="exampleModalLabel">Registro</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <input id="cajaUsu" type="text" class="form-control"placeholder="Usuario" id="recipient-name">
                    <br>

                    <input id="cajaCorreo" type="text" class="form-control" placeholder="correo electronico" id="recipient-name">
                    <br>

                    <input id="cajaPass" type="text" class="form-control" placeholder="password" id="recipient-name"> 
                    <br>
                    <input id="cajaCodigo" type="text" class="form-control" placeholder="codigo de empleado" id="recipient-name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button  id="botonRegistro"type="button" class="btn btn-primary">Añadir</button>
                </div>
            </div>
        </div>
    </div>
</html>
