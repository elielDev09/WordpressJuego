<footer class="site-footer">
  <div class="footer-container"> 

    <div class="footer-left">
      <div class="social-icons">
        <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-right">
      <p>Copyright © <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      <p><a href="#">Políticas</a></p>
    </div>

  </div>

  <?php wp_footer(); ?>
</footer>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.site-nav');

    if (toggle && nav) {
      toggle.addEventListener('click', () => {
        nav.classList.toggle('active');
      });
    }
  });
</script>
</body>
</html>
