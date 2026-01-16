<?php
/**
 * Header Template
 * 7 Figure Affiliate Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header sticky top-0 z-50 bg-slate-900/95 backdrop-blur-sm shadow-lg border-b border-white/5 transition-all duration-300">
        <nav class="navbar py-4 px-6">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                
                <!-- Logo/Brand -->
                <div class="site-branding">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold text-amber-500 hover:text-amber-400 transition">
                        <?php bloginfo('name'); ?>
                    </a>
                </div>

                <!-- Primary Navigation -->
                <div class="flex items-center gap-8">
                    <div class="site-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'fallback_cb' => 'wp_page_menu',
                            'container' => 'div',
                            'container_class' => 'nav-menu hidden md:flex gap-8',
                            'menu_class' => 'flex gap-8 items-center text-sm font-medium',
                            'link_before' => '<span class="hover:text-amber-400 transition">',
                            'link_after' => '</span>',
                        ));
                        ?>
                    </div>

                    <!-- Header CTA -->
                    <a href="#lead-magnet" class="hidden md:inline-flex items-center justify-center rounded-lg bg-emerald-500 px-5 py-2.5 text-sm font-bold text-slate-900 shadow-md shadow-emerald-500/20 transition hover:bg-emerald-400 hover:-translate-y-0.5">
                        Get Blueprint
                    </a>
                </div>
        </nav>
    </header>

    <main id="main" class="site-main">
