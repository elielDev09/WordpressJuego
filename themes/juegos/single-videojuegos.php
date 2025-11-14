<?php
/* Archivo: single-videojuegos.php
 * Muestra el contenido de un videojuego individual
 */

get_header(); 
?>

<main class="site-content single-videojuego">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
      // Campos personalizados de ACF
      $imagen = get_field('imagen');
      $descripcion = get_field('descripcion');
      $gameplay = get_field('gameplay');
      $categorias = get_the_category();
    ?>

    <section class="videojuego-detalle">

      <!-- Título -->
      <h1 class="videojuego-titulo"><?php the_title(); ?></h1>

      <div class="videojuego-contenido">
        <!-- Imagen -->
        <div class="videojuego-portada card-sombra">
          <?php if ($imagen && isset($imagen['url'])): ?>
            <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php the_title(); ?>">
          <?php endif; ?>

          <?php if ($categorias): ?>
            <p class="videojuego-categoria">
              <?php echo esc_html($categorias[0]->name); ?>
            </p>
          <?php endif; ?>
        </div>

        <!-- Gameplay -->
        <?php if ($gameplay): ?>
          <div class="videojuego-gameplay card-sombra">
            <?php echo $gameplay;?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Descripción -->
      <?php if ($descripcion): ?>
        <div class="videojuego-descripcion card-sombra">
          <h2>Descripción</h2>
          <p><?php echo nl2br(esc_html($descripcion)); ?></p>
        </div>
      <?php endif; ?>

      <!-- Comentarios -->
      <div class="videojuego-comentarios card-sombra">
        <h2>Comentarios</h2>
        <?php comments_template(); ?>
      </div>

    </section>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>