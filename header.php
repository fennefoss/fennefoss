<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fennefoss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Awesome Description Here">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fennefoss' ); ?></a>

    <header id="masthead" class="site-header">

        <section class="top-bar">
            <div class="burger-menu" onclick="burgerMenuToggle(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <script>
                function burgerMenuToggle(x) {
                    x.classList.toggle("change");
                }
            </script>

            <div class="logo">
                <h1>FENNEFOSS</h1>
            </div>
        </section>

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fennefoss' ); ?></button>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
            ?>
        </nav><!-- #site-navigation -->

        <!--<div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
            endif;

            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php
            endif; ?>
        </div>--><!-- .site-branding -->

    </header><!-- #masthead -->

    <div id="content" class="site-content">

        <section class="newest-social">
            <div class="newest-social__instagram">
                <script type="text/javascript">
                    var feed = new Instafeed({
                        get: 'user',
                        userId: '3925944234',
                        clientId: ' 6ab05fbe7e6144b7819e214f1870930e',
                        accessToken: '3925944234.6ab05fb.825c4e3e941146a4852790c4af478442',
                        resolution: 'low_resolution',
                        limit: '2',
                        sortBy: 'most-recent',
                        template: '<div class="instagram-tile">' + 
                        '<a href="{{link}}" class="instagram-link"><img src="{{image}}" class="instagram-image"/>' +
                        '<div class="instagram-overlay">{{caption}}{{likes}}</div></a>' +
                        '</div>'
                    });
                    feed.run();
                </script>
                <div id="instafeed" class="instagram-wrapper"></div>
            </div>

            <div class="newest-social__youtube">
                <iframe id="ytplayer" type="text/html" width="640" height="320"
                    src="https://www.youtube.com/embed?listType=user_uploads&list=Fenn3&showinfo=0"
                    frameborder="0">
                </iframe>
            </div>
        </section>
