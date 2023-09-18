<?php
/**
 * Block template file: template.php
 *
 * Black Cta Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'black-cta-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-black-cta';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> black-cta py-5">
   <div class="container">
        <div class="row">
            <div class="col text-center">
               <p class="lead">
                   <?php the_field( 'sub_title' ); ?>
               </p>

                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>

                <?php $button_link = get_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="btn btn-secondary btn-lg" type="button" href="<?php echo esc_url( $button_link); ?>">
                        <?php the_field( 'button_label' ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
   </div>
</div>