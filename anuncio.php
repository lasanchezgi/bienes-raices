<?php
    include './includes/templates/header.php';
?> 

    <!--CONTENIDO PRINCIPAL-->
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio"> $3.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>
                Sed orci quam, aliquam nec congue eu, varius eget nulla. Sed eget urna sed nulla aliquet luctus. Donec dictum ante massa, et placerat tellus tincidunt et. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer luctus posuere purus quis suscipit. Vivamus eu vehicula nulla. Donec dapibus, eros a tincidunt convallis, est diam laoreet erat, ut bibendum libero dolor eu diam. Sed at volutpat lectus, egestas gravida enim.
            </p>
            <p>
                Sed orci quam, aliquam nec congue eu, varius eget nulla. Sed eget urna sed nulla aliquet luctus. Donec dictum ante massa, et placerat tellus tincidunt et. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer luctus posuere purus quis suscipit. Vivamus eu vehicula nulla. Donec dapibus, eros a tincidunt convallis, est diam laoreet erat, ut bibendum libero dolor eu diam. Sed at volutpat lectus, egestas gravida enim.
            </p>
        </div>
    </main>

    <!--FOOTER-->
    <?php
        include './includes/templates/footer.php';
    ?> 