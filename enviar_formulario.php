<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $tickets = $_POST['tickets'];
    $referencia = $_POST['referencia'];

    $destinatario = 'alvalodel@gmail.com'; 
    
    $asunto = 'Información del formulario de contacto';

    $mensaje = "Nombre y Apellido: $nombre\nC.I.: $cedula\nCantidad de Tickets: $tickets\nComprobante transferencia: $referencia";

    // Envío del correo electrónico
    $enviado = mail($destinatario, $asunto, $mensaje);

    if ($enviado) {
        echo 'El formulario ha sido enviado correctamente.';
    } else {
        echo 'Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.';
    }
}
?>