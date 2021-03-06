<?php get_header(); the_post(); ?>

<section class="title_h2">
	<div class="container">
		<h2><?php the_category(); ?></h2>
	</div>
</section>
<section class="breadcrumb-box">
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="<?=site_url()?>"><?=pll__('Home')?></a> <span>》</span>
			</li>
			<li>
				<?php the_category(); ?>
			</li>
		</ul>
	</div>
</section>
<!-- <img src="<?=get_stylesheet_directory_uri()?>/img/pages/ebest网站-v7-04.jpg"> -->
<section class="main-content mb-5">
	<div class="container">
		<div class="row">
			<div class="sidebar col-sm-12 col-md-3">
				<div class="widget">
					<div class="list-group">
						<div class="row">
							<div class="col-md-12 col-xs-6">
								<?php foreach(get_categories(array('parent'=>get_the_category()[0]->cat_ID, 'hide_empty'=>false)) as $category){ ?>
								<a href="<?=get_category_link($category)?>" class="list-group-item"><?=$category->cat_name?></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="widget">
					<div class="widget-title">
						<h3 class="title">Recent</h3>
					</div>
					<div class="list-group">
						<div class="row">
							<div class="col-md-12 col-xs-6">
								<div class="tab-content">
									<?php foreach(get_posts('category_name=news') as $news){ ?>
									<div class="tab-pane fade active in">
										<h5 class="content_title"><?=get_the_date('Y-m-d', $news->id)?></h5>
										<p>
											<small><?=get_the_title($news->ID)?></small>
										</p>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="trial col-md-12 col-xs-6">
					<div class="trial_list">
						<p>FREE TRIAL ON THE CLOUD</p>
						<div class="bg_lightblue">
							<p class="bt_white">eBest SFA</p>
							<P>eBestSFA on Salesforce</P>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="content col-sm-12 col-md-9">
				<div class="tabs">
					<div class="tab-content" unbor_bottom>
						<div class="tab-pane fade active in">
							<h4 class="content_title">
								<small class=""><?php the_date('Y-m-d'); ?></small>
								<?php the_title(); ?>
							</h4>
							<?php the_content(); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
