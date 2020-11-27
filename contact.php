<?php
/**
 * Template Name: Contact
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php get_header('header.php'); ?>
</head>
<body>
<!--------------------------------------------------------------------------->

<div class="container-fluid contact-heading-image">
  <div class="col-md-12 col-12">
    <img src="http://localhost/cloudy/wp-content/uploads/2020/11/Cover_photo_blog.jpg" alt="">
  </div>
</div>

<div class="container contact-main-section">
  <div class="row">
    <div class="col-md-12 col-12">
        <h2 class="h2heading-text">Kontakt</h2>
        <p class="paragraph-section">Zapraszamy do wypełnienia formularza</p>
        <p class="paragraph-section">Zapytaj o wycenę lub dostępność naszych usług, nasi konsultanci skontaktują się z Tobą w celu ustalenia szczegółów.</p>
    </div>
      <div class="col-md-12 col-12">
        <?php the_field('contact-form'); ?>
      </div>
  </div>
</div>

<!--------------------------------------------------------------------------->
    <?php get_footer('footer.php'); ?>
  <script>
  </script>
</body>
</html>
