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
                
                 
                <div class="col-10"   style="background-color: #bd2130" ><h1 class="text-center" >Lista Almacen</h1></div>
 
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
                <div class="row">
                     <div class="col-4"></div>
                <input class="col-2" id ="CodigoProducto" class="form-control" type="text" placeholder="Buscar Producto" required="required">
                <button class="col-1" id="Buscar" class="btn btn-primary btn-block">Buscar</button>
                <div class="col-4"></div>
<!--                <button class="cols-2" id="CrearPedido" class="btn btn-primary btn-block">Crear pedido</button>-->
                </div>
            <br>
            
            
             <div class="row">
                 <div class="col-3"></div>
                 <div class="col-4">
            <table border="1" width="500">
                <tr>
                    <td>id_producto</td>
                    <td>nombre</td>
                    <td>cantidad</td>
                    <td>precio</td> 
                </tr>
        <?php
      //include ('./misFunciones.php');
      $mysqli = conectaBBDD();
      
        $sql= $mysqli ->query("SELECT * FROM producto");
        while($res= mysqli_fetch_array($sql)){
        ?>
                    <tr>
                    <td><?php echo $res['id_producto']?></td> 
                    <td><?php echo $res['nombre']?></td>
                    <td><?php echo $res['cantidad']?></td>
                    <td><?php echo $res['precio']?></td>
                    </tr>
                  
      
         <?php
        }
         ?>
                
            </table>
            </div>
                 
            </div>
            <br>
            

            <div class="row">
                 
                     <div class="col-4"></div>
                <input class="col-1" id ="Codigo" class="form-control" type="text" placeholder="ID" required="required">
                <input class="col-1" id ="Cantidad" class="form-control" type="text" placeholder="Cantidad" required="required">
                <button class="col-1" id="Pedido" class="btn btn-primary btn-block">Añadir</button>
                <div class="col-4"></div>

                </div>
            
            
     
<div class="row">

    <div class="col-10"> <h1 style="background-color: #007bff" class="text-center"  >Pedidos</h1> </div>
            
</div>   
            
       <div class="row">
                 <div class="col-3"></div>
                 <div class="col-4">     
            
            
            <table border="1" width="500">
                <tr>
                    <td>id_pedido</td>
                     <td>estado</td>
                    <td>articulo</td>
                    <td>cantidad</td>
                  
                </tr>
       
        <?php
     
        $sql= $mysqli ->query("SELECT * FROM pedido");
        while($res= mysqli_fetch_array($sql)){
        ?>
                    <tr>
                    <td><?php echo $res['id_pedido']?></td> 
                    <td><?php echo $res['estado']?></td> 
                    <td><?php echo $res['articulo']?></td>
                    <td><?php echo $res['cantidad']?></td>
                    
                    </tr>
   
         <?php
        }
         ?>
                
            </table>
     
                 </div>
                 </div>
        
                
    
           <br>
            

            <div class="row">
                 
                 <div class="col-5"></div>
                <input class="col-1" id ="CodigoProducto1" class="form-control" type="text" placeholder="ID" required="required">              
                <button class="col-1" id="Buscar" class="btn btn-primary btn-block">Realizar</button>
                <div class="col-5"></div>
                
                 <div class="col-12"></div>
                  <div class="col-5"></div>
                <input class="col-1" id ="CodigoProducto2" class="form-control" type="text" placeholder="ID" required="required">              
                <button class="col-1" id="Buscar" class="btn btn-primary btn-block">Anular</button>
                <div class="col-5"></div>

                </div>
    
        </div>
    </body>
    
<!--    <?php
     function pedido(){
        
         
         $sql= $mysqli ->query("INSERT INTO pedido(id_pedido,estado,articulo,cantidad)VALUES('')");
     }
     ?>
    -->
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        
  
     $('#botonPedido').click(function(){

            $('#principal').load("colaPedidos.php",{
                
                
            });
        });
        
        
        
     
     
        
        
         
        
        
        

    
    
    </script>
</html>
