<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://carlosguilhermes.000webhostapp.com/index.html');
    </script>
    ";
    
}

?>