<?php
/* Template Name: Página de Contacto */
!
get_header();
?>
<main class="site-content contacto">
  <section class="contact-section">
    <h1>Contáctanos</h1>
    <form class="contact-form" action="" method="post">
      <div class="form-group">
        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="direccion"><i class="fas fa-home"></i> Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
      </div>

      <div class="form-group">
        <label for="telefono"><i class="fas fa-phone"></i> Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
      </div>

      <div class="form-group">
        <label for="motivo"><i class="fas fa-comment-dots"></i> Motivo:</label>
        <select id="motivo" name="motivo" required>
          <option value="">Selecciona una opción</option>
          <option value="juegos">Juegos</option>
          <option value="otros">Otros</option>
        </select>
      </div>

      <button type="submit" class="submit-btn">
        <i class="fas fa-paper-plane"></i> Enviar
      </button>
    </form>
  </section>
</main>
<?php get_footer(); ?>