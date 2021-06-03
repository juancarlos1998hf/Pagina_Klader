<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/data.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
    
              <h1>ÁNDRES KLADER</h1>

        <div class="contenido">

          <form action="respuesta.php" method="post">

            <fieldset>
              <legend>Información Personal</legend>
              <label for="nombre">Nombre
                <input type="text" name="nombre" id="nombre" required>
              </label>
              
              <label for="apellido">Apellido
                <input type="text"  name="apellido" id="apellido" required>
              </label>
              <hr>
              <!-- Desde un checkbox-->
    
              <label for="notificaciones">Recibir Notificaciones
                <input type="checkbox" name="notificaciones" id="notificaciones"required>
              </label>
              
            </fieldset> 
           

            <fieldset>
              <legend>comunicación</legend>
              <label for="telefono">Telefono
                <input type="text" name="telefono" id="telefono" required>
              </label>
              
              <label for="correo">Correo
                <input type="text"  name="correo" id="correo" required>
              </label>
              <hr>

              </fieldset> 



              <fieldset>
              <legend>ubicación domicilio</legend>

              <label for="departamento">Departamento
                <input type="text"  name="departamento" id="departamento" required>
              </label>

              <label for="ciudad">Ciudad
                <input type="text"  name="ciudad" id="ciudad" required>
              </label>

              <label for="direccion">Dirrección
                <input type="text" name="direccion" id="direccion" required>
              </label>
              
              <label for="barrio">Barrio
                <input type="text"  name="barrio" id="barrio" required>
              </label>
              <hr>
              </fieldset>


              <fieldset>
              <legend>¿Cada cuanto te gustaría que hubieran promociones? </legend>

              <select name= "informacion"required>
                <option value="">- Selecciona-</option>
                <option value="1">Diaria</option>
                <option value="2">Semanal</option>
                <option value="3">Mensual</option>
              </select>
              </fieldset>
              
               <fieldset>
                <legend>¿Te gustaria ser cliente especial? </legend>
                  <label for="pres">Si
                    <input type='radio' id='pres' name='opc' value='Si'>
                  </label>  
                  <label for="vir">No
                    <input type='radio' id='vir' name='opc'  value='No'>
                  </label>
                  
                  </fieldset>


              </fieldset>
              

              
                            
            </fieldset>
            <!--Desde select (menú desplegable)-->
            <fieldset>
              <legend>¿Dónde conociste de nosotros?</legend>

              <select name= "cuidado"required>
                <option value="">- selcciona una -</option>
                <option value="pagina web">Pagina Web</option>
                <option value="amigo">Un amigo</option>
                <option value="radio">Radio</option>
                <option value="tele">Televisión</option>
                <option value="carteles">Carteles</option>
              
              </select>
            </fieldset>


            
            <fieldset>
              <legend>Si seleccionaste amigo dejanos saber de el.</legend>
              <label for="nombre">Nombre
                <input type="text" name="nombre" id="nombre" required>
              </label>
              
              <label for="apellido">Apellido
                <input type="text"  name="apellido" id="apellido" required>
              </label>
              <hr>
              <!-- Desde un checkbox-->
              
            </fieldset> 
            <!--Desde radiobuttons-->
         
            <fieldset>
              <legend> Comentarios: </legend >
                <label for="mensaje"> Mensaje <br/>
                  <textarea name= "mensaje" rows="8" cols="40" id="mensaje"></textarea>
                </label>

            </fieldset>
            <!--Botones-->
            <fieldset>
              <input  class="button" name= "enviar" type="submit" value="Enviar" required>
              <input class="button" type="reset">
            </fieldset>
          </form>


        </div>
    </div>




  </body>
</html>
