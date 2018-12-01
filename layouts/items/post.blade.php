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