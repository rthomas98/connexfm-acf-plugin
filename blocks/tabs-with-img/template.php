<?php
/**
 * Block template file: template.php
 *
 * Tabs With Img Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'tabs-with-img-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-tabs-with-img';
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

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> tabs-with-img pt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
            </div>
        </div>

        <?php if ( have_rows( 'tabs' ) ) : ?>
        <div class="row tabs-holder p-5">
            <?php while ( have_rows( 'tabs' ) ) : the_row(); ?>
                <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div class="w-tab">
                            <div class="flex-shrink-0">
                            <span class="icon-holder ">
                                <?php the_sub_field( 'icon' ); ?>
                            </span>
                            </div>
                            <h3 class="flex-grow-1 ms-3">
                                <?php the_sub_field( 'title' ); ?>
                            </h3>
                            <p>
                                <?php the_sub_field( 'tab_content' ); ?>
                            </p>
                        </div>
                    </div>
                    <p>

                    </p>
                </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
    <?php $banner_image = get_field( 'banner_image' ); ?>
    <?php if ( $banner_image ) : ?>
        <img class="bottom-img" src="<?php echo esc_url( $banner_image['url'] ); ?>" alt="<?php echo esc_attr( $banner_image['alt'] ); ?>" />
    <?php endif; ?>
</section>