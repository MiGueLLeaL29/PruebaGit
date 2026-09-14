<?php
require 'vendor\autoload.php';

use GityPhp\ArregloPg;
//Se establece la zona horaria que uno quiere
date_default_timezone_set("America/Bogota");

$datos = new ArregloPg(
    NombrePagina: "Pruebas PhP",
    Description: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit aliquid amet possimus voluptatem qui nesciunt eos repellat sit enim similique dolor in culpa vitae inventore ut hic, incidunt explicabo maxime!",
    Costo: 20000,
    FechaHoy: new DateTime(),
    FechaX: new DateTime('2025-02-28 08:30:00'),
    condicionalIf: True,
    arreglos: ["Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho"],
);

//Operador terciario
$estado = $datos->CondicionalIf ? "ACTIVO" : "NEGADO";
$datos->addArray("");
?>

<body>

    <!-- =====================================================
         HEADER
    ====================================================== -->
    <header id="header-principal" class="header">
        <link rel="stylesheet" href="css/styles2.css">

        <h1 id="titulo-principal" class="TCurso">
            Curso de <?= $datos->NombrePagina ?>
        </h1>

        <nav id="navegacion-principal" class="navbar">

            <a id="link-inicio" href="#inicio">
                Inicio
            </a>

            <a id="link-sobre" href="#sobre">
                Sobre nosotros
            </a>

            <a id="link-servicios" href="#servicios">
                Servicios
            </a>

            <a id="link-contacto" href="#contacto">
                Contacto
            </a>

        </nav>

    </header>


    <!-- =====================================================
         MAIN
    ====================================================== -->
    <main id="contenido-principal">

        <!-- =================================================
             HERO
        ================================================== -->
        <section id="seccion-hero" class="hero">

            <div id="hero-texto" class="hero-text">

                <h2 id="titulo-hero">
                    Prueba de HTML y CSS
                </h2>

                <p id="parrafo-hero">
                    Este es un párrafo de prueba para experimentar
                    con diferentes propiedades de CSS.
                </p>

                <p id="parrafo-formatos">
                    
                    <strong id="texto-negrita">
                        texto en negrita
                    </strong>,

                    <em id="texto-cursiva">
                        texto en cursiva
                    </em>,

                    <u id="texto-subrayado">
                        texto subrayado
                    </u>,

                    <mark id="texto-resaltado">
                        texto resaltado
                    </mark>,

                    <small id="texto-pequeno">
                        texto pequeño
                    </small>

                    <del id="texto-eliminado">
                        texto eliminado
                    </del>.

                </p>

                <button
                    id="boton-hero"
                    class="btn"
                    type="button">
                    Botón de prueba
                </button>

                <a
                    id="enlace-hero"
                    class="btn-link"
                    href="#">
                    Enlace de prueba
                </a>

            </div>


            <div id="hero-imagen" class="hero-image">

                <img
                    id="imagen-hero"
                    src="https://picsum.photos/500/300"
                    alt="Imagen de prueba">

            </div>

        </section>


        <!-- =================================================
             INFORMACIÓN
        ================================================== -->
        <section
            id="seccion-informacion"
            class="section">

            <h2 id="titulo-informacion">
                Información general
            </h2>

            <p id="fecha-hoy">
                Hoy es:
                <?= $datos->FechaHoy->format('d/m/Y h:i A') ?>
            </p>

            <p id="descripcion-curso">
                <?= $datos->Description ?>
            </p>

            <h3 id="titulo-precio">
                Precio del curso
            </h3>

            <p id="precio-curso" class="precio">
                <?= number_format($datos->Costo, 0, ',', '.') ?>
            </p>

            <p id="fecha-curso">
                Hora realizada:
                <?= $datos->FechaX->format('d/m/Y h:i A') ?>
            </p>

            <p id="estado-curso" class="estado">

                Estado:

                <strong id="estado-valor">
                    <?= $estado ?>
                </strong>

            </p>

        </section>


        <!-- =================================================
             TARJETAS
        ================================================== -->
        <section
            id="seccion-tarjetas"
            class="section">

            <h2 id="titulo-tarjetas">
                Tarjetas de prueba
            </h2>


            <div id="contenedor-tarjetas" class="cards">

                <!-- TARJETA 1 -->
                <article
                    id="tarjeta-1"
                    class="card">

                    <h3 id="titulo-tarjeta-1">
                        Tarjeta 1
                    </h3>

                    <p id="texto-tarjeta-1">
                        Esta es una tarjeta para probar
                        margin, padding, border y box-shadow.
                    </p>

                    <button
                        id="boton-tarjeta-1"
                        type="button">
                        Ver más
                    </button>

                </article>


                <!-- TARJETA 2 -->
                <article
                    id="tarjeta-2"
                    class="card">

                    <h3 id="titulo-tarjeta-2">
                        Tarjeta 2
                    </h3>

                    <p id="texto-tarjeta-2">
                        También puedes probar tamaños,
                        colores, fondos y posiciones.
                    </p>

                    <button
                        id="boton-tarjeta-2"
                        type="button">
                        Comprar
                    </button>

                </article>


                <!-- TARJETA 3 -->
                <article
                    id="tarjeta-3"
                    class="card">

                    <h3 id="titulo-tarjeta-3">
                        Tarjeta 3
                    </h3>

                    <p id="texto-tarjeta-3">
                        Tercera tarjeta para experimentar
                        con Flexbox o Grid.
                    </p>

                    <button
                        id="boton-tarjeta-3"
                        type="button">
                        Detalles
                    </button>

                </article>

            </div>

        </section>


        <!-- =================================================
             LISTAS
        ================================================== -->
        <section
            id="seccion-listas"
            class="section">

            <h2 id="titulo-listas">
                Listas
            </h2>


            <h3 id="titulo-lista-desordenada">
                Lista desordenada
            </h3>

            <ul
                id="lista-desordenada"
                class="lista">

                <?php foreach ($datos->arreglos as $Escribeindividual): ?>

                    <li id="item-lista-<?= $Escribeindividual ?>">
                        <?= $Escribeindividual ?>
                    </li>

                <?php endforeach; ?>

            </ul>


            <h3 id="titulo-lista-ordenada">
                Lista ordenada
            </h3>

            <ol
                id="lista-ordenada"
                class="lista-ordenada">

                <li id="orden-1">
                    Aprender HTML
                </li>

                <li id="orden-2">
                    Aprender CSS
                </li>

                <li id="orden-3">
                    Aprender JavaScript
                </li>

                <li id="orden-4">
                    Aprender PHP
                </li>

                <li id="orden-5">
                    Aprender Git
                </li>

            </ol>


            <h3 id="titulo-lista-definicion">
                Lista de definición
            </h3>

            <dl id="lista-definicion">

                <dt id="definicion-html">
                    HTML
                </dt>

                <dd id="descripcion-html">
                    Lenguaje utilizado para estructurar
                    páginas web.
                </dd>


                <dt id="definicion-css">
                    CSS
                </dt>

                <dd id="descripcion-css">
                    Lenguaje utilizado para darle estilos
                    a HTML.
                </dd>


                <dt id="definicion-php">
                    PHP
                </dt>

                <dd id="descripcion-php">
                    Lenguaje utilizado principalmente
                    en el backend.
                </dd>

            </dl>

        </section>


        <!-- =================================================
             TABLA
        ================================================== -->
        <section
            id="seccion-tabla"
            class="section">

            <h2 id="titulo-tabla">
                Tabla de prueba
            </h2>


            <table
                id="tabla-usuarios"
                class="tabla">

                <thead id="cabecera-tabla">

                    <tr id="fila-cabecera">

                        <th id="th-id">
                            ID
                        </th>

                        <th id="th-nombre">
                            Nombre
                        </th>

                        <th id="th-edad">
                            Edad
                        </th>

                        <th id="th-ciudad">
                            Ciudad
                        </th>

                        <th id="th-estado">
                            Estado
                        </th>

                    </tr>

                </thead>


                <tbody id="cuerpo-tabla">

                    <tr id="fila-usuario-1">

                        <td id="usuario-1-id">
                            1
                        </td>

                        <td id="usuario-1-nombre">
                            Miguel
                        </td>

                        <td id="usuario-1-edad">
                            20
                        </td>

                        <td id="usuario-1-ciudad">
                            Bogotá
                        </td>

                        <td id="usuario-1-estado">
                            Activo
                        </td>

                    </tr>


                    <tr id="fila-usuario-2">

                        <td id="usuario-2-id">
                            2
                        </td>

                        <td id="usuario-2-nombre">
                            Juan
                        </td>

                        <td id="usuario-2-edad">
                            25
                        </td>

                        <td id="usuario-2-ciudad">
                            Medellín
                        </td>

                        <td id="usuario-2-estado">
                            Activo
                        </td>

                    </tr>


                    <tr id="fila-usuario-3">

                        <td id="usuario-3-id">
                            3
                        </td>

                        <td id="usuario-3-nombre">
                            Pedro
                        </td>

                        <td id="usuario-3-edad">
                            30
                        </td>

                        <td id="usuario-3-ciudad">
                            Cali
                        </td>

                        <td id="usuario-3-estado">
                            Inactivo
                        </td>

                    </tr>

                </tbody>


                <tfoot id="pie-tabla">

                    <tr id="fila-total">

                        <td
                            id="total-usuarios"
                            colspan="5">
                            Total de usuarios: 3
                        </td>

                    </tr>

                </tfoot>

            </table>

        </section>


        <!-- =================================================
             IMÁGENES
        ================================================== -->
        <section
            id="seccion-imagenes"
            class="section">

            <h2 id="titulo-imagenes">
                Imágenes
            </h2>


            <div
                id="contenedor-imagenes"
                class="imagenes">

                <img
                    id="imagen-1"
                    src="https://picsum.photos/300/200"
                    alt="Primera imagen">

                <img
                    id="imagen-2"
                    src="https://picsum.photos/301/200"
                    alt="Segunda imagen">

                <img
                    id="imagen-3"
                    src="https://picsum.photos/302/200"
                    alt="Tercera imagen">

            </div>

        </section>


        <!-- =================================================
             FORMULARIO
        ================================================== -->
        <section
            id="seccion-formulario"
            class="section">

            <h2 id="titulo-formulario">
                Formulario
            </h2>


            <form
                id="formulario-prueba"
                class="formulario">

                <!-- NOMBRE -->
                <div
                    id="campo-nombre"
                    class="campo">

                    <label
                        id="label-nombre"
                        for="input-nombre">
                        Nombre:
                    </label>

                    <input
                        id="input-nombre"
                        type="text"
                        name="nombre"
                        placeholder="Escribe tu nombre">

                </div>


                <!-- EMAIL -->
                <div
                    id="campo-email"
                    class="campo">

                    <label
                        id="label-email"
                        for="input-email">
                        Correo:
                    </label>

                    <input
                        id="input-email"
                        type="email"
                        name="email"
                        placeholder="correo@email.com">

                </div>


                <!-- PASSWORD -->
                <div
                    id="campo-password"
                    class="campo">

                    <label
                        id="label-password"
                        for="input-password">
                        Contraseña:
                    </label>

                    <input
                        id="input-password"
                        type="password"
                        name="password">

                </div>


                <!-- NUMBER -->
                <div
                    id="campo-edad"
                    class="campo">

                    <label
                        id="label-edad"
                        for="input-edad">
                        Edad:
                    </label>

                    <input
                        id="input-edad"
                        type="number"
                        name="edad"
                        min="1"
                        max="100">

                </div>


                <!-- DATE -->
                <div
                    id="campo-fecha"
                    class="campo">

                    <label
                        id="label-fecha"
                        for="input-fecha">
                        Fecha:
                    </label>

                    <input
                        id="input-fecha"
                        type="date"
                        name="fecha">

                </div>


                <!-- TIME -->
                <div
                    id="campo-hora"
                    class="campo">

                    <label
                        id="label-hora"
                        for="input-hora">
                        Hora:
                    </label>

                    <input
                        id="input-hora"
                        type="time"
                        name="hora">

                </div>


                <!-- COLOR -->
                <div
                    id="campo-color"
                    class="campo">

                    <label
                        id="label-color"
                        for="input-color">
                        Color:
                    </label>

                    <input
                        id="input-color"
                        type="color"
                        name="color">

                </div>


                <!-- RADIO -->
                <div
                    id="campo-genero"
                    class="campo">

                    <label id="label-genero">
                        Género:
                    </label>

                    <label id="label-masculino">

                        <input
                            id="radio-masculino"
                            type="radio"
                            name="genero"
                            value="masculino">

                        Masculino

                    </label>


                    <label id="label-femenino">

                        <input
                            id="radio-femenino"
                            type="radio"
                            name="genero"
                            value="femenino">

                        Femenino

                    </label>

                </div>


                <!-- CHECKBOX -->
                <div
                    id="campo-intereses"
                    class="campo">

                    <label id="label-intereses">
                        Intereses:
                    </label>

                    <label id="label-videojuegos">

                        <input
                            id="check-videojuegos"
                            type="checkbox">

                        Videojuegos

                    </label>


                    <label id="label-programacion">

                        <input
                            id="check-programacion"
                            type="checkbox">

                        Programación

                    </label>


                    <label id="label-motocicletas">

                        <input
                            id="check-motocicletas"
                            type="checkbox">

                        Motocicletas

                    </label>

                </div>


                <!-- SELECT -->
                <div
                    id="campo-ciudad"
                    class="campo">

                    <label
                        id="label-ciudad"
                        for="select-ciudad">
                        Ciudad:
                    </label>

                    <select
                        id="select-ciudad"
                        name="ciudad">

                        <option
                            id="option-vacio"
                            value="">
                            Selecciona una ciudad
                        </option>

                        <option
                            id="option-bogota"
                            value="bogota">
                            Bogotá
                        </option>

                        <option
                            id="option-medellin"
                            value="medellin">
                            Medellín
                        </option>

                        <option
                            id="option-cali"
                            value="cali">
                            Cali
                        </option>

                        <option
                            id="option-cartagena"
                            value="cartagena">
                            Cartagena
                        </option>

                    </select>

                </div>


                <!-- TEXTAREA -->
                <div
                    id="campo-mensaje"
                    class="campo">

                    <label
                        id="label-mensaje"
                        for="textarea-mensaje">
                        Mensaje:
                    </label>

                    <textarea
                        id="textarea-mensaje"
                        rows="5"
                        placeholder="Escribe un mensaje..."></textarea>

                </div>


                <!-- BOTONES -->
                <div
                    id="contenedor-botones-formulario"
                    class="botones">

                    <button
                        id="boton-enviar"
                        type="submit"
                        class="btn enviar">
                        Enviar
                    </button>

                    <button
                        id="boton-limpiar"
                        type="reset"
                        class="btn limpiar">
                        Limpiar
                    </button>

                </div>

            </form>

        </section>


        <!-- =================================================
             OTROS ELEMENTOS
        ================================================== -->
        <section
            id="seccion-elementos-extra"
            class="section">

            <h2 id="titulo-elementos-extra">
                Otros elementos HTML
            </h2>


            <h3 id="titulo-pre">
                Texto preformateado
            </h3>

            <pre id="texto-pre">
