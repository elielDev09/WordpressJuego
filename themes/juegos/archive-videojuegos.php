<?php
/* Archivo: archive-videojuegos.php
 * Muestra todos los videojuegos del CPT "videojuegos"
 */

get_header(); 
?>

<main class="site-content videojuegos-archive">
  <section class="videojuegos-container">

    <!-- === FILTRO POR CATEGORÍA === -->
    <div class="filtro-categorias">
      <form method="get" action="">
        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria" onchange="this.form.submit()">
          <option value="">All</option>
          <?php
          // Obtener todas las categorías del CPT "videojuegos"
          $categorias = get_terms(array(
            'taxonomy' => 'category',
            'hide_empty' => true,
          ));
          foreach ($categorias as $cat) :
            $selected = (isset($_GET['categoria']) && $_GET['categoria'] == $cat->slug) ? 'selected' : '';
            echo '<option value="' . esc_attr($cat->slug) . '" ' . $selected . '>' . esc_html($cat->name) . '</option>';
          endforeach;
          ?>
        </select>
      </form>
    </div>

    <?php
    // Filtrar por categoría si está seleccionada
    $args = array(
      'post_type' => 'videojuegos',
      'posts_per_page' => -1,
    );

    if (isset($_GET['categoria']) && $_GET['categoria'] != '') {
      $args['tax_query'] = array(
        array(
          'taxonomy' => 'category',
          'field'    => 'slug',
          'terms'    => sanitize_text_field($_GET['categoria']),
        ),
      );
    }

    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()) : ?>
      <div class="videojuegos-grid">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <?php
          $imagen = get_field('imagen');
          ?>
          <article class="videojuego-card">
            <a href="<?php the_permalink(); ?>" class="videojuego-enlace">
              <?php if ($imagen && isset($imagen['url'])): ?>
                <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php the_title(); ?>" class="videojuego-imagen">
              <?php endif; ?>     
            </a>
            <h2 class="videojuego-titulo"><?php the_title(); ?></h2>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else : ?>
      <p class="sin-juegos">No hay videojuegos disponibles por el momento.</p>
    <?php endif; ?>

  </section>
</main>

<?php get_footer(); ?>