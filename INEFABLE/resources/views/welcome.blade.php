<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Presentación - AMAZON</title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css" />
<style>
 body{
    background-image: url("https://www.civitatis.com/f/peru/huanuco/huanuco-m.jpg");
    
    background-attachment: fixed;
    background-size: 
     100% 100%;
    
}



/* Estilos del encabezado */
.header {
    background-color: #101010;
    padding: 20px;
}

.logo {
    font-size: 36px;
    color: #000000;
    text-align: center;
    font-family: Elephant;
}

/* Estilos del contenido */
.content {
background-color: rgba(36, 211, 144, 0.452);;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 730px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;

}

.title {
    font-size: 24px;
    color: #000000;
    font-family: castellar;
}

/* Estilos de los botones futuristas */
.btnInicio {
    display: inline-block;
    padding: 10px 20px;
    margin: 10px;
    font-size: 18px;
    text-decoration: none;
    color: rgb(4, 255, 16);
    border: 2px solid #0babe100;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;

    background-color: #000000;
    
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); /* Agrega sombra */
}

.btnInicio:hover {
    background-color: #0babe1; /* Cambia el color de fondo al pasar el cursor */
    color: #000000; /* Cambia el color del texto al pasar el cursor */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Aumenta la sombra al pasar el cursor */
}


/* Estilos del pie de página */
.footer {
    margin-top: 30px;
}

.logo-footer {
    width: 250px;
    height: auto;
}

/*         ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */

body {
    font-family: 'Overpass', sans-serif;
    font-weight: normal;
    font-size: 100%;
    color: #1b262c;
    
    margin: 0;
  
}

#contenedor {
    display: flex;
    align-items: center;
    justify-content: center;
    
    margin: 0;
    padding: 0;
    min-width: 100vw;
    min-height: 100vh;
    width: 100%;
    height: 100%;
}

#central {
    max-width: 400px;
    width: 100%;
}

.titulo {
    font-family: castellar;
    font-size: 180%;
    color:#bbe1fa;
    text-align: center;
    margin-bottom: 20px;
    color: #000000;
}

#login {
    width: 100%;
    padding: 50px 30px;
    background-color: rgba(73, 155, 35, 0.651);
    margin-left: 165px;
    
    -webkit-box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
    -moz-box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
    box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
    
    border-radius: 3px 3px 3px 3px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
    
    box-sizing: border-box;
}

#login input {
    font-family: 'Overpass', sans-serif;
    font-size: 110%;
    color: #1b262c;
    
    display: block;
    width: 100%;
    height: 40px;
    
    margin-bottom: 10px;
    padding: 5px 5px 5px 10px;
    
    box-sizing: border-box;
    
    border: none;
    border-radius: 3px 3px 3px 3px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
}

#login input::placeholder {
    font-family: 'Overpass', sans-serif;
    color: #000000;
}

#login button {
    font-family: 'Overpass', sans-serif;
    font-size: 110%;
    color:green;
    width: 100%;
    height: 40px;
    border: none;
    
    border-radius: 3px 3px 3px 3px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
    
    background-color: #000000;
    
    margin-top: 10px;
}

#login button:hover {
    background-color: #0f4c75;
    color:#bbe1fa;
}

.pie-form {
    font-size: 90%;
    text-align: center;    
    margin-top: 15px;
}

.pie-form a {
    display: block;
    text-decoration: none;
    color: #000000;
    margin-bottom: 3px;
}

.pie-form a:hover {
    color: #000000;
}

.inferior {
    margin-top: 10px;
    font-size: 90%;
    text-align: center;
}

.inferior a {
    display: block;
    text-decoration: none;
    color: #bbe1fa;
    margin-bottom: 3px;
}

.inferior a:hover {
    color: #000000;
}





