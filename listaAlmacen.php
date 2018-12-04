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

    
    <body id="body">
        
        
        <div class="container" id="principal"  style="background-color: #d1ecf1">
        
         
            <div class="row">
                
                 
                <div class="col-12"   style="background-color: #e4606d" ><h1 class="text-center" >Lista Almacen</h1></div>
 
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
                <button class="col-1" class="btn btn-primary btn-block" onclick="recargar();">Refrescar</button>
                <div class="col-4"></div>
<!--                <button class="cols-2" id="CrearPedido" class="btn btn-primary btn-block">Crear pedido</button>-->
                </div>
            <br>
            
            
             <div class="row">
                 <div class="col-3"></div>
                 <div class="col-4">
            <table border="1" width="500">
                <tr style="border: 3px solid" >
                    <td style="color: #007bff">id_producto</td>
                    <td style="color: #007bff">nombre</td>
                    <td style="color: #007bff">cantidad</td>
                    <td style="color: #007bff">precio</td> 
                </tr>
        <?php
      
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
                 
                     <div class="col-5"></div>
          
                <button class="col-1" id="Pedido" class="btn btn-primary btn-block" data-toggle="modal" data-target="#btnAnyadir">Añadir</button>
                <div class="col-4"></div>

                </div>
            
            <br>
             <br>
              <br>
               <br>
                <br>
                 <br>
     
<div class="row">

    <div class="col-12"> <h1 style="background-color: #34ce57" class="text-center"  >Pedidos</h1> </div>
            
</div>   
            
       <div class="row">
                 <div class="col-3"></div>
                 <div class="col-4">     
            
            
            <table border="1" width="500">
                <tr style="border: 3px solid">
                    <td style="color: #007bff">id_pedido</td>
                    <td style="color: #007bff">estado</td>
                    <td style="color: #007bff">articulo</td>
                    <td style="color: #007bff">cantidad</td>
                  
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
                 <br>
                 
                  <div class="col-5"></div>
                <input class="col-1" id ="CodigoProducto2" class="form-control" type="text" placeholder="ID" required="required">              
                <button class="col-1" id="Buscar" class="btn btn-primary btn-block">Anular</button>
                
                <div class="col-5"></div>
                
         
                

                </div>
           <br>
           <br>
    
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
        
  
     
        
      function recargar(){
           $('#body').load("listaAlmacen.php");
       }
     
     
        
        
         
        
        
        

    
    
    </script>
    <div class="modal fade" id="btnAnyadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" style="color:#007bff;" id="exampleModalLabel">Añadir pedido</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  
                    <input id="cajaUsu" type="text" class="form-control"placeholder="Id_articulo" id="recipient-name">
                    <br>
                  
                    <input id="cajaCorreo" type="text" class="form-control" placeholder="cantidad" id="recipient-name">
                    <br>
                   
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button  id="botonRegistro"type="button" class="btn btn-primary">Añadir</button>
                </div>
            </div>
        </div>
    </div>
</html>
