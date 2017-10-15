<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package proficiency
 */
get_header(); ?>
<div class="proficiency-breadcrumb-section">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="proficiency-page-breadcrumb">
              <li><a href="<?php echo esc_url(home_url());?>"><i class="fa fa-home"></i></a></li>
              <li class="active"><?php _e('404','proficiency'); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center proficiency-section">
        <div class="proficiency-error-404">
          <h1><?php esc_html_e('4','proficiency'); ?><i class="fa fa-times-circle-o"></i><?php esc_html_e('4','proficiency'); ?></h1>
          <h4><?php esc_html_e('Oops! Page not found','proficiency'); ?></h4>
          <p><?php esc_html_e("Sorry, we can't find the page you're looking for. This page has moved or was never here to start with.","proficiency"); ?></p>
          <a class="btn btn-theme" href="#" onClick="history.back();"><?php _e('Go Back','proficiency'); ?></a> </div>
      </div>
    </div>
  </div>
<?php
get_footer();