/*@keyframes slide {
	0% { transform: translateX(0); }
	10% { transform: translateX(0); }

	15% { transform: translateX(-100%); }
	30% { transform: translateX(-100%); }

	35% { transform: translateX(-200%); }
	50% { transform: translateX(-200%); }

	55% { transform: translateX(-300%); }
	70% { transform: translateX(-300%); }

	75% { transform: translateX(-400%); }
	90% { transform: translateX(-400%); }

	95% { transform: translateX(-500%); }
	100% { transform: translateX(-500%); }
}

* { box-sizing: border-box; }

html { scroll-behavior: smooth; }

body {
	font-family: sans-serif;
}

.wrapper {
	max-width: 1200px;
	margin: 0 auto;
}

.slider {
	position: relative;
}

.slides {
	position: relative;
	display: flex;
	overflow: hidden;
}

.slide {
	width: 100vw;
	flex-shrink: 0;
	animation-name: slide;
	animation-duration: 20s;
	animation-iteration-count: infinite;
	animation-timing-function: linear;
}

.slides:hover .slide {
	animation-play-state: paused;
}

.slide img {
	width: 100%;
	vertical-align: top;
}

.slide a {
	width: 100%;
	display: inline-block;
	position: relative;
}

.caption {
	color: white;
	text-shadow: 1px 1px black;
	font-size: 8vw;
	position: absolute;
	bottom: 8vw;
	right: 4vw;
}

.slide:target {
	animation-name: none;
	position: absolute;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	z-index: 50;
}

.slider-controler {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	text-align: center;
	padding: 5px;
	background-color: rgba(0,0,0,0.5);
	z-index: 100;
}

.slider-controler li {
	margin: 0 0.5rem;
	display: inline-block;
	vertical-align: top;
}

.slider-controler a {
	display: inline-block;
	vertical-align: top;
	text-decoration: none;
	color: white;
	font-size: 1.5rem;
}

@media only screen and (min-width: 1200px) {
	.slide {
		width: 1200px;
	}

	.caption {
		font-size: 96px;
		bottom: 96px;
		right: 50px;
	}
}*/ 
</style>
</head>
<body>
    <div class="content">
        <h1 class="logo">BIENVENIDOS</h1>

    
        <h3 class="title">BIENVENIDOS A LA PAGINA WEB DE JEAN</h3>

     
        <a href="MenudeSISTEMA.html" class="btnInicio">ADMINISTRADOR</a>
        <a href="AMAZON.HTML" class="btnInicio">CLIENTES</a>
    

        
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        <H5>INICIA SESION PARA VISITAR A HUANUCO</H5>
                    </div>
                    <form id="loginform">
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        
                        <input type="password" placeholder="Contraseña" name="password" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="#">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>
               
            </div>
        
            <div class="wrapper">
  <div class="slider" id="slider">
    <ul class="slides">
      <li class="slide" id="slide1">
        <a href="#">
          <p class="caption">Texto llamativo</p>
          <img src="https://www.shutterstock.com/es/search/huanuco" alt="photo 1">
        </a>
      </li>
      <li class="slide" id="slide2">
        <a href="#">
          <p class="caption">Texto llamativo</p>
          <img src="photo2.jpg" alt="photo 2">
        </a>
      </li>
      <li class="slide" id="slide3">
        <a href="#">
          <p class="caption">Texto llamativo</p>
          <img src="photo3.jpg" alt="photo 3">
        </a>
      </li>
      <li class="slide" id="slide4">
        <a href="#">
          <p class="caption">Texto llamativo</p>
          <img src="photo4.jpg" alt="photo 4">
        </a>
      </li>
      <li class="slide" id="slide5">
        <a href="#">
           <p class="caption">Texto llamativo</p>
           <img src="photo5.jpg" alt="photo 5">
        </a>
      </li>
      <li class="slide">
        <a href="#">
          <p class="caption">Texto llamativo</p>
          <img src="photo1.jpg" alt="photo 1">
        </a>
      </li>
    </ul>
    <ul class="slider-controler">
      <li><a href="#slide1">&bullet;</a></li>
      <li><a href="#slide2">&bullet;</a></li>
      <li><a href="#slide3">&bullet;</a></li>
      <li><a href="#slide4">&bullet;</a></li>
      <li><a href="#slide5">&bullet;</a></li>
    </ul>
  </div>
</div>
    </div>
</body>
</html>