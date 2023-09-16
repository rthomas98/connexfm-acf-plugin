<?php
/**
 * Block template file: template.php
 *
 * Four Tabs With Icon Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'four-tabs-with-icon-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-four-tabs-with-icon';
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

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> four-tabs-with-icon">
    <div class="container py-5">
        <?php if ( have_rows( 'tabs' ) ) : ?>
        <div class="row">
            <?php while ( have_rows( 'tabs' ) ) : the_row(); ?>
                <div class="col-sm-12 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <span class="icon-holder">
                                <?php the_sub_field( 'icon' ); ?>
                            </span>
                        </div>
                        <h3 class="flex-grow-1 ms-3">
                            <?php the_sub_field( 'title' ); ?>
                        </h3>
                    </div>
                   <p>
                       <?php the_sub_field( 'content' ); ?>
                   </p>
                </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</section>