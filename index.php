<!DOCTYPE html>

<?php
session_start();
include_once 'Modelo/Cliente.php';
include_once 'Controlador/CCliente.php';
include_once 'Controlador/CProducto.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/Style.css" rel="stylesheet" type="text/css"/>
        <title>Storaged Gamin</title>
        <meta name="author" >

    </head>
    <style>
        body{
            background-image: url( img/inicio.jpg )
        }
    </style>
    <body>
        <h1 id="Titulonegro">Storaged Gaming</h1>
        <?php
        

        if(isset($_SESSION["user"])){?>
            <div><?php
                echo ("Bienvenido, ".unserialize($_SESSION["user"])->getNombre());?>
            </div> <br>
            <?php
                if(unserialize($_SESSION["user"])->getTelefono() == 123456789){?>
                    <div>
                        <a href="admin.php">Registrar producto</a>
                    </div><br><?php
            }
        }

        if(!(isset($_SESSION["user"]))){?>
        <nav id="navegador">
            <div >
                <a href="login.php" class="barra-usuario">Iniciar Sesión</a>
            </div> <br>
            <div>
                <a href="RegistrarUsuario.php" class="barra-usuario">Registrar Usuario</a>
            </div> 
         </nav> <?php
        }else{?> 
            <div>
                <a href="Controlador/LogOut.php" class="barra-usuario">Salir de la Sesión</a>
            </div> <?php 
        }?>
        <br> <br>
        

        <div>
            <p id="parrafo">Su carro de compra:</p>
        </div> <br>
        <div><?php
        if(isset(unserialize($_SESSION["catalogo"])->getCarrito()[0])){
            foreach(unserialize($_SESSION["catalogo"])->getCarrito() as $item){ ?>
                <div class="item"> <br><?php
                    echo ($item->getNombre());?><br>
                    <img src="Img/1.jpeg" alt="" width=100" height="100"/> <br> <?php
                    echo ("Precio: $".$item->getPrecio());?> <br> <?php
                    echo ("En stock: ".$item->getCantidad());?> 
                </div> <?php
            }
        }else{ ?>
            <br>
            <div>
                <label>Su carrito está vacío.</label>
            </div> <br> <?php
        } ?>    
         </div> <?php
        if(isset(unserialize($_SESSION["catalogo"])->getCarrito()[0])){ ?>
            <div>
                <a href="Compra.php" >Hacer Compra</a>
            </div> <?php
        } ?>
        
        <br>
        <div>
            <p id= "catalogo">Catálogo</p>
        </div> <br>
        
        <div><?php
            foreach (unserialize($_SESSION["catalogo"])->getCatalogo() as $prod){?>
            <div class="producto"> <br><?php
                echo ($prod->getNombre());?><br>
                <img src="img/1.jpeg" alt="" width=200" height="270"/> <br><?php
                echo ("Precio: $".$prod->getPrecio());?> <br> <?php
                echo ("En stock: ".$prod->getCantidad());?> 
                <form action="index.php" method="POST">
                    <input type="hidden" name="idCarrito" value=<?php echo($prod->getId()); ?>><br>
                    <input type="submit" value="Agregar al Carrito">
                </form> <br>
            </div><?php
            }?>
        </div>
    </body>
</html>
