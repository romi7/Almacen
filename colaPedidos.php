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
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            <div class="row">
                <input class="col-2" id ="CodigoProducto" class="form-control" type="text" placeholder="Codigo Pedido" required="required">
                <button class="cols-1" id="Buscar" class="btn btn-primary btn-block">Buscar</button>
                  
     
            </div>
            
            
             <table border="1" width="500">
                <tr>
                    <td>id_pedido</td>
                    <td>contenido</td>
                    <td>estado</td>                    
                </tr>
        <?php
      include ('misFunciones.php');
      $mysqli = conectaBBDD();
      
        $sql= $mysqli ->query("SELECT * FROM pedido");
        while($res= mysqli_fetch_array($sql)){
        ?>
                    <tr>
                    <td><?php echo $res['id_pedido']?></td> 
                    <td><?php echo $res['contenido']?></td>
                    <td><?php echo $res['estado']?></td>                  
                    </tr>
                  
      
         <?php
        }
         ?>
                
            </table>
            
            
            
            <div class="row">
              <div class="col-9"></div>
              <input class="col-2" id ="CodigoProducto" class="form-control" type="text" placeholder="Codigo de Pedido" required="required">
              <button class="cols-1" id="Buscar" class="btn btn-primary btn-block">Enviado</button>   
                
              <div class="col-9"></div> 
              <div class="col-9"></div>
              <input class="col-2" id ="CodigoProducto" class="form-control" type="text" placeholder="Codigo de Pedido" required="required">
              <button class="cols-1" id="Buscar" class="btn btn-primary btn-block">Anulado</button>
            
              </div>
            
            
            
            
            
            
           
            
    
    
    </body>
    
    
     <script>
    
     $('#botonAlmacen').click(function(){

            $('#principal').load("listaAlmacen.php",{
                
            });
        });

    
    
    </script>

    
    
    
    
</html>

