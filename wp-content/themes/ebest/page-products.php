<?php $page_class = 'page-business'; get_header(); the_post(); ?>

<section class="banner">
	<div class="banner-bg" style="background-image: url('<?=get_stylesheet_directory_uri()?>/img/products-banner.jpg?v=2');"></div>
	<div class="sub-nav">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-xs-8">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>

					</div>
					<div class="col-xs-4">
						<a href="http://www.ebestsfa.com" class="btn btn-free">Free Trial</a>
					</div>
				</div>
				<div class="row btns tabs">
					<ul>
						<?php foreach(get_posts(array('category_name'=>'products' . CAT_LANG_SUFFIX, 'order'=>'ASC')) as $index => $post){ ?>
						<li<?php if($index === 0){ ?> class="active"<?php } ?>><a href="<?=site_url()?>/category/products/#post-<?=$post->ID?>"><?=$post->post_title?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-section no-pad light-bg border-tb mt_10">
	<div class="container-fluid who-we-are">
		<div class="row">
			<div class="col-md-6 no-pad animated fadeInLeft visible" data-animation="fadeInLeft">
				<?=do_shortcode(get_posts('tag=products-video')[0]->post_content)?>
			</div>
			<div class="col-md-6 no-pad animated fadeInLeft visible" data-animation="fadeInLeft">
				<a href="<?=site_url()?>/category/customer/#post-57" target="_blank"><img src="<?=get_stylesheet_directory_uri()?>/img/produce.png"></a>
			</div>
		</div>
	</div>
</section>
<section class="providing">
	<div class="container">
		<div class="bar_title">
			<h3><?=get_category_by_slug('industries' . CAT_LANG_SUFFIX)->description?></h3>
		</div>
		<nav class="bar-tab">
			<?php foreach(get_posts('order=asc&category_name=industries' . CAT_LANG_SUFFIX) as $index => $post){ ?>
			<a href="<?=site_url()?>/category/industries<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar0<?=$index + 1?>.png"></span>
				<span class="tab-label"><?=$post->post_title?></span>
			</a>
			<?php } ?>
		</nav>
	</div>
</section>

<?php get_footer(); ?>
