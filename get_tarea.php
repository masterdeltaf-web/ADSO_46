<?php
if (isset($_GET['palabra1']) && isset($_GET['palabra2'])) 
    {
        echo "a caballo ['palabra1],no se le mira el
        [palabra2]";
    }else{ 
        echo"No se recibieron las palabras.";

}
?>