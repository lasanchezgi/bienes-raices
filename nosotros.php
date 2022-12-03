<?php
    include './includes/templates/header.php';
?> 

    <!--CONTENIDO PRINCIPAL-->
    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>
        <div class="contenido-nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
            </picture>
            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Sed orci quam, aliquam nec congue eu, varius eget nulla. Sed eget urna sed nulla aliquet luctus. Donec dictum ante massa, et placerat tellus tincidunt et. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer luctus posuere purus quis suscipit. Vivamus eu vehicula nulla. Donec dapibus, eros a tincidunt convallis, est diam laoreet erat, ut bibendum libero dolor eu diam. Sed at volutpat lectus, egestas gravida enim.
                </p>
                <p>
                    Nunc ac gravida mauris, maximus tempus urna. Praesent suscipit sagittis urna, non lobortis metus. Pellentesque mattis nibh libero, non laoreet odio interdum eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono de seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Quisque sed lorem ac metus ultricies vehicula eu sollicitudin risus. Aliquam erat volutpat.In eu augue orci.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono de precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Quisque sed lorem ac metus ultricies vehicula eu sollicitudin risus. Aliquam erat volutpat. Morbi viverra malesuada vestibulum. 
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono de tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>
                    Quisque sed lorem ac metus ultricies vehicula eu sollicitudin risus. Aliquam erat volutpat. Morbi viverra malesuada vestibulum.
                </p>
            </div>
        </div>
    </section >


    <!--FOOTER-->
<?php
    include './includes/templates/footer.php';
?> 