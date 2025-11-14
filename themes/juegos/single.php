<?php
/* Archivo: single.php
 * Muestra una noticia individual (entrada estándar de WordPress)
 */

get_header(); 
?>

<main class="site-content single-noticia">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="noticia-detalle card-sombra">
      
      <!-- Título -->
      <h1 class="noticia-titulo"><?php the_title(); ?></h1>

      <!-- Imagen destacada -->
      <?php if (has_post_thumbnail()): ?>
        <div class="noticia-imagen">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <!-- Contenido / Descripción -->
      <div class="noticia-contenido">
        <?php the_content(); ?>
      </div>

    </section>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>