
# Práctica: Tienda en línea con Wordpress y WooCommerce

Este proyecto consiste en el desarrollo e implementación integral de una tienda en línea utilizando WordPress y WooCommerce, aplicando de tal manera principios fundamentales de instalación, personalización, seguridad, SEO y manejo de productos, siguiendo buenas prácticas.
 
## Tech

- Wordpress
- WooCommerce
- Elementor
- Astra
- Starter Templates for Astra


# Tema elegido: Telcom Soluciones



Un tienda e-commerce en línea hecha con WordPress para la venta de productos tecnológicos relacionados a las telecomunicaciones (Routers, Discos y Laptops).




## Pasos para ejecutar en local

Este proyecto está configurado para ejecutarse utilizando XAMPP o LARAGON.

### Instalación

1.  **Clonar el proyecto**:
    Es de vital importancia clonar el repositorio dentro de la carpeta `htdocs` que se encuentra dentro de la instalaciónd de xampp / laragon. 

```bash
  git clone https://github.com/ulisestc/practica_wordpress.git
```
    

2.  **Iniciar servicios**:
    Abrir el panel de control de XAMPP e iniciar  **Apache** y **MySQL**.

3.  **Configurar la base de datos**:
    - Abrir el navegador e ir a [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
    - Crear una BD llamada `practica_wordpress`.
    - Importar el archivo `database.sql` dentro de la base de datos `practica_wordpress`.

4.  **Verificar configuración**:
    El archivo `wp-config.php` vienen configurado con los valores por defecto de XAMPP:
    - Base de datos: `practica_wordpress`
    - Usuario: `root`
    - Contraseña: (vacía)

    Si tu configuración de MySQL es diferente, actualizar los datos dentro.

5.  **Acceder**:
    El sitio estará corriendo en:
    [http://localhost/practica_wordpress](http://localhost/practica_wordpress)
