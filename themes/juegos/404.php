<?php
/* Archivo: 404.php
 * Página de error personalizada para el tema JuegosPS2
 */

?>
<style>
body {
  background: #121212;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.pagina-404 {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 80vh;
  text-align: center;
  color: #fff;
  padding: 2rem;
}

.error-container {
  max-width: 600px;
  padding: 2.5rem;
  border-radius: 20px;
  background: linear-gradient(145deg, #101010, #171717);
  box-shadow: 0 4px 15px rgba(255, 0, 191, 0.25);
  animation: fadeIn 0.8s ease-out;
}

.error-titulo {
  font-size: 6rem;
  font-weight: 800;
  color: #ff00bf;
  text-shadow: 0 0 25px rgba(255, 0, 191, 0.6);
  margin: 0;
  letter-spacing: 2px;
}

.error-subtitulo {
  font-size: 1.8rem;
  margin-top: 1rem;
  color: #ff66d9;
}

.error-mensaje {
  margin: 1.5rem 0 2.5rem;
  color: #ccc;
  line-height: 1.6;
  font-size: 1rem;
}

/* Botón volver */
.btn-volver {
  display: inline-block;
  background-color: #ff00bf;
  color: #fff;
  font-weight: 600;
  border-radius: 10px;
  padding: 0.8rem 1.5rem;
  text-decoration: none;
  transition: all 0.25s ease;
}

.btn-volver:hover {
  background-color: #ff33cc;
  box-shadow: 0 0 15px rgba(255, 0, 191, 0.5);
  transform: scale(1.05);
}

/* Animación */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* Responsive */
@media (max-width: 600px) {
  .error-titulo {
    font-size: 4rem;
  }

  .error-subtitulo {
    font-size: 1.4rem;
  }

  .error-container {
    padding: 2rem;
  }
}
</style>

<main class="site-content pagina-404">
  <section class="error-container card-sombra">
    <h1 class="error-titulo">404</h1>
    <h2 class="error-subtitulo">Página no encontrada</h2>
    <p class="error-mensaje">
      Ups... parece que te has perdido entre los juegos.<br>
      No te preocupes, puedes volver al catálogo y seguir explorando clásicos de PlayStation 2.
    </p>

    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-volver">
      🔙 Volver al inicio
    </a>
  </section>
</main>