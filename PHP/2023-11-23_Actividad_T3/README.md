## Tarea de Tema 3
## Formato
- Formato: Archivo .rar/.zip
- Nombre de Archivo: DWES_tar3_Apellido1_Apellido2_Nombre

## Tarea: Pizzería
Nuestro proyecto consiste en la creación de un sitio web para una pizzería.

### `index.php`
- En la parte superior, figurará uno de los siguientes:
    - Un formulario de login (desaparecerá si ya hemos entrado).
    - Un mensaje de bienvenida personalizado con el nombre del usuario (solo si se ha hecho el login). Y un botón para hacer log-out.
- En la parte central, un menú con las pizzas, sus ingredientes y sus precios.
- En la parte inferior, figurará uno de los siguientes:
    - Botón "Realizar pedido", si hemos hecho ya el log-in.
    - En su lugar, pedir al visitante que entre en su cuenta o cree una, mostrando un enlace a `nuevo_usuario.php`.

### `zona_admin.php`
- Un formulario que permita la modificación o creación de una nueva pizza.
- Un formulario que permita borrar pizzas: Constará de un desplegable y un botón "Borrar Pizza".
- Un informe con las pizzas más vendidas, que obtendrá los datos de ventas de la tabla pedidos.
- Un botón que cierra sesión y devuelve a `index.php`.

### `nuevo_usuario.php`
- Formulario para la creación de un usuario. Si el nombre de usuario ya existe, nos indicará que debemos elegir otro.

### `pedido.php`
- Un formulario que te permite añadir pizzas para realizar el pedido. Se pueden utilizar desplegables para seleccionar las pizzas a añadir.

### `gracias.php`
- Un mensaje de agradecimiento por el pedido realizado.