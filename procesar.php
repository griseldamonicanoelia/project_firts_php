<?php
$nombre=$_GET["usuario"];//CONSTANTTE GLOBAL,TAMBIEN ES UN ARRAYU SE PUEDE USAR EN CUALQUIER PARTE DEL CODIGO
$correo=$_GET["email"];//creamos variables con signo $ para atrapar los valores del parametro
echo "<h1> BIENVENIDO </H1>";//ponemos un titulo como string en h1
echo $nombre;// asi lo atrpamos prara mostrar en web
echo "<br>";//harcodeamos asi un br
echo $correo;
