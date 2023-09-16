<?php
/**
 * Block template file: template.php
 *
 * Home Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-slider-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-home-slider';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
    <?php echo '#' . $id; ?> {
    /* Add styles that use ACF values here */
    }
</style>

<section id="<?php echo esc_attr( $id ); ?>" class="mb-5 <?php echo esc_attr( $classes ); ?>">
    <?php if ( have_rows( 'slider' ) ) : ?>
        <?php while ( have_rows( 'slider' ) ) : the_row(); ?>
            <?php $bg_image = get_sub_field( 'background_image' ); ?>
            <div class="home-slider pt-5 position-relative" style="background: url(<?php echo esc_url( $bg_image ); ?>) no-repeat center center; background-size: cover;">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-8 mb-4 mb-sm-4 mb-md-4 mb-lg-0 p-5">
                            <h1 class="display-1">
                                <?php the_sub_field( 'header' ); ?>
                            </h1>

                            <p class="lead">
                                <?php the_sub_field( 'sub_title' ); ?>
                            </p>

                            <div class="d-grid gap-2 d-md-block">
                                <?php $button_one_link = get_sub_field( 'button_one_link' ); ?>
                                <?php if ( $button_one_link ) : ?>
                                    <a class="btn btn-secondary btn-lg col-12 col-sm-12 col-md-12 col-lg-4" href="<?php echo esc_url( $button_one_link ); ?>">
                                        <?php the_sub_field( 'button_one_label' ); ?>
                                    </a>
                                <?php endif; ?>

                                <?php $button_two_link = get_sub_field( 'button_two_link' ); ?>
                                <?php if ( $button_two_link ) : ?>
                                    <a class="btn btn-white btn-lg col-12 col-sm-12 col-md-12 col-lg-4" href="<?php echo esc_url( $button_two_link ); ?>">
                                        <?php the_sub_field( 'button_two_label' ); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5"></div>

                        <?php if ( have_rows( 'banner' ) ) : ?>
                    <div class="col-sm-12 col-md-12 col-lg-7 hero-banner p-4">
                            <?php while ( have_rows( 'banner' ) ) : the_row(); ?>
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                    <p class="lead m-0">
                                        <?php the_sub_field( 'sub_title' ); ?>
                                    </p>
                                    <h2>
                                        <?php the_sub_field( 'header' ); ?>
                                    </h2>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="d-grid gap-2 d-md-block">
                                    <?php $banner_button_link = get_sub_field( 'banner_button_link' ); ?>
                                    <?php if ( $banner_button_link ) : ?>
                                        <a class="btn btn-primary btn-lg col-12 col-sm-12 col-md-12 col-lg-5" href="<?php echo esc_url( $banner_button_link ); ?>">
                                            <?php the_sub_field( 'banner_button_label' ); ?>
                                        </a>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                    </div>
                        <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
