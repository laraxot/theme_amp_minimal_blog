@extends('pub_theme::layouts.app')
@section('content')
<article class="amp-wp-article">
	<header class="amp-wp-article-header">
		<div class="penci-amp-tax-category amp-wp-meta amp-wp-tax-category">
			<a href="http://pennews.pencidesign.com/amp/category/life-style/fashion/" rel="category tag">Fashion</a>	
		</div>
		<h1 class="amp-wp-title">{{ $row->title }}</h1>
		<div class="penci-amp-entry-meta">
			<span class="entry-meta-item penci-amp-byline">
				<i class="fa fa-user"></i> 
				<span class="author vcard author_name post-author">
					<a class="url fn n" href="http://pennews.pencidesign.com/amp/author/admin/">{{ $row->user }}</a>
				</span>
			</span>
			<span class="entry-meta-item penci-posted-on">
				<i class="fa fa-clock-o"></i>
				<a href="{{ $row->url }}" rel="bookmark">
					<time class="entry-date post-date published" datetime="{{ $row->published_at }}">{{ $row->published_at }}</time>
					<time class="updated" datetime="{{ $row->updated_at }}">{{ $row->updated_at }}</time>
				</a>
			</span>
			<span class="entry-meta-item penci-comment-count">
				<a href="http://pennews.pencidesign.com/amp/fashion-ironic-pink-and-4-other-back-to-school-trends/#comments">
					<i class="fa fa-comment-o"></i>3 
				</a>
			</span>				
		</div>
	</header>
	<figure class="amp-wp-article-featured-image wp-caption" >
		<amp-img width="1024" height="683" src="{{ $row->image_src }}" class="attachment-large size-large wp-post-image amp-wp-enforced-sizes" alt="" 
			srcset="http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1-1024x683.jpg 1024w, http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1-300x200.jpg 300w, http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1-768x512.jpg 768w, http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1-480x320.jpg 480w, http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1-280x186.jpg 280w, http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1-960x640.jpg 960w, http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1-600x400.jpg 600w, http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1-585x390.jpg 585w, http://max.pennews.pencidesign.com/wp-content/uploads/2017/06/fashion1.jpg 1170w" sizes="(min-width: 1024px) 1024px, 100vw">
		</amp-img>
	</figure>
	<div class="amp-wp-article-content">{!! $row->txt !!}</div>
	@include($view.'.footer')
</article>
@include($view.'.pagination')
@include($view.'.related')
{{-- // piu' avanti integreremo i commenti
@include($view.'.comments')
--}}
@endsection