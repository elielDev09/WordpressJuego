<?php
/* Archivo: front-page.php
 * Página de inicio del tema JuegosPS2
 */
get_header();
?>

<main class="site-content front-page">

  <!-- JUEGOS MÁS RECIENTES -->
  <section class="seccion-juegos card-sombra">
    <h2 class="titulo-seccion">Juegos más recientes</h2>

    <div class="contenedor-juegos">
      <?php
      $juegos_recientes = new WP_Query(array(
        'post_type' => 'videojuegos',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
      ));

      if ($juegos_recientes->have_posts()) :
        while ($juegos_recientes->have_posts()) : $juegos_recientes->the_post();
          $imagen = get_field('imagen');
          $categoria = get_field('categoria');
          $precio = get_field('precio');
      ?>
          <article class="juego-card">
            <a href="<?php the_permalink(); ?>" class="juego-enlace">
              <?php if ($imagen && isset($imagen['url'])): ?>
                <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php the_title(); ?>">
              <?php endif; ?>
              <div class="juego-info">
                <?php if ($precio): ?>
                  <p class="juego-precio">€ <?php echo esc_html($precio); ?></p>
                <?php endif; ?>
                <h3 class="juego-titulo"><?php the_title(); ?></h3>
                <?php if ($categoria): ?>
                  <span class="juego-categoria"><?php echo esc_html($categoria); ?></span>
                <?php endif; ?>
              </div>
            </a>
          </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No hay juegos disponibles todavía.</p>';
      endif;
      ?>
    </div>
  </section>

  <!-- ÚLTIMAS NOTICIAS -->
  <section class="seccion-noticias card-sombra">
    <h2 class="titulo-seccion">Últimas Noticias</h2>

    <div class="contenedor-noticias">
      <?php
      $ultimas_noticias = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
      ));

      if ($ultimas_noticias->have_posts()) :
        while ($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post();
      ?>
          <article class="noticia-card">
            <a href="<?php the_permalink(); ?>" class="noticia-enlace">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
              <h3 class="noticia-titulo"><?php the_title(); ?></h3>
            </a>
          </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No hay noticias publicadas aún.</p>';
      endif;
      ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>