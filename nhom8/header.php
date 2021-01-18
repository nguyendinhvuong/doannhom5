<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
        <header class="site-header">
            <div class="top-header">
                <div class="left">
                    <?php
                      if ( function_exists( 'the_custom_logo' ) ) {
                             the_custom_logo();
                            }
                            else
                            ?>
                                <!-- <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                                <h4><?php bloginfo( 'description' ); ?></h4> -->
                </div>
                <!-- Menu -->
                <div class="center">
                    <nav class="navigation-menu">
                        <?php $args = [ 'theme_location' => 'primary' ]; ?>
                        <?php wp_nav_menu( $args ) ?>
                    </nav>
                </div>
                <div class="right">
                    <div class="header-search">
                    <form role="search" method="get" id="searchform" class="searchform" action="http://localhost:8080/doanCMS/">
                        <div>
                            <input type="text" value="" name="s" id="s">
                            <input type="submit" id="searchsubmit" value="Tìm kiếm">
                        </div>
			        </form>          
                </div>

            </div>
        </div>
            
        </header>

   


