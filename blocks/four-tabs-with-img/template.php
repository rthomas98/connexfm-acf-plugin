<?php
/**
 * Block template file: template.php
 *
 * Four Tabs With Img Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'four-tabs-with-img-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-four-tabs-with-img';
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

<div id="<?php echo esc_attr( $id ); ?>" class="four-tabs-with-img <?php echo esc_attr( $classes ); ?> py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="display-4 text-center">
                    <?php the_field( 'header' ); ?>
                </h2>
            </div>
        </div>
        <?php if ( have_rows( 'tabs' ) ) : ?>
        <div class="row d-flex align-items-center mb-4">
            <?php while ( have_rows( 'tabs' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-6 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <div class="tab p-4">
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <img class="mb-3" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endif; ?>
                    <h3><?php the_sub_field( 'title' ); ?></h3>
                    <p>
                        <?php the_sub_field( 'content' ); ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>

        <div class="row">
            <div class="col text-center">
                <p>
                    <?php the_field( 'content' ); ?>
                </p>

                <?php $button_link = get_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $button_link); ?>">
                        <?php the_field( 'button_label' ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>