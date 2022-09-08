<?php get_header();
    $image = get_field('image', 'option');
    $text = get_field('text', 'option');
?>

    <section>
        <div class="container">
            <h1 class="page-404"
                style="<?php if (!empty($image)) : ?> background-image: url('<?=$image['url']?>') <?php endif ?>">
                <?= $text ?? 'Strona 404' ?>
            </h1>
        </div>
    </section>
<?php get_footer(); ?>