Este texto mantiene
los espacios
y saltos de línea.
            </pre>


            <h3 id="titulo-code">
                Código
            </h3>

            <code id="codigo-prueba">
                echo "Hola mundo";
            </code>


            <h3 id="titulo-cita">
                Cita
            </h3>

            <blockquote id="cita-prueba">
                "La práctica hace al maestro."
            </blockquote>


            <h3 id="titulo-abbr">
                Abreviatura
            </h3>

            <p id="parrafo-abbr">

                Estoy aprendiendo

                <abbr
                    id="abreviatura-html"
                    title="HyperText Markup Language">
                    HTML
                </abbr>.

            </p>


            <h3 id="titulo-details">
                Detalles desplegables
            </h3>

            <details id="details-prueba">

                <summary id="summary-prueba">
                    Haz clic para ver más
                </summary>

                <p id="texto-details">
                    Este contenido aparece cuando
                    abres el elemento.
                </p>

            </details>


            <h3 id="titulo-progress">
                Barra de progreso
            </h3>

            <progress
                id="barra-progreso"
                value="70"
                max="100">
                70%
            </progress>


            <h3 id="titulo-meter">
                Medidor
            </h3>

            <meter
                id="medidor"
                value="0.7"
                min="0"
                max="1">
                70%
            </meter>

        </section>


        <!-- =================================================
             GRID
        ================================================== -->
        <section
            id="seccion-grid"
            class="section">

            <h2 id="titulo-grid">
                Zona especial para CSS
            </h2>


            <div
                id="contenedor-grid"
                class="grid-test">

                <div
                    id="box-1"
                    class="box box1">
                    BOX 1
                </div>

                <div
                    id="box-2"
                    class="box box2">
                    BOX 2
                </div>

                <div
                    id="box-3"
                    class="box box3">
                    BOX 3
                </div>

                <div
                    id="box-4"
                    class="box box4">
                    BOX 4
                </div>

                <div
                    id="box-5"
                    class="box box5">
                    BOX 5
                </div>

                <div
                    id="box-6"
                    class="box box6">
                    BOX 6
                </div>

            </div>

        </section>


        <!-- =================================================
             POSITION
        ================================================== -->
        <section
            id="seccion-position"
            class="section">

            <h2 id="titulo-position">
                Prueba de posicionamiento
            </h2>


            <div
                id="contenedor-position"
                class="position-container">

                <div
                    id="caja-position"
                    class="position-box">

                    Caja principal

                    <span
                        id="badge-nuevo"
                        class="badge">
                        NUEVO
                    </span>

                </div>

            </div>

        </section>

    </main>


    <!-- =====================================================
         FOOTER
    ====================================================== -->
    <footer
        id="footer-principal"
        class="footer">

        <h3 id="titulo-footer">
            Footer
        </h3>

        <p id="texto-footer">
            Página creada para practicar HTML y CSS.
        </p>

        <p id="copyright-footer">
            &copy; 2026 Pruebas PHP
        </p>

    </footer>

</body>