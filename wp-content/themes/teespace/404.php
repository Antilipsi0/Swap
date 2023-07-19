<?php 
/**
 * @package    HaruTheme
 * @version    1.0.0
 * @author     Administrator <admin@harutheme.com>
 * @copyright  Copyright 2022, HaruTheme
*/

get_header();
?>
<section class="haru-404-page">
  <div class="haru-container">
    <div class="haru-content-404">
      <div class="page-content">
        <h2 class="entry-title haru-title-404"><?php echo esc_html__( '404', 'teespace' ); ?></h2>
        <p class="txt2"><?php echo esc_html__( "Désolé, il semblerait que cette page n'existe pas", 'teespace' ); ?></p>
        <p class="txt3"><?php echo esc_html__( 'Vous pouvez retourner à la page d\'accueil', 'teespace' ); ?></p>
        <a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr__( 'Accueil','teespace' ); ?>" class="haru-button haru-button--size-medium haru-button--bg-primary haru-button--round-normal">
          <?php echo esc_html__( 'Retour à l\'accueil', 'teespace' ); ?>
        </a>
      </div>
      <!-- .page-content -->
    </div>
  </div>
</section>
<?php get_footer(); ?>
