<?php get_header(); ?>

<main>
	<?php get_template_part('template-parts/slick-carousel-1'); ?>
	<section class="slogan">
		<h2>Agilidade com Qualidade. Este é o Nosso Papel.</h2>
		<p>
			Na Forest Paper o padrão de qualidade é estar acima do mercado. Isso significa matéria-prima<br /> superior e com origem certificada. É garantia de excelência e sustentabilidade para sua empresa.
		</p>
	</section>
    <style>
        .products {
            display: flex;
            
            overflow: hidden;
        }
    </style>
	<section class="products">
		<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => -1,
			'orderby' => 'menu_order',
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug', // Or 'name' or 'term_id'
					'terms' => 'amostra-apenas',
					'operator' => 'NOT IN', // Excluded
				)
			)
		);
		$loop = new WP_Query($args);
		$products = $loop->posts;
		foreach ($products as $product): $product = wc_get_product($product->ID); $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->post->ID ), 'single-post-thumbnail' ); ?>
		<div class="product">
			<img src="<?= $image[0] ?>" alt="<?= get_the_title( $product->id ); ?>" title="<?= get_the_title( $product->id ); ?>" />
			<h3><?= get_the_title( $product->id ); ?></h3>
			<p><?= get_the_excerpt( $product->id ); ?></p>
			<a href="<?= get_permalink( $product->id ); ?>" title="<?= get_the_title( $product->id ); ?>">Saiba mais</a>
		</div>
		<?php endforeach; ?>
	</section>

	<section class="newsletter"></section>
	<?php get_footer(); ?>
	<script>

/*jQuery(".products").slick({
    centerMode: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    initialSlide: 2,
    responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
        fade: true
      }
    }
  ]
})*/

</script>
	<aside></aside>
</main>