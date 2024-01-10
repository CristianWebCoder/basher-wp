<!-- 1. HEADER -->
<header class="section_header">
    <div class="container">
        <div class="header_logo">
            <a href="<?php echo home_url(); ?>">
                <ul class="logo_all">
                    <?php dynamic_sidebar('logo_header'); ?>
                </ul>
            </a>
        </div>
        <div class="header_links">
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'main_menu',
                'container'         => 'nav',
                'container_class'   => 'links_menu',
                'depth'             => 2 , 
                'menu_class'        => 'links_menu'
            )); ?>
            <div class="link_button">
                <a href="#cotizar" class="primary_button"><?php _e('Contacto', 'main_theme') ?></a>
            </div>
            <div class="language_switcher">
                ES
                <span class="flecha"></span>
            </div>
            <div class="icon">
                <?php dynamic_sidebar('logo_icono'); ?>
                <!-- <img src="assets/img/logo_favicon.svg" alt="Icono de Basher" width="190" height="164"> -->
            </div>
        </div>
        <div class="header_menu">
            <div class="menu_toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>
</header>