<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="  ">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/estilos.css">
  
</head>

<body id="cuerpo">
  <div class="menu">
        <button class="button" type="button" onclick="fondo()" id="boton1">Ejercicio1</button><p>
        <button class="button" type="button" onclick="esconder()" id="boton2">Ejercicio2</button><p>
        <button class="button" type="button" onclick="crear()" id="boton3">Ejercicio3</button><p>
        <!--<button class="button" type="button" onclick="crear()" id="boton4">Ejercicio4</button><p>-->
        <div id="div"></div>

  </div>

    <h1>Formulario de Contacto</h1>
   <div class="info"><a href="" target="_blank"><p>Desarrollo de Aplicaciones Web <i class="fa fa-heart"></i> </p></a></div>
  
  <form>
      <h1>Debes responder todas las preguntas, Por favor no dudes en contactarme :</h1>
      
    <div class="contentform">
      <div id="sendmessage"> Tu mensaje ha sido enviado exitosamente. Gracias. </div>


      <div class="leftcontact">
            <div class="form-group">
              <p>Apellido<span>*</span></p>
              <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="text" id="apellido" />
       </div> 

            <div class="form-group">
            <p>Nombre <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
        <input type="text" id="nombre" />
      </div>

      <div class="form-group">
      <p>E-mail <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" />
      </div>  

      <div class="form-group">
      <p>Empresa <span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
        <input type="text" id="empresa" onmousemove="genio()" />
      </div>

      <div class="form-group">
      <p>Direccion de Empresa<span>*</span></p>
      <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
        <input type="text"/>
      </div>

      <div class="form-group">
      <p>Codigo Postal <span>*</span></p>
      <span class="icon-case"><i class="fa fa-map-marker"></i></span>
        <input type="text" />
      </div>  



  </div>

  <div class="rightcontact" id="bloqueR">  

      <div class="form-group">
      <p>Ciudad <span>*</span></p>
      <span class="icon-case"><i class="fa fa-building-o"></i></span>
        <input type="text"  />
      </div>  

      <div class="form-group">
      <p>Numero de Telefono <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-phone"></i></span>
        <input type="text" />
      </div>

      <div class="form-group">
      <p>Funcion <span>*</span></p>
      <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text"  />
      </div>

      <div class="form-group">
      <p>Asunto <span>*</span></p> 
      <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="text" />
      </div>
    
      <div class="form-group">
      <p>Mensaje <span>*</span></p>
      <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="message" rows="14"></textarea>
      </div>  
  </div>
  </div>
<button type="submit" class="bouton-contact" onclick="validar()">Enviar</button>
  
</form> 

  
</body>
</html>

