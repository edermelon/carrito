<?php
/*

Antes de consumir el WS, estos datos deberán guardarse en base de datos con un estatus en “compra”, después 
de consumir el WS éste devuelve un estatus, y solo en caso de éxito devuelve un UUID (“compra_id”) único para 
la orden de compra.
Los datos por guardar en bd son:
• Fecha de compra
• Nombre cliente 
• Identificador único (opcional)
• Estatus (proveniente del WS)
• Identificador del WS.
* No es necesario guardar los productos asociados a la compra.
------------------------------------------------------------------------------------------------
*/ ?>
<?php
# Es responsabilidad del programador hacer algo con los productos
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
var_dump($productos);
