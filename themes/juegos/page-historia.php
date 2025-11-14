<?php
/* Template Name: Página de Historia */
!
get_header();
?>
<main class="site-content historia">
  <section class="historia-container">
    <!-- Columna izquierda -->
    <div class="historia-col historia-texto">
      <h2>Historia de la consola</h2>
      <p>
        La PlayStation 2 fue lanzada en el año 2000 y se convirtió en una de las consolas más exitosas de todos los tiempos.
        Su catálogo de juegos, su lector de DVD integrado y la compatibilidad con títulos de PS1 la hicieron un fenómeno global.
      </p>
      <p>
        A lo largo de su vida útil, se vendieron más de 155 millones de unidades, estableciendo un legado que definió la era dorada de los videojuegos.
      </p>
    </div>

    <!-- Columna derecha -->
    <div class="historia-col historia-autor">
      <div class="autor-imagen">
        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/historia/creador.png" alt="Creador de PlayStation">
      </div>

      <div class="autor-descripcion">
        <h3>Descripción del creador</h3>
        <p>
          Ken Kutaragi, conocido como el "padre de PlayStation", fue el ingeniero responsable de revolucionar la industria del entretenimiento digital.
          Su visión y liderazgo técnico llevaron a Sony a dominar el mercado de consolas durante más de una década.
        </p>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>