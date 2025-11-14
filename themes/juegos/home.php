<?php
/* Archivo: home.php
 * Muestra las entradas del blog (página de Noticias)
 */

get_header();
?>

<main class="site-content noticias-archive">
  <section class="contenedor-noticias">

    <?php if (have_posts()) : ?>

      <?php
      $contador = 0;
      while (have_posts()) : the_post();
        $contador++;
      ?>

        <?php if ($contador == 1) : ?>
          <!-- Noticia principal -->
          <article class="noticia-principal card-sombra">
            <a href="<?php the_permalink(); ?>" class="noticia-enlace">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php endif; ?>
              <h2 class="noticia-titulo"><?php the_title(); ?></h2>
              <p class="noticia-extracto"><?php echo get_the_excerpt(); ?></p>
            </a>
          </article>

          <div class="noticias-secundarias">
        <?php else : ?>
          <!-- Noticias secundarias -->
          <article class="noticia-secundaria card-sombra">
            <a href="<?php the_permalink(); ?>" class="noticia-enlace">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
              <h3 class="noticia-titulo-secundaria"><?php the_title(); ?></h3>
            </a>
          </article>
        <?php endif; ?>

      <?php endwhile; ?>

      </div><!-- cierre de noticias-secundarias -->

    <?php else : ?>
      <p class="sin-noticias">No hay noticias disponibles por ahora.</p>
    <?php endif; ?>

  </section>
</main>

<?php get_footer(); ?>
