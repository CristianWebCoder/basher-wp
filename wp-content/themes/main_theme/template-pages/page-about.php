<?php
/**
 * Template Name: About Us - Basher
 */
// Exit if accessed directly
defined('ABSPATH') or die('No script kiddies please!');
get_header();
?>
<div class="main_scrollsnap">
    <?php get_template_part('template-parts/menu/menu'); ?>
    <!-- 1. BANNER -->
    <?php if (have_rows('seccion_banner')) : ?>
        <?php while (have_rows('seccion_banner')) : the_row(); ?>
            <?php 
                $subtitle_border = get_sub_field('titulo_con_borde');
                $sub_text_1 = get_sub_field('sub_texto_nro_1');
                $sub_text_2 = get_sub_field('sub_texto_nro_2');
                $sub_text_3 = get_sub_field('sub_texto_nro_3');
                $sub_text_4 = get_sub_field('sub_texto_nro_4');
                $sub_text_5 = get_sub_field('sub_texto_nro_5');
            ?>
            <section class="section_banner">
                <div class="container">
                    <h1>
                        <span class="subtitle_border">
                            <p><?php echo __($subtitle_border, 'main_theme') ?></p>
                        </span>
                        <span class="text">
                            <span class="sub_text sub"><p><?php echo __($sub_text_1, 'main_theme') ?></p></span>
                            <span class="sub_text sub2"><p><?php echo __($sub_text_2, 'main_theme') ?></p></span>
                            <span class="sub_text sub3"><p><?php echo __($sub_text_3, 'main_theme') ?></p></span>
                            <span class="sub_text sub4"><p><?php echo __($sub_text_4, 'main_theme') ?></p></span>
                            <span class="sub_text sub5"><p><?php echo __($sub_text_5, 'main_theme') ?></p></span>
                        </span>
                    </h1>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- 2. MISION -->
    <?php if (have_rows('seccion_mision')) : ?>
        <?php while (have_rows('seccion_mision')) : the_row(); ?>
            <?php 
                $subtitle = get_sub_field('subtitulo');
                $descripcion_sup = get_sub_field('descripcion_superior');
                $descripcion_inf = get_sub_field('descripcion_inferior');
            ?>
            <section class="section_mision">
                <div class="container">
                    <div class="col">
                        <span class="line_subtitle">
                            <h2 class="subtitle"><?php echo __($subtitle, 'main_theme') ?></h2>
                        </span>
                    </div>
                    <div class="col">
                        <span class="line_sup_description">
                            <div class="super_description"><?php echo __($descripcion_sup, 'main_theme') ?></div>
                        </span>
                        <span class="line_description">
                            <div class="description"><?php echo __($descripcion_inf, 'main_theme') ?></div>
                        </span>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- 3. VISION -->
    <?php if (have_rows('seccion_vision')) : ?>
        <?php while (have_rows('seccion_vision')) : the_row(); ?>
            <?php 
                $subtitle = get_sub_field('subtitulo');
                $descripcion_sup = get_sub_field('descripcion_superior');
                $descripcion_inf = get_sub_field('descripcion_inferior');
            ?>
            <section class="section_vision">
                <div class="container">
                    <div class="col">
                        <span class="line_subtitle">
                            <h2 class="subtitle"><?php echo __($subtitle, 'main_theme') ?></h2>
                        </span>
                    </div>
                    <div class="col">
                        <span class="line_sup_description">
                            <div class="super_description"><?php echo __($descripcion_sup, 'main_theme') ?></div>
                        </span>
                        <span class="line_description">
                            <div class="description"><?php echo __($descripcion_inf, 'main_theme') ?></div>
                        </span>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- 4. PLANET -->
    <?php if (have_rows('seccion_mundo')) : ?>
        <?php while (have_rows('seccion_mundo')) : the_row(); ?>
            <?php 
                $subtitle = get_sub_field('subtitulo');
                $descripcion = get_sub_field('descripcion');
            ?>
            <section class="section_earth">
                <div class="container">
                    <h2 class="subtitle"><?php echo __($subtitle, 'main_theme') ?></h2>
                    <div class="description"><?php echo __($descripcion, 'main_theme') ?></div>
                </div>
                <div class="map">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_mapamundi.svg" alt="Mapa del mundo">
                    <div class="list_countries">
                        <div class="country c_canada">
                            <p>Canada</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_mexico">
                            <p>México</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_colombia">
                            <p>Colombia</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_peru">
                            <p>Peru</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_chile">
                            <p>Chile</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_argentina">
                            <p>Argentina</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_brazil">
                            <p>Brazil</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_netherlands">
                            <p>Netherlands</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_germany">
                            <p>Germany</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_malaysa">
                            <p>Malaysa</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_singapore">
                            <p>Singapore</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_indonesia">
                            <p>Indonesia</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                        <div class="country c_philippines">
                            <p>Philippines</p>
                            <span class="map_indicator">
                                <span class="circle"></span>
                                <span class="indicator"></span>
                            </span>
                        </div>
                    </div>  
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_template_part('template-parts/footer/footer-part'); ?>
</div>
<?php get_footer(); ?>