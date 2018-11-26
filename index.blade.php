<!doctype html>
<html ⚡ lang="en-US">
	@include('pub_theme::layouts.partials.htmlheader')
	<body  class="bp-legacy blog wp-custom-logo penci-amp-body sticky-header group-blog hfeed header-sticky penci_enable_ajaxsearch penci_enable_retina penci_sticky_content_sidebar blog-default two-sidebar wpb-js-composer js-comp-ver-5.4.5 vc_responsive no-js">
		@include('pub_theme::layouts.partials.sidebar')
		<div class="penci-amp-wrapper">
			<header id="#top" itemscope itemtype="https://schema.org/WPHeader" class="site-header penci-amp-wp-header">
				<div>
					<button class="fa fa-bars navbar-toggle" on="tap:penci_sidebar.toggle"></button>
					<a href="http://pennews.pencidesign.com/amp" class="branding  penci-amp-site-icon image-logo ">
						<amp-img src="http://max.pennews.pencidesign.com/wp-content/uploads/2017/11/cropped-logo.png" alt="PenNews - The Best News &amp; Magazine WordPress Themes" height="50" width="231"></amp-img>
					</a>
					<a href="http://pennews.pencidesign.com/amp/?s" class="navbar-search"><i class="fa fa-search" aria-hidden="true"></i></a>
				</div>
			</header>
			@include($view.'.slider')
			<div class="wrap">
				<div class="penci-archive__list_posts listing-1">
					@php
						$posts=$post->archive()->paginate(5);
					@endphp
					@foreach($posts as $p)
					<article class="penci-post-item penci-post-item-1 post-1990 post type-post status-publish format-standard has-post-thumbnail hentry category-apple category-microsoft tag-apple tag-news tag-tech tag-update">
						<div class="article_content">
							<div class="entry-media">
								<a class="penci-link-post" href="http://pennews.pencidesign.com/amp/head-to-head-apple-macbook-air-vs-microsoft-surface-laptop/">
									<amp-img class="penci-post-thumb" src="{{ asset($p->image_src) }}" alt="" width="480" height="320" layout="responsive"></amp-img>
								</a>
							</div>
							<div class="entry-text">
								<h3 class="penci__post-title entry-title">
									<a href="{{ $p->url }}" title="{{ $p->title }}">
									{{ $p->title }}							</a>
								</h3>
								<div class="entry-meta">
									<span class="entry-meta-item penci-amp-byline">
										<i class="fa fa-user"></i>
										<span class="author vcard author_name post-author">
											<a class="url fn n" href="{{-- $row->author_url --}}">{{-- user name --}}</a>
										</span>
									</span>
									<span class="entry-meta-item penci-posted-on">
										<i class="fa fa-clock-o"></i>
										{{--<a href="http://pennews.pencidesign.com/amp/head-to-head-apple-macbook-air-vs-microsoft-surface-laptop/" rel="bookmark"> --}}
											<time class="entry-date post-date published" datetime="{{ $p->published_at }}">{{ $p->published_at }}</time>
											<time class="updated" datetime="{{ $p->updated_at }}">{{ $p->updated_at }}</time>
										{{--</a>--}}
									</span>
									<span class="entry-meta-item penci-comment-count">
										<a href="{{ $p->url }}#comments">
											<i class="fa fa-comment-o"></i>1,609
										</a>
									</span>
								</div>
								<div class="post-excerpt1">
									<p>{{ $p->sub_title }}</p>
								</div>
								<a class="post-read-more" href="{{ $p->url }}" title="{{ $p->title }}">
								Read more<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>
					</article>
					<br/>
					@endforeach
				</div>
				<div class="penci-amp-pagination">
				{{ $posts->links() }}
				</div>
				<div class="penci-amp-pagination">
					<nav class="navigation pagination" role="navigation">
						<h2 class="screen-reader-text">Posts navigation</h2>
						<div class="nav-links"><span class='page-numbers current'>1</span>
							<span class="page-numbers dots">&hellip;</span>
							<a class='page-numbers' href='http://pennews.pencidesign.com/amp/page/18/'>18</a>
							<a class="next page-numbers" href="http://pennews.pencidesign.com/amp/page/2/"><i class="fa fa-angle-right"></i></a>
						</div>
					</nav>
				</div>
				<footer class="penci-amp-footer">
					{{--
					<div class="penci-amp-footer-container">
						<div class="penci-amp-main-link">
							<a href="http://pennews.pencidesign.com">
							<i class="fa fa-desktop"></i> View Desktop Version			</a>
						</div>
					</div>
					--}}
					<div class="footer__copyright_menu">
						<p>

							Powered by <a href="#" target="_blank"></a>

						</p>
						<a href="#top" class="back-to-top">Back To Top<i class="fa  fa-long-arrow-up"></i></a>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>
