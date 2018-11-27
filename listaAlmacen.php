<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>

    
    <body >
        
        
        <div class="container" id="principal" style="background-color:#b1dfbb">
        
        
            
            <div class="row">
                
                 <div class="col-2"  style="background-color:#007bff"  > 
                
                  <button  id="botonAlmacen">Almacen</button>
                  <button  id="botonPedido" >Pedidos</button> 
                  </div>
                <div class="col-10"   style="background-color: #bd2130" ><h1 class="text-center" >Lista Almacen</h1></div>
                
               
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
                <div class="row">
                <input class="col-2" id ="CodigoProducto" class="form-control" type="text" placeholder="Buscar Producto" required="required">
                <button class="cols-4" id="Buscar" class="btn btn-primary btn-block">Buscar</button>
                <div class="col-8"></div>
                <button class="cols-2" id="CrearPedido" class="btn btn-primary btn-block">Crear pedido</button>
                </div>
            
            
            
            <div id="hacerPedidos"  class="row">
                <div class="col-10"></div>
                <input class="col-2" id ="CodigoProducto2" class="form-control" type="text" placeholder="Codigo Producto" required="required">
                <div class="col-12"></div>
                <div class="col-10"></div>
                <input class="col-2" id ="Cantidad" class="form-control" type="text" placeholder="Cantidad" required="required">
                <div class="col-10"></div>
                <button class="cols-2" id="Añadir" class="btn btn-primary btn-block">Añadir</button>
                
            </div>
            
            
                
                
            
            
         
             
    
    
    
        
        
   
        
        
                </div>
    
    
    
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        
       $('#hacerPedidos').hide(); 
       
       
        $('#CrearPedido').click(function(){
            $('#CrearPedido').hide(); 
            $('#hacerPedidos').show();
            
 
        });
       
        
        
        
    
     $('#botonPedido').click(function(){

            $('#principal').load("colaPedidos.php",{
                
            });
        });

    
    
    </script>
</html>
