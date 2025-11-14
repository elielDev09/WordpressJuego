
<?php
/* Template Name: Página de Consola */
get_header();
?>
<main class="site-content consola">
  <section class="consola-container">
    <div class="titulo-principal">
      <h1>PS2</h1>
    </div>

    <h2 class="subtitulo">Versiones</h2>

    <div class="versiones-grid">
      <!-- Card izquierda -->
      <div class="version-card" id="versionCard">
        <h3 id="versionTitulo">PS2 Slim</h3>
        <img id="versionImg" src="<?php echo get_template_directory_uri(); ?>/imagenes/consola/ps2-slim-card.png" alt="PS2 Slim">
        <ul id="versionSpecs">
          <li><strong>CPU:</strong> Emotion Engine 294 MHz</li>
          <li><strong>RAM:</strong> 32 MB</li>
          <li><strong>GPU:</strong> Graphics Synthesizer 147 MHz</li>
          <li><strong>PESO:</strong> 900g</li>
          <li><strong>Soporte:</strong> DVD / CD-ROM</li>
        </ul>
        <div class="arrow" id="nextBtn">➜</div>
      </div>

      <!-- Imagen derecha -->
      <div class="consola-imagen">
        <img id="consolaImg" src="<?php echo get_template_directory_uri(); ?>/imagenes/consola/ps2.png" alt="Consola PS2">
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>

  <script>
  document.addEventListener("DOMContentLoaded", () => {
    // === Datos de las dos versiones ===
    const versiones = [
      {
        titulo: "PS2 Slim",
        imgCard: "<?php echo get_template_directory_uri(); ?>/imagenes/consola/ps2-slim-card.png",
        specs: [
          "CPU: Emotion Engine 294 MHz",
          "RAM: 32 MB",
          "GPU: Graphics Synthesizer 147 MHz",
          "PESO: 900g",
          "Soporte: DVD / CD-ROM"
        ],
        imgGrande: "<?php echo get_template_directory_uri(); ?>/imagenes/consola/ps2.png"
      },
      {
        titulo: "PS2 FAT",
        imgCard: "<?php echo get_template_directory_uri(); ?>/imagenes/consola/ps2-Fat-card.png",
        specs: [
          "CPU: Emotion Engine 299 MHz",
          "RAM: 32 MB",
          "GPU: Graphics Synthesizer 147 MHz",
          "PESO: 2.2 kg",
          "Soporte: DVD / CD-ROM"
        ],
        imgGrande: "<?php echo get_template_directory_uri(); ?>/imagenes/consola/ps2-Fat.png"
      }
    ];

    let indice = 0;

    const titulo = document.getElementById("versionTitulo");
    const imgCard = document.getElementById("versionImg");
    const specs = document.getElementById("versionSpecs");
    const imgGrande = document.getElementById("consolaImg");
    const nextBtn = document.getElementById("nextBtn");

    nextBtn.addEventListener("click", () => {
      indice = (indice + 1) % versiones.length;
      const v = versiones[indice];

      // Pequeña animación de transición
      document.getElementById("versionCard").style.opacity = 0;
      imgGrande.style.opacity = 0;

      setTimeout(() => {
        
        titulo.textContent = v.titulo;
        imgCard.src = v.imgCard;
        specs.innerHTML = v.specs.map(s => `<li><strong>${s.split(':')[0]}:</strong>${s.split(':')[1]}</li>`).join("");
        imgGrande.src = v.imgGrande;

        document.getElementById("versionCard").style.opacity = 1;
        imgGrande.style.opacity = 1;
      }, 200);
    });
  });
  </script>