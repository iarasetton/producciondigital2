<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | NENE BSAS</title>
    <!--<link rel="stylesheet" type="text/css" href="estilos.css" />-->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!--CSS Bosttrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h1 class="logo"><a href="index.html"><img src="IMG/LOGOTIPONN1.png" alt="Logo" class="logo-img"></a></h1>
            
            <label class="label_hamburguesa" for="menu_hamburguesa">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="list_icon" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                  </svg>

            </label>
            <input type="checkbox" class="menu_hamburguesa" id="menu_hamburguesa">

            <ul class="ul_links">
                <li class="li_links">
                   <a href="productos.html" class="link">PRODUCTOS</a> 
                </li>
                <li class="li_links">
                    <a href="aboutus.html" class="link">NOSOTROS</a> 
                 </li>
                 <li class="li_links">
                    <a href="contacto.php" class="link">CONTACTO</a> 
                 </li>
            </ul>
            <!--<div id="derecha">
                <div class="auth-buttons">
                    <div class="buttonREGISTRO">
                        <a href="Login">LOG IN</a>
                    </div>
                </div>
                <div class="auth-buttons1">
                    <div class="buttonREGISTRO">
                        <a href="Registro">REGISTRARSE</a>
                    </div>
                </div>
            </div>-->

        </nav>
    </header>

    <main>

     <!--POP UP-->
     <div id="descuento" class="container-fluid text-center">
    <h2>¿Ya tienes cuenta?</h2>
    <h5>Crea una y disfruta de nuestras ofertas especiales y reserva prioritaria</h5>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        Registro de usuario
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        Inicio de sesión
    </button>
</div>

    <!-- Modal Registro-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="componentes/registro.php" method="POST">
                <div>
                    <label for="inputNombre" class="form-label">Nombre de usuario</label>
                    <input type="text" name="nombreRegistro" class="form-control" 
                    placeholder="Nombre" aria-label="Nombre" required minlength="3" maxlength="20">
                </div>
                <div>
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" aria-label="Nombre" name="mailRegistro" class="form-control" id="email"
                    placeholder="Ingresa tu correo electrónico" required minlength="10" maxlength="120" required>
                </div>
                <div>
                    <label for="inputNombre" class="form-label">Contraseña</label>
                    <input type="password" name="contrasenaRegistro" class="form-control" 
                    placeholder="Contraseña" aria-label="Nombre" required minlength="3" maxlength="20">
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Registro">
        </div>
        </div>
        </form>
    </div>
</div>

<!--Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar sesión</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="componentes/ingresar.php" method="POST">
            <div>
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" aria-label="Nombre" name="mailRegistro" class="form-control" id="email"
                    placeholder="Ingresa tu correo electrónico" required minlength="10" maxlength="120" required>
                </div>
                <div>
                    <label for="inputNombre" class="form-label">Contraseña</label>
                    <input type="password" name="contrasenaRegistro" class="form-control" 
                    placeholder="Nombre" aria-label="Nombre" required minlength="3" maxlength="20">
                </div>
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Ingresar">
        </div>
        </div>
        </form>
    </div>
</div>
        <section id="contacto" class="container">
            <div class="row">
                <h2>Contacto</h2>
                <p>¡Estamos aquí para ayudarte! Por favor, completa el siguiente formulario y nos pondremos en contacto contigo lo antes posible.</p>
                <div class="col-xl-5 col-md-12 contacto-info">
                    <img src="IMG/BANNER04.png" alt="Imagen contacto" class="img-fluid">
                </div>   
                <!--FORMULARIO!-->         
                <div class="col-xl-7 col-md-12 contacto-formulario">
                    <form action="componentes/enviar.php" id="formularioContacto"  method="post">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" aria-label="Nombre" required minlength="3" maxlength="20" >
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa tu apellido" aria-label="Apellido" required minlength="3" maxlength="20" >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="mail" placeholder="Ingresa tu correo electrónico" required minlength="10" maxlength="100" required>
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label">Número de celular</label>
                            <input type="tel" class="form-control" id="celular" name="tel" placeholder="Ingresa tu número de celular" required maxlength="12">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje"  maxlength="1000" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </form>            
                </div>
                
            </div>

            <!--PHP DE FORMULARIO ENVIADO-->

            <?php
            if(isset($_GET['ok'])) {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Formulario enviado!</strong> Tu mensaje fue procesado con éxito.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }               
            ?>
        </section>
   
<!--FOOTER-->
<section id="Contacto">
    <footer class="footer">
        <div class="redes-sociales">
            <a href="https://instagram.com/nene.bsas?igshid=M2RkZGJiMzhjOQ==" target="_blank"><img src="IMG/IG.png" alt="Instagram"></a>
            <a href="https://instagram.com/nene.bsas?igshid=M2RkZGJiMzhjOQ==" target="_blank"><img src="IMG/FB.png" alt="Facebook"></a>
            <a href="mailto:iarasetton@gmail.com"><img src="IMG/MAIL.png" alt="Correo"></a>
            <a href="https://wa.me/1163215159" target="_blank"><img src="IMG/WPP.png" alt="WhatsApp"></a>
        </div>
        <div class="texto-footer">
            <h3>COOL CLOTHES X COOL PEOPLE</h3>
        </div>
    </footer>
</section>

      <!--  JS de Boostrap---->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
      crossorigin="anonymous"></script>
  
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>


</html>