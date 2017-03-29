/* CONFIGURACION GENERAL DEL NAVEGADOR /*

*{
   margin:0;
   padding:0;
}

body {
    background-color:#9E9E9E;

}

 #encabezado {
     background:#FF9800;
     height: 220px;
     tex-align: center;
     background-image:url("../img/logo.png");
     background-repeat: no-repeat;
     background-size: 250px 170px;
}

.areaPrincipal{
    background-image: url("../img/fondo.jpg");
    background-repeat: no repeat;
    width: 100%;
    heigth: auto;
    opacity: 0.7;
    -webkit-background-size: 100% 100%;
    /* Safari 3.0 */
    -moz-background-size: 100% 100%;
    /* Gecko 1.9.2 (Firefox 3.6) */
    -0-background-size: 100% 100%;
    /*Opera 9.5 */
    background-size: 100% 100%;
    /* Gecko 2.0 (Firefox 4.0) and other CSS3-compiliant browsers */
}

.piePagina{
    width: 100%;
    height: 100%;
    background: #FF9800;
    bottom: 0;
    color: white;
    position: fixed;
    left: 0px;
   }

/* CONFIGURACION DEL MENU */

  #menu{
        height: 40px;
        position: relative;
        top: 180px;
     }

     ul {
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         background-color: #33333;
    }
    
    li {
        float: left;
     }

     li a{
         display: block;
         color: white;
         text-align: center;
         padding: 10px;
         text-decoration: none;
    }

    li a:hover {
        background-color: #111111;
   }
   /* CONFIGURACION DEL AREA DE INFORMACION*/

#datos {
   width: 80%;
   background-color: #D81B60;
   heigth: 600px;
   margin: auto;
   opacity: 1;
}

p{
  font-family: Cambria, Cochin, Georgia, Times, Times New Roman,Serif;
   font-size: 20px;
}

p.descripcion {
  font-family: Cambria, Cochin, Georgia, Times, Times New Roman, Serif;
  font-size: 16px;
color: yellow;

}
