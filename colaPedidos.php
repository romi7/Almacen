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
    </head>
    <body style="background-color:#ccffff ">
        <div class="container" id="principal" >
        
        
       <div class="row">
                
                 <div class="col-2"  style="background-color:#007bff"  > 
                
                  <button  id="botonAlmacen">Almacen</button>
                  <button  id="botonPedido" >Pedidos</button> 
                  </div>
                <div class="col-10"   style="background-color: #bd2130" ><h1 class="text-center" >Pedidos</h1></div>
    
    
        </div>
            
            
            
            <div class="row">
                <input class="col-2" id ="CodigoProducto" class="form-control" type="text" placeholder="Buscar Producto" required="required">
                <button class="cols-4" id="Buscar" class="btn btn-primary btn-block">Buscar</button>
                <div class="col-8"></div>
            </div>
    
    
    </body>
    
    
     <script>
    
     $('#botonAlmacen').click(function(){

            $('#principal').load("listaAlmacen.php",{
                
            });
        });

    
    
    </script>

    
    
    
    
</html>
