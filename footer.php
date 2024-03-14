<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage odori
 * @since theme
 */
?>

<footer>
    <h4>
        主催
    </h4>
    <div class="logo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo01.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo01.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/logo01@2x.png 2x" alt="オドルキカク">
    </div>
    <!-- /.logo -->
    <div class="followus02">
        <a href="https://www.instagram.com/odol_gujoodori/" target="_blank">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/followus02.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/followus02.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/followus02@2x.png 2x" alt="インスタグラム">
        </a>
        <a href="https://www.youtube.com/@odolkikaku" target="_blank">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/followus03.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/followus03.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/followus03@2x.png 2x" alt="youtube">
        </a>
    </div>
    <!-- /.followus02 -->
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/style.js"></script>
<?php wp_footer(); ?>
</body>

</html>