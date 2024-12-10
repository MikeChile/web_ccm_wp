<!-- FOOTER -->
<div id="footer-component"></div>

<!-- Carga del logo del footer -->
<script>
    var logoUrlFooter = "<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo_ccm.png'); ?>";
</script>

<!-- Swiper-->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
<!-- Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- Elementos wordpress -->
<?php wp_footer(); ?>
</body>


</html>