<!DOCTYPE>
<html>
    <head>
        <title>Registro de Agencias</title>
        
    <link href="stylo.css" type="text/css" rel="stylesheet">
    
    </head>
    <body>
        <div class="formularios">
            <form action="backregistro_agencias.php" name="registro_agencias" method="post">
                <select name="agencias">
                   <option selected>Seleccione</option>
                    <option value="mercantil">Mercantil</option>
                    <option value="provicial">Provincial</option>
                    <option value="banesco">Banesco</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Tesoro">Tesoro</option>
                    <option value="banplus">Banplus</option>
                    <option value="exterior">Exterior</option>
                </select>
                
                <di class="campotexto">
                    <input type="text" name="cod" placeholder="Codigo de la agencia">
                </di>
                
                <di class="campotexto">
                    <input type="text" name="dir" placeholder="Direccin de la agencia">
                </di>
                
                <div class="botonregistro">
                    <input type="submit" name="registrar" value="registrar">
                </div>
            </form>
        </div>   
    </body>
</html>