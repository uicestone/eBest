<?php get_header(); ?>

<section class="slider-wrapper">

	<div class="slider">
		<div class="tp-banner">
			<ul>
				<?php foreach(get_posts('tag=home-slider' . CAT_LANG_SUFFIX) as $post){ ?>
				<li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
					<?=get_the_post_thumbnail($post->ID, 'home-slider', array('data-bgfit'=>'cover', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat'))?>
				</li>
				<?php } ?>
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>

	<div class="free-trial">
		<div class="content">
			<p><?=pll__('FREE TRIAL ON THE CLOUD')?></p>
			<div class="tow-floors">
				<ul>
					<a href="http://www.ebestsfa.com" target="_blank" style="color:white;"><li><?=pll__('eBest SFA')?></li></a>
					<a href="https://appexchange.salesforce.com/listingDetail?listingId=a0N3000000B5XOZEA3" target="_blank" style="color:white;"><li><?=pll__('eBestSFA on Salesforce')?></li></a>
				</ul>
			</div>
			
		</div>
	</div>
</section>


<section id="services" class="page-section hide-1200">
	<div class="container">
		<div class="inner">
			<div class="row">
				<div class="col-md-3">
					<img src="<?=get_stylesheet_directory_uri()?>/img/text-<?=pll_current_language()?>.png">
				</div>
				<div class="col-md-9">
					<div class="row special-feature">
						<!-- Special Feature Box 1 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=retail-execution')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInUp visible" data-animation="fadeInUp">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-home"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p>
								</div>
							</div></a>
						</div>
						<!-- Special Feature Box 2 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=direct-store-delivery')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-magic"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p>
								</div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=trade-promotion')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-tags"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=order-management')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-list-alt"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 1 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=supervisor')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInUp visible" data-animation="fadeInUp">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-user"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 2 -->
						<div class="col-md-6 col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
							<?=do_shortcode(get_posts('tag=home-solutions-video')[0]->post_content)?>
						</div>
						<!-- Special Feature Box 3 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=store-audit')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-cloud-upload"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=online-to-offline')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-shopping-cart"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=distributor-management')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-users"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=asset-management')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-columns"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=customer-self-order')[0]->ID)); ?>
						<div class="col-md-3 col-sm-6 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-pencil-square-o"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services-small-video" class="page-section">
	<div class="container">
		<div class="inner">
			<div class="row">
				<div class="col-md-4">
					<img src="<?=get_stylesheet_directory_uri()?>/img/text-1.png">
				</div>
				<div class="col-md-8">
					<img src="<?=get_stylesheet_directory_uri()?>/img/video.jpg">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services-rest" class="page-section">
	<div class="container">
		<div class="inner">
			<div class="row special-feature">

				
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=retail-execution')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInUp visible" data-animation="fadeInUp">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-home"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p>
								</div>
							</div></a>
						</div>
						
						
						
						
						
						
						
						
					<!-- Special Feature Box 2 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=direct-store-delivery')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInRight visible" data-animation="fadeInRight">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-magic"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p>
								</div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=trade-promotion')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-tags"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=order-management')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-list-alt"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 1 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=supervisor')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInUp visible" data-animation="fadeInUp">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-user"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>

						<!-- Special Feature Box 3 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=store-audit')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-cloud-upload"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=online-to-offline')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-shopping-cart"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=distributor-management')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInRight visible" data-animation="fadeInRight">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-users"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=asset-management')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-columns"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
						<?php $post = null; $post = get_post(pll_get_post(get_posts('name=customer-self-order')[0]->ID)); ?>
						<div class="col-xs-3 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-pencil-square-o"></i>
									<!-- Title -->
									<h4><?=$post->post_title?></h4></div>
								<div class="mask-bottom">
									<p><?=$post->post_excerpt?></p></div>
							</div></a>
						</div>
				<!-- Special Feature Box 2 -->
				
			</div>
		</div>
	</div>
</section>
<section id="cloud-info" class="page-section">
	<div class="container">
		<div class="row animated fadeInUp visible" data-animation="fadeInUp">
			<div class="col-md-12">
				<div class="tabs">
					<ul class="nav nav-tabs">
						<?php foreach(get_posts(array('category_name'=>'cloud' . CAT_LANG_SUFFIX, 'order'=>'ASC', 'posts_per_page'=>5, 'offset'=>1)) as $index => $post){?>
						<li<?php if($index === 0){ ?> class="active"<?php } ?>>
							<a data-toggle="tab" href="#post-<?=$post->ID?>" aria-expanded="true"> <?=$post->post_title?></a>
						</li>
						<?php } ?>
					</ul>
					<div class="tab-content">
						<?php foreach(get_posts(array('category_name'=>'cloud' . CAT_LANG_SUFFIX, 'order'=>'ASC', 'posts_per_page'=>5, 'offset'=>1)) as $index => $post){?>
						<div id="post-<?=$post->ID?>" class="tab-pane fade<?php if($index === 0){ ?> active<?php } ?> in">
							<a href="<?=site_url()?>/category/cloud<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><?=get_the_post_thumbnail($post->ID, 'home-cloud-info')?></a>
						</div>
						<?php } ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="news" class="page-section no-pad light-bg border-tb">
	<div class="container-fluid who-we-are">
		<div class="row">
			<div class="col-md-5 no-pad animated fadeInLeft visible" data-animation="fadeInLeft">
				<?=do_shortcode(get_posts('tag=home-news-video')[0]->post_content)?>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="col-xs-9 news-list">

						<div class="section-title text-left animated fadeInUp visible" data-animation="fadeInUp">
							<!-- Title -->
							<h2 class="title"><?=strtoupper(pll__('News'))?></h2>
						</div>
						<!-- Content -->
						<div data-animation="fadeInDown" class="animated fadeInDown visible">
							<ul class="list-group widget">
								<?php foreach(get_posts(array('category_name'=>'news' . CAT_LANG_SUFFIX, 'posts_per_page'=>-1)) as $index => $post){ ?>
								<li class="item">
									<div class="title clearfix row">
										<div class="col-sm-9 ellipsis"><a href="<?=get_the_permalink($post->ID)?>"><?=get_the_title($post)?></a></div>
										<div class="col-sm-3"><?=get_the_date('Y-m-d', $post)?></div>
									</div>
									<div class="content row">
										<div class="col-sm-9">
											<div class="col-sm-10 ellipsis">
												<?=$post->post_excerpt?>
	      							</div>
											<div class="col-sm-2">
								        <span class="arrow"></span>
								      </div>
										</div>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-xs-3 controls vertical-middle">
						<span class="news-up tp-leftarrow tparrows round"></span>
						<span class="news-down tp-rightarrow tparrows round"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text">
jQuery(function($){
	$('.news-down').on('click', function(){

	});
});
</script>

<?php get_footer(); ?